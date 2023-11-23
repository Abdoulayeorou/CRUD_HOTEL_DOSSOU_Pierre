<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function liste()
    {
        $hotels = Hotel::orderBy('id')->paginate(4);
        return view('hotel.liste', compact('hotels'));
    }

    public function ajouter()
    {
        return view('hotel.ajouter');
    }

    public function ajouter_hotel_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'nom_chambre' => 'required',
            'prix' => 'required|numeric',
            'nombre_lits' => 'required|integer',
            'max_adultes' => 'required|integer',
            'enfants_max' => 'required|integer',
            'attributs' => 'required|array',
            'statut' => 'required|in:Disponible,Non disponible',
        ]);

        $hotel = new Hotel();
        $hotel->nom = $request->nom;
        $hotel->description = $request->description;
        $hotel->nom_chambre = $request->nom_chambre;
        $hotel->prix = $request->prix;
        $hotel->nombre_lits = $request->nombre_lits;
        $hotel->max_adultes = $request->max_adultes;
        $hotel->enfants_max = $request->enfants_max;
        $hotel->attributs = $request->attributs;
        $hotel->statut = $request->statut;
        $hotel->save();

        return redirect('/ajouter')->with('status', 'L\'hôtel a bien été ajouté avec succès.');
    }

    // Ajoutez d'autres méthodes selon vos besoins...

    // Le reste de vos méthodes reste inchangé...

}
