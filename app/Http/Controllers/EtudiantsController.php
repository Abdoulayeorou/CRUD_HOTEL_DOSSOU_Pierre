<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{    public function liste()
    {
        //$etudiants = Etudiants::all();

        $etudiants = Etudiants::orderBy('id')->paginate(4);

        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = new Etudiants();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();
        return redirect('/ajouter')->with('status','L\'étudiant a bien été ajouté succes.');  
    }

    public function update_etudiant($id){
     $etudiants = Etudiants::find($id);

      return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = Etudiants::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        
        return redirect('/etudiant')->with('status','L\'étudiant a bien été modifié succes.');  
    }

      public function delete_etudiant($id){
        $etudiant = Etudiants::find($id);
        $etudiant ->delete();

        return redirect('/etudiant')->with('status','L\'étudiant a bien été supprimeé succes.'); 
      }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiants $etudiants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiants $etudiants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiants $etudiants)
    {
        //

    /**
     * Remove the specified resource from storage.
     */
   // public function destroy(Etudiants $etudiants)
    {
        //
    }
}
}