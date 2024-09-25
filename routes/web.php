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
Route::get('/accueil/service/assistance', function () {
    return view('service');
});

Route::get('/etude/allemagne/formation', function () {
    return view('etudes.etudeAllemagneFormation');
});
Route::get('/etude/allemagne/Universite', function () {
    return view('etudes.etudeAllemagneUniversite');
});

Route::get('/etude/france', function () {
    return view('etude.etudeFrance');
});

Route::get('/etude/france/formationInitiale', function () {
    return view('etudes.etude/france/formationInitiale');
});
Route::get('/etude/france/formationAlternance', function () {
    return view('etudes.etudeFranceAlternance');
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
