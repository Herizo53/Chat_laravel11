<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("Style/inscriptions.css") }}">
    <title>Insriptions</title>
</head>
<body>

    <div class="container">

        @error('email')
            <div id="notification" class="notification">❌ Une erreur est survenue !</div>
        @enderror

        @error('photo')
            <div id="notification" class="notification">❌ Image iniquement !</div>
        @enderror

        <form action="{{ route("storeRegister") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>INSCRIPTIONS</h4>
            <div class="containerFluid">
                <label class="form-label">Nom</label>
                <input type="text" name="name" required>
            </div>
            <div class="containerFluid">
                <label class="form-label">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="containerFluid">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <div class="containerFluid">
                <label class="form-label">Photo</label>
               <div class="parent_file">
                    <input type="file" name="photo"required id="monFichier">
                    <h5>Insertion du photo</h5>
               </div>
            </div>
            <button type="submit">S'inscrire</button>
            <p class="text-center mt-3">Déjà inscrit ? <a href="{{ route("login") }}">Se connecter</a></p>
        </form>
        
    </div>

    <script>
        const notif = document.getElementById("notification");
        notif.classList.add("show");

        // Cacher après 3 secondes
        setTimeout(() => {
            notif.classList.remove("show");
        }, 3000);
    </script>
</body>
</html>