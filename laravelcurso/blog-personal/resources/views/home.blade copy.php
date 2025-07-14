<!-- el corazon de la pagina   en home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h2 class="text-center mb-4">Bienvenido a mi Blog Personal</h2>
    <div class="row">
        <div class="col-md-4 mb-4 text-center">
            <x-articulo-card
                titulo="🎨 Dibujos / Arte"
                descripcion="El arte del boceto digital en el mundo de la animación." />
        </div>

        <div class="col-md-4 mb-4 text-center">
            <x-articulo-card
                titulo="🧙‍♂️ Personajes"
                descripcion="Los villanos más icónicos del cine." />
        </div>

        <div class="col-md-4 mb-4 text-center">
            <x-articulo-card
                titulo="🗡️ Armas"
                descripcion="Armas en videojuegos: realismo vs ficción." />
        </div> 
    </div>


</div>
        @endsection