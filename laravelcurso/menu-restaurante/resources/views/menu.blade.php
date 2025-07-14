@extends('layouts.main') 

@section('content')
    

    <h2 class="text-primary text-center">Entrantes</h2>
    <x-plato-card nombre="Ensalada" descripcion="Lechuga, tomate, cebolla, atun" precio="6.50" image="assets/img/ensalada.jpg"/>
    <x-plato-card nombre="Sopa" descripcion="Caldo casero de pollo" precio="5.00" image="assets/img/sopa.jpg"/>

    <h2 class="text-primary text-center">Platos Principales</h2>
    <x-plato-card nombre="Paella" descripcion="Paella de mariscos tradicional" precio="12.00"  image="assets/img/paella.webp"/>
    <x-plato-card nombre="Pollo Asado" descripcion="Pollo con patatas al horno" precio="10.00" image="assets/img/pollo.jpg" />

    <h2 class="text-primary text-center">Postres</h2>
    <x-plato-card nombre="Flan" descripcion="Flan casero de huevo" precio="3.50" image="assets/img/flan.webp"/>
    <x-plato-card nombre="Tarta de Queso" descripcion="Tarta con mermelada de fresa" precio="4.00" image="assets/img/tartaqueso.webp"/>

    <h2 class="text-primary text-center">Bebida</h2>
    <x-plato-card nombre="Agua" descripcion="Agua Mineral 1,3 Litros" precio="1.00" image="assets/img/agua.jpg"/>
    <x-plato-card nombre="Cafe" descripcion="Cafe Cortada Baraquito" precio="1.00" image="assets/img/cafe.png"/>
    @endsection
