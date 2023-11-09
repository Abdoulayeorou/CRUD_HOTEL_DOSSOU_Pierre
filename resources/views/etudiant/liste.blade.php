<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Project Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Mon Project Laravel</h1>
     <div class="container text-center">
  <div class="row">

    <div class="col s12">
        <hr>
    <a href="/ajouter" class="btn btn-primary">AJouter un etudiant</a>
     <hr>
     @if (session('status'))
         <div class="alert alert-success">
            {(session('status'))}
         </div>

       @endif


     <table class="table" >
           <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Actions</th>
            </tr>
           </thead>
           <tbody>
            @php
            $ide = 1 ;
            @endphp

            @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{$ide}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->classe}}</td>
                <td>
                    <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
                    <a href="delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @php

            $ide += 1; 
            
            @endphp

            @endforeach
           </tbody>
     </table>
   
     {{$etudiants->links() }}

    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>