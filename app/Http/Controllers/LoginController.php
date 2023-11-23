<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Afficher la vue login
    public function form_login()
    {
        return view('login');
    }

    public function form_login_post(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Rediriger l'utilisateur vers la page prévue après la connexion
            return redirect()->intended('/dashboard');
        }

        // En cas d'échec de connexion, retourner avec des erreurs
        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }
}
