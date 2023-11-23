<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/api/users', [UserController::class, 'index']);
    Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',[DashboardController::class, 'logout'])->name('logout');
});

Route::get('/delete-hotel/{id}', [HotelController::class, 'delete_hotel']);
Route::get('/update-hotel/{id}', [HotelController::class, 'update_hotel']);
Route::post('/update/traitement', [HotelController::class, 'update_hotel_traitement']);
Route::get('/hotel', [HotelController::class, 'liste']);
Route::get('/ajouter', [HotelController::class, 'ajouter']);
Route::post('/ajouter/traitement', [HotelController::class, 'ajouter_hotel_traitement']);
// Afficher le formulaire d'enregistrement
Route::get('/', [RegisterController::class, 'form_register'])->name('register');

// Traiter le formulaire d'enregistrement

Route::post('/register', [RegisterController::class, 'form_register_post'])->name('register.post');

Route::get('/login', [LoginController::class, 'form_login'])->name('login');
Route::post('/login', [LoginController::class, 'form_login_post'])->name('login');
