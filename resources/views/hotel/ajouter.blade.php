<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Projet Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>AJOUTER UN HÔTEL</h1>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action='/ajouter/traitement' method='POST'>
                    @csrf

                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>

                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom de l'hôtel</label>
                        <input type="text" id="Nom" class="form-control" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description de l'hôtel</label>
                        <textarea id="Description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="NomChambre" class="form-label">Nom de la chambre</label>
                        <input type="text" id="NomChambre" class="form-control" name="nom_chambre">
                    </div>
                    <div class="mb-3">
                        <label for="Prix" class="form-label">Prix</label>
                        <input type="text" id="Prix" class="form-control" name="prix">
                    </div>
                    <div class="mb-3">
                        <label for="NombreLits" class="form-label">Nombre de lits</label>
                        <input type="text" id="NombreLits" class="form-control" name="nombre_lits">
                    </div>
                    <div class="mb-3">
                        <label for="MaxAdultes" class="form-label">Max d'adultes</label>
                        <input type="text" id="MaxAdultes" class="form-control" name="max_adultes">
                    </div>
                    <div class="mb-3">
                        <label for="EnfantsMax" class="form-label">Enfants maximum autorisé</label>
                        <input type="text" id="EnfantsMax" class="form-control" name="enfants_max">
                    </div>
                    <div class="mb-3">
                        <label for="Attributs" class="form-label">Attributs (Services de réveil, Télévision, Service de nettoyage, Petit déjeuner, etc.)</label>
                        <textarea id="Attributs" class="form-control" name="attributs" placeholder="Saisissez un attribut par ligne"></textarea>
                        <small id="attributsHelp" class="form-text text-muted">Saisissez un attribut par ligne (par exemple: Service de réveil, Télévision, Service de nettoyage).</small>
                    </div>


                    <div class="mb-3">
                        <label for="Statut" class="form-label">Statut (Disponible - Non disponible)</label>
                        <select id="Statut" class="form-control" name="statut">
                            <option value="Disponible">Disponible</option>
                            <option value="Non disponible">Non disponible</option>
                        </select>
                    </div>


                    <br>
                    <button type="submit" class="btn btn-primary">AJOUTER UN HÔTEL</button>
                    <br><br>
                    <a href="/hotel" class="btn btn-danger">Revenir à la liste des hôtels</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
