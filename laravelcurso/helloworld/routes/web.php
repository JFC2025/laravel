<?php

use Illuminate\Support\Facades\Route;

// metodos

// Route::view('/bienvenida', 'nombre_de_la_vista');
// Route::gey('Mi/ruta',ControladorRuta);
// Route::post();
// Route::put();
// Route::delete();
// Route::patch();

Route::view('/','landing.index')->name('index');
Route::view('/about','landing.about')->name('about');


