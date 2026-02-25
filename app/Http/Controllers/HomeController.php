<?php

namespace App\Http\Controllers;
use App\Models\Libro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $libros = Libro::paginate(3);

        return view('home.index', compact('libros'));
    }
}