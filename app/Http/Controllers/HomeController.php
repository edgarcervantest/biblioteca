<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\User;
use App\Models\Prestamo;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->user_type == 'admin') {
            $libros = Libro::with('categoria')->paginate(3);
            $total_libros = $libros->total();
            $prestamos_activos = Libro::where('estatus', 1)->count();
            $total_usuarios = User::count();
            $devoluciones_pendientes = Prestamo::where('estado', 'pendiente')->count();

            return view('home.index', compact('libros', 'total_libros', 'prestamos_activos', 'total_usuarios', 'devoluciones_pendientes'));
        } else {
            $libros = Libro::paginate(3);

            return view('home.index_user', compact('libros'));
        }
    }
}