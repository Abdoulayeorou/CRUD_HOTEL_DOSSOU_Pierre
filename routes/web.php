<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;

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

Route::get('/delete-etudiant/{id}', [EtudiantsController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantsController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantsController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantsController::class, 'liste']);
Route::get('/ajouter', [EtudiantsController::class, 'ajouter']);
Route::post('/ajouter/traitement', [EtudiantsController::class, 'ajouter_etudiant_traitement']);