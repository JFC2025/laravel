<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

// Mostrar la lista de usuarios
Route::get('/', [UserController::class,'index'])->name('user.index');

// Mostrar formulario para crear un usuario
Route::get('/create', [UserController::class,'create'])->name('user.create');

// Guardar el nuevo usuario
// Route::post('/users', [UserController::class, 'store'])->name('user.store');