<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi blog personal</title>
    <!-- anadir esta linea con link:css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<!-- lo que se va a ver es a partir de aqui -->

<body>
    <!-- de la carpeta header en layouts de views -->
    @include('partials.header')

    <!-- espacio para el contenido -->
    @yield('content')

    <!-- de la carpeta footer en layouts de views -->
    @include('partials.footer')

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>