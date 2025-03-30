<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Descriptions;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    // Affiche dashboard

    public function dashboard(){

        $users = User::all();
        $utilisateur = User::all()->count();

        // Messages
        $message = Descriptions::orderBy('created_at', 'desc')->get()->where('receive_id',Auth::user()->id);
        $counterMessage = Descriptions::all()->where('receive_id',Auth::user()->id)->count();

        // Affiches tout les Messages
        $toutms = Descriptions::all();

        // Attachements
        $attch = Descriptions::orderBy('created_at', 'desc')->get()->where('receive_id',Auth::user()->id);

        // Publications
        $pub = Publication::orderBy('created_at', 'desc')->get();

        return view('dashboard',compact('users','message','toutms','attch','pub'))
            ->with([
                'totalUser' => $utilisateur,
                'counterMessage' => $counterMessage
            ]);
    }

    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traiter la connexion
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $status = User::Find(Auth::user()->id);
            $status->update(['status' => 'ok']);
            // La connexion a réussi
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['error' => 'Identifiants incorrects'])->withInput();
    }

    // Afficher le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Traiter l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',
            'photo'     => 'required|image|max:10240'
        ]);

        $file = $request->file('photo');
        $extension = strtolower($file->getClientOriginalExtension());
        $allowed = ['jpg', 'jpeg', 'png','gif'];

        // Vérification de l'extension
        if (!in_array($extension, $allowed)) {
            return back()->withErrors(['photo' => 'Image uniquement !'])->withInput();
        }

        // Enregistrement du fichier
        $fileName = time() . '_' . $file->getClientOriginalName();
        $destination = public_path('UserPhoto');
        if (!file_exists($destination)) mkdir($destination, 0777, true);
        $file->move($destination, $fileName);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'photo'    => $fileName,
            'status'   => 'ok',
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    // Déconnexion
    public function logout()
    { 
        $status = User::Find(Auth::user()->id);
        $status->update(['status' => 'non']);

        Auth::logout();
        return redirect()->route('login');
    }

    // Amis 
    public function amis(){
        $users = User::all();
        return view('User', compact('users'));
    }

    // Message
    public function message($id){

        $idUser = User::find($id);

        return back()->with(
            [
                'userid'      =>  $idUser->id,
                'userphoto'      =>  $idUser->photo,
                'username'    =>   $idUser->name,
                'userstatus'  =>  $idUser->status,
            ]
        );
    }

    // Send message
    public function sendmessage(Request $request){

        $request->validate([
            'description' => 'string',
            'id_receive' => 'string',
            'fichiersender' => 'file|max:10240', // max 10MB
        ]);

        $file = $request->file('fichiersender');
        $description = $request->description;

        if ($request->hasFile('fichiersender')){

            $filename = time() . '_' . $file->getClientOriginalName();
            $extension = strtolower($file->getClientOriginalExtension());

            // Destination : public/mes_fichiers/
            $destinationPath = public_path('Fichiers');

            // Créer le dossier s’il n’existe pas
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Déplacement du fichier
            $file->move($destinationPath, $filename);

            Descriptions::create([
                'receive_id'         => $request->id_receive,
                'send_id'            => Auth::user()->id,
                'descriptions'       => $description,
                'fichiers'           => 'Fichiers/'.$filename,
                'extesion_fichiers'  => $extension,
            ]);

            $idUser = User::find($request->id_receive);

            return back()->with(
                [
                    'userid'      =>  $idUser->id,
                    'userphoto'   =>  $idUser->photo,
                    'username'    =>  $idUser->name,
                    'userstatus'  =>  $idUser->status,
                ]
            );
        }
        else{
            Descriptions::create([
                'receive_id'         => $request->id_receive,
                'send_id'            => Auth::user()->id,
                'descriptions'       => $description,
                'fichiers'           => 'aucun fichiers',
                'extesion_fichiers'  => 'aucun extension',
            ]);

            $idUser = User::find($request->id_receive);

            return back()->with(
                [
                    'userid'      =>  $idUser->id,
                    'userphoto'   =>  $idUser->photo,
                    'username'    =>  $idUser->name,
                    'userstatus'  =>  $idUser->status,
                ]
            );
        }   
    }


    // Donwload

    public function download($id){

       $download = Descriptions::find($id);

       if($download){
        return response()->download(public_path($download->fichiers));
       }
    }

    // Voir messages
    public function voirmessage($id){

        $idUser = Descriptions::find($id);
        $infoId = User::find($idUser->send_id);

        return back()->with(
            [
                'userid'      =>  $infoId->id,
                'userphoto'   =>  $infoId->photo,
                'username'    =>  $infoId->name,
                'userstatus'  =>  $infoId->status,
            ]
        );
    }

    // Publications
    public function publier(Request $request){

        $request->validate([
            'article' => 'string',
            'photoPub' => 'file|max:10240', // max 10MB
        ]);

        $file = $request->file('photoPub');
        $article = $request->article;

        // Vérification  si le fichier existe
        if ($request->hasFile('photoPub')){

            $extension = strtolower($file->getClientOriginalExtension());
            $allowed = ['jpg', 'jpeg', 'png','gif'];

            // Vérification de l'extension
            if (!in_array($extension, $allowed)) {
                return back()->with(['errorFIle' => 'Image uniquement !']);
            }
            else{

                $filename = time() . '_' . $file->getClientOriginalName();

                // Destination : public/mes_fichiers/
                $destinationPath = public_path('Articles');

                // Créer le dossier s’il n’existe pas
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }

                // Déplacement du fichier
                $file->move($destinationPath, $filename);

                Publication::create([
                    'id_user'      => Auth::user()->id,
                    'photo_pub'    => 'Articles/'.$filename,
                    'article'      => $article,
                ]);

                return back()->with(['pubSuccess' => 'Publication réussie !']);
            }
        }

        // Sinon
        else{

            Publication::create([
                'id_user'      => Auth::user()->id,
                'photo_pub'    => 'aucun photo',
                'article'      => $article,
            ]);

            return back()->with(['pubSuccess' => 'Publication réussie !']);
        }

    }
}