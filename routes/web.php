<?php

use App\Http\Controllers\profilController;
use App\Http\Controllers\partenaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profil/{id}', [profilController::class , 'afficher_profil'] );
Route::get('/profil/{id}/update', [profilController::class , 'update_profil'] );

Route::get('/partenaire/{id}/add_service', [partenaireController::class , 'add_service'] );
