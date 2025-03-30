<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("Style/inscriptions.css") }}">
    <title>Connexion</title>
</head>
<body>

    @error('error')
        <div id="notification" class="notification">❌ Une erreur est survenue !</div>
    @enderror

    <div class="container">

        <form action="{{ route("storeLogin") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Connexion</h4>
            <div class="containerFluid">
                <label class="form-label">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="containerFluid">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
            <p class="text-center mt-3">Pas encore inscrit ? <a href="{{ route("register") }}">Créer un compte</a></p>
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