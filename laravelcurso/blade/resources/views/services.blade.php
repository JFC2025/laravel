@extends('layouts.landing')

@section('title','services')

@section('content')
    <main>
        <h1>SERVICES</h1>
        <div class="cards">
            @component('components.card')
                @slot('title' , 'Service1')
                @slot('image','assets/img/teide.jpg')
                @slot('content' , 'El teide en tenerife.')
            @endcomponent

            @component('components.card')
                @slot('title' , 'Service2')
                @slot('image','assets/img/cielo.jpg')
                @slot('content' , 'loren Ipsum dolor set aimet.')
            @endcomponent

            @component('components.card')
                @slot('title' , 'Service3')
                @slot('image','assets/img/mar.jpg')
                @slot('content' , 'loren Ipsum dolor set aimet.')
            @endcomponent

             @component('components.card')
                @slot('title' , 'Service4')
                @slot('image','assets/img/bosque.jpg')
                @slot('content' , 'loren Ipsum dolor set aimet.')
            @endcomponent

        </div>
    </main>
   


@endsection