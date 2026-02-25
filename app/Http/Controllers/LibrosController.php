<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Libro;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }
    public function create()
    {
        $categorias = Categoria::all();

        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        return redirect()->route('home')->with('success', 'Libro creado exitosamente');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);
        $libro = Libro::findOrFail($id);
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        return redirect()->route('home')->with('success','Libro actualizado');
    }

    public function edit($id){
        $libro = Libro::findOrFail($id);
        $categorias = Categoria::all();
        return view('libros.edit', compact('libro','categorias'));
    }
}