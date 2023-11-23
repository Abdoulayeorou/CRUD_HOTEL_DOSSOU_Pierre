<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Projet Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>MODIFIER UN HÔTEL</h1>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action='/update-hotel/traitement' method='POST'>
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $hotel->id }}" >

                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>

                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom de l'hôtel</label>
                        <input type="text" id="Nom" class="form-control" name="nom" value="{{ $hotel->nom }}" >
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description de l'hôtel</label>
                        <textarea id="Description" class="form-control" name="description">{{ $hotel->description }}</textarea>
                    </div>
                    <!-- Ajoutez les autres champs de l'hôtel selon vos besoins -->

                    <br>
                    <button type="submit" class="btn btn-primary">MODIFIER UN HÔTEL</button>
                    <br><br>
                    <a href="/hotels" class="btn btn-danger">Revenir à la liste des hôtels</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
