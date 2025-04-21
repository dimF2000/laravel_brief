<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

// Rediriger la page d'accueil vers la liste des clients
Route::get('/', function () {
    return redirect('/clients');
});

Route::resource('clients', ClientController::class);