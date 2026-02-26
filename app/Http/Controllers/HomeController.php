<?php

namespace App\Http\Controllers;
use App\Models\Libro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->user_type == 'admin') {
            $libros = Libro::paginate(5);

            return view('home.index', compact('libros'));
        } else {
            $libros = Libro::paginate(3);

            return view('users.index', compact('libros'));
        }
    }
}