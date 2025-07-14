<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // Primer usuario (creación manual con save)
        $user = new User;
        $user->name = "Juanito";
        $user->email = "demo@demo.com"; 
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Calle La Galga 27";
        $user->zip_code = "38000";
        $user->save();

        // Otros usuarios con create()
        User::create([
            "name" => "Pedro",
            "email" => "pedro@info.es",
            "password" => Hash::make('123456'),
            "age" => 42,
            "address" => "Av Prueba 58",
            "zip_code" => "38001",
        ]);

        User::create([
            "name" => "Mario",
            "email" => "mario@info.es",
            "password" => Hash::make('123456'),
            "age" => 32,
            "address" => "Av Prueba 5",
            "zip_code" => "38002",
        ]);

        User::create([
            "name" => "Francis",
            "email" => "francis@info.es",
            "password" => Hash::make('123456'),
            "age" => 22,
            "address" => "Av Prueba 158",
            "zip_code" => "38003",
        ]);

        // Redirigir con mensaje
        return redirect()->route('user.index')->with('success', 'Usuarios creados correctamente.');
    }
}
