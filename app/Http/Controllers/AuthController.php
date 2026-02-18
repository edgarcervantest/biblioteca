<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register()
    {
        #Validar los datos del registro
        $validatedData = request()->validate([
            'name'=> 'required | string | max:255',
            'email'=> 'required | string | email | max:255 | unique:users',
            'password'=> 'required | string | min:8 | confirmed',
            'password_confirmation'=> 'required | string | min:8'
        ]);

        #Crear el usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        #Redirigir o iniciar sesion automaticamente
        auth()->login($user);
        return redirect()->route('home');
    }

    public function login(){

    #Validar los datos de login
    $credentials = request()->validate([
        'email'=> 'required | string | email',
        'password'=> 'required | string'
    ]);

    #Intentar iniciar sesion
    if(auth()->attempt($credentials)){
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Las credenciales no son correctas'
    ]);
    }
}