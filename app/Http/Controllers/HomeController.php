<?php

namespace App\Http\Controllers;
use App\Models\Libro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $libros = Libro::all();

        return view('home.index', compact('libros'));
    }
}