<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{
    public function index()
    {
    $productos = Producto::todos();
    return view('productos.index', compact('productos'));

    }
}