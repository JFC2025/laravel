<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FacturaController;

Route::get('/facturas', [FacturaController::class, 'index']);
