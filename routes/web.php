<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantcontroller;
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

Route::get('/update-etudiant/{id}',[Etudiantcontroller::class,'update_etudiant']);
Route::get('/delete-etudiant/{id}',[Etudiantcontroller::class,'delete_etudiant']);
Route::post('/update/traitement',[Etudiantcontroller::class,'update_etudiant_traitement']);
Route::get('/etudiant',[Etudiantcontroller::class,'liste_etudiant']);
Route::get('/ajouter',[Etudiantcontroller::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement',[Etudiantcontroller::class,'ajouter_etudiant_traitement']);
