<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlatoCard extends Component
{
    public $nombre;
    public $descripcion;
    public $image;
    public $precio;

    public function __construct($nombre, $descripcion, $image, $precio)
    {
         $this->nombre = $nombre;
         $this->descripcion = $descripcion;
         $this->image = $image;
         $this->precio = $precio;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.plato-card');
    }
}
