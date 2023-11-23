<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Afficher le formulaire d'inscription
    public function form_register()
    {
        return view('register');
    }

    // Traitement du formulaire d'inscription
    public function form_register_post(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6', // Ajusté la règle de validation du mot de passe
        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('register')->with('status', 'Votre inscription a bien été prise en compte.');
    }
}
