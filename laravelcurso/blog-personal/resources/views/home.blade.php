<!-- el corazon de la pagina   en home.blade.php -->
@extends('layouts.app')

@section('content')

<x-articulo-card
    titulo="🎨 Dibujos / Arte"
    descripcion="El arte del boceto digital en el mundo de la animación." />


<x-articulo-card
    titulo="🧙‍♂️ Personajes"
    descripcion="Los villanos más icónicos del cine." />

<x-articulo-card
    titulo="🗡️ Armas"
    descripcion="Armas en videojuegos: realismo vs ficción." />

@endsection