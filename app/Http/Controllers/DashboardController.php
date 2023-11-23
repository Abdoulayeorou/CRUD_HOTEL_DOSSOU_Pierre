<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //fonction pour afficher le dashboard
    public function dashboard(){
     return view('dashboard');
    }


    //fuction de déconnexion
     public function logout(){
        Auth::logout();
        return redirect()->route('login');
     }
}
