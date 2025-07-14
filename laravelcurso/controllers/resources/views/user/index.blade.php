<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>User List</title>
</head>
<body>
        
    <h1>User List:</h1>
    
        <ul>
            @forelse($users as $user)
            <strong>Nombre:</strong> {{ $user->name }} <br>
            <strong>Email:</strong> {{ $user->email }} <br>
            <strong>Edad:</strong> {{ $user->age }} años <br>
            <strong>Dirección:</strong> {{ $user->address }} <br>
            <strong>Código postal:</strong> {{ $user->zip_code }}
            <hr>
            @empty
            <li>The list is empty!</li>
            @endforelse
        </ul>


    <!-- @if($users->isEmpty())
        <p>The list is empty!</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endif -->

</body>
</html>
