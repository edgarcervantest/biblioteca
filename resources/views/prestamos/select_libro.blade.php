@extends('layouts.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="breadcrumb_text">
                            <i class="fas fa-home mr-2"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="inline-flex items-center">
                        <a href="{{ route('prestamos.index') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Préstamos
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="{{ route('prestamos.create') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Agregar préstamo
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Seleccionar libro
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Seleccionar libro</h2>
        </div>

        <form action="{{ route('prestamos.store') }}" method="POST" class="grey_card shadow-md rounded lg p-6">
            @csrf

             <div class="mb-4">
                <h3 class="title_text">Datos del usuario</h3>
                <p class="content_text">ID: {{ $usuario->id }}</p>
                <p class="content_text">Nombre: {{ $usuario->name }}</p>
                <p class="content_text">Correo: {{ $usuario->email }}</p>
            </div>

            <div class="mb-4">
                <label for="libro" class="block content_text font-bold mb-2">Libro:</label>
                <select name="libro_id" id="libro" class="w-full px-4 py-2 input_text grey_card">
                    <option value="">Seleccione un libro</option>
                    @foreach ($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                    @endforeach
                </select>

                <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="purple_button">Prestar libro</button>
                <a href="{{ route('prestamos.create') }}" class="action_button">Cancelar</a>
            </div>
        </form>

    </div>
@endsection