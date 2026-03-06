<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(3);

        return view('usuarios.index', compact('usuarios'));
    }
}
