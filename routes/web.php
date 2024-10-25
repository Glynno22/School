<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/etude/allemagne', function () {
    return view('etude.etudeAllemagne');
});


Route::get('/etude', function () {
    return view('etude');
});

Route::get('/assistance', function () {
    return view('espert');
});

Route::get('/temoignage', function () {
    return view('temoignage');
});


// Route::get('/event-a-venir', function () {
//     return view('a-venir');
// });

Route::get('/about', function () {
    return view('apropos');
});

Route::get('/accueil/service/assistance', function () {
    return view('service');
});

Route::get('/etude/allemagne/formation', function () {
    return view('etude.etudeAllemagneFormation');
});
Route::get('/etude/allemagne/universite', function () {
    return view('etude.etudeAllemagneUniversite');
});

Route::get('/etude/france', function () {
    return view('etude.etudeFrance');
});

Route::get('/etude/france/formationInitiale', function () {
    return view('etude.etudeFranceFormationInitiale');
});
Route::get('/etude/france/formationAlternance', function () {
    return view('etude.etudeFranceAlternance');
});
Route::get('/etude/belgique', function () {
    return view('etude.etudeBelgique');
});

Route::get('/etude/congo', function () {
    return view('etude.etudeCongo');
});
Route::get('/etude/autre', function () {
    return view('contact');
});
Route::get('/etude/canada', function () {
    return view('etude.etudeCanada');
});
