<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Projet Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>Inscription</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>

                {{-- Vous avez un @endif mal placé sans @if correspondant. Je suppose qu'il doit être supprimé --}}
                {{-- @endif --}}

                <form action="{{ route('register') }}" method='POST'>
                    @csrf

                    <p>Inscription</p>

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>

                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" id="Nom" class="form-control" name="nom">
                    </div>

                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prénom</label>
                        <input type="text" id="Prenom" class="form-control" name="prenom">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>

                Déjà un compte ? <a href="{{ route('login') }}" class="button-text-w3ls">Se connecter</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
