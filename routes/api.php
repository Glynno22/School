<?php

use App\Http\Controllers\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conseiller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//////////// j'enregistre un contact
Route::post ('/client', [Client::class, 'AJOUTER']);
///////////////// j'enregistre un expert
Route::post('/expert', [Conseiller::class, 'create']);
//////////////// je liste les contacts
Route::get ('/Lister' , [Client::class, 'LISTE']);
////// j'insère une actualité
Route::post ('/actu/{id_expert}', [Conseiller::class, 'Charger_Actualite']);