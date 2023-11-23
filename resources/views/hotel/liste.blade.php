<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Projet Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Mon Projet Laravel</h1>
        <div class="row">
            <div class="col s12">
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un hôtel</a>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom de l'hôtel</th>
                            <th>Description</th>
                            <th>Nom de la chambre</th>
                            <th>Prix</th>
                            <th>Nombre de lits</th>
                            <th>Max d’adultes</th>
                            <th>Enfants maximum autorisé</th>
                            <th>Attributs</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $ide = 1; @endphp
                        @foreach ($hotels as $hotel)
                            <tr>
                                <td>{{ $ide++ }}</td>
                                <td>{{ $hotel->nom }}</td>
                                <td>{{ $hotel->description }}</td>
                                <td>{{ $hotel->nom_chambre }}</td>
                                <td>{{ $hotel->prix }}</td>
                                <td>{{ $hotel->nombre_lits }}</td>
                                <td>{{ $hotel->max_adultes }}</td>
                                <td>{{ $hotel->max_enfants }}</td>
                                <td>{{ implode(', ', json_decode($hotel->attributs)) }}</td>
                                <td>{{ $hotel->statut }}</td>
                                <td>
                                    <a href="/update-hotel/{{ $hotel->id }}" class="btn btn-info">Update</a>
                                    <a href="/delete-hotel/{{ $hotel->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $hotels->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
