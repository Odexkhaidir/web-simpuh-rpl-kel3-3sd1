<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutputKekumuhanController;

Route::view('/profil', 'profil');
Route::view('/profilEdit', 'ProfilEdit');
Route::view('/AdminHome', 'AdminHome');
Route::get('/Home', [OutputKekumuhanController::class, 'index'])->name('Home');