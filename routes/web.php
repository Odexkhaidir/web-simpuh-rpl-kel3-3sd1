<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutputKekumuhanController;

Route::view('/profil', 'livewire.profil');
Route::view('/profil-edit', 'livewire.profil-edit');
Route::get('/', [OutputKekumuhanController::class, 'index'])->name('livewire.home');