<?php

namespace App\View\Components;

use closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class ArticuloCard extends Component
{
    public $titulo;
    public $descripcion;

    public function __construct(string $titulo,string $descripcion)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    public function render():View|Closure|string
    {
        return view('components.articulo-card');
    }
}







// namespace App\View\Components;

// use Closure;
// use Illuminate\Contracts\View\View;
// use Illuminate\View\Component;

// class articuloCard extends Component
// {
//     /**
//      * Create a new component instance.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Get the view / contents that represent the component.
//      */
//     public function render(): View|Closure|string
//     {
//         return view('components.articulo-card');
//     }
// }
