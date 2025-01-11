<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutputKekumuhanController;

Route::view('/profil', 'livewire.profil');
Route::view('/profil-edit', 'livewire.profil-edit');
Route::get('/home', [OutputKekumuhanController::class, 'index'])->name('livewire.home');