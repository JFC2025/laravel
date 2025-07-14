<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ 'assets/css/styles.css' }}">
    @yield('styles')
    <title>
        @yield('titulo')

    </title>
</head>
<body>
        @include('layouts._partials.menu')
        @yield('content')
       
       
       
        @yield ('script')
</body>
</html>