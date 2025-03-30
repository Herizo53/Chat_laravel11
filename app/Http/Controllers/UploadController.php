<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{

    public function file(){
        return view("ajax.ajax");
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'file' => 'required|file|max:10240', // max 10MB
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filetype = $file->getClientMimeType();
        $filesize = $file->getSize();

        // Enregistrement du fichier dans storage/app/public/uploads
        //$file->storeAs('public/uploads', $filename);

        /* Enregistrement en base
        Upload::create([
            'filename' => $filename,
            'filetype' => $filetype,
            'filesize' => $filesize,
            'description' => $request->description,
        ]);*/

        /*
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // continuer traitement
        } else {
            return response()->json(['message' => 'Aucun fichier n\'a été sélectionné.'], 400);
        }*/
        

        return response()->json(['message' => $nl]);
    }
}
