<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Project Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>AJOUTER UN ETUDIANT</h1>
     <div class="container ">
  <div class="row">

    <div class="col s12">
        <hr>
         
        @if (session('status'))
         <div class="alert alert-success">
            {(session('status'))}
         </div>

       @endif

        <form action='/ajouter/traitement' method='POST'>
         @csrf 

        <ul>
            @foreach($errors->all() as $error )
              <li class="alert alert-danger"> {{$error}}</li>
             @endforeach
        </ul>
        
        <div class="mb-3">
      <label for="Nom" class="form-label">Nom</label>
      <input type="text" id="Nom" class="form-control" name="nom" >
    </div>
    <div class="mb-3">
      <label for="Prenom" class="form-label">Prenom</label>
      <input type="text" id="Prenom" class="form-control" name="prenom" >
    </div>
    <div class="mb-3">
      <label for="Classe" class="form-label">Classe</label>
      <input type="text" id="Classe" class="form-control" name="classe" >
    </div>
    <br>
    <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
    <br><br>
    <a href="/etudiant" class="btn btn-danger" >Revenir à la liste des etudiants</a>
</form>

    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>