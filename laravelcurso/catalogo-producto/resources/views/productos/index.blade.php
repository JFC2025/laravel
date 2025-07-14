

@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')
    <h1 class="mb-4">Catálogo de productos</h1>
    <div class="row">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-3">
                <x-producto-card
                    :nombre="$producto['nombre']"
                    :precio="$producto['precio']"
                    :descripcion="$producto['descripcion']"
                />
            </div>
        @endforeach
    </div>
@endsection