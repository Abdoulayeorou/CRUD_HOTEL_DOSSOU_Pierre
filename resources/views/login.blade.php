<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Project Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>Authentification</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>

                <form action="{{route('login')}}" method='POST'>
                   @csrf
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <p>Connexion</p>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <p>Pas encore inscrit?<a href="{{ route('register') }}" class="button-text-w3ls"> Créer un compte.</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
