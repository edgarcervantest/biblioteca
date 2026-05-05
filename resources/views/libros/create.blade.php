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
                        <a href="{{ route('libros.index') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Libros
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Agregar libro
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Agregar libro</h2>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 250 text-green-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('libros.store') }}" method="POST" class="grey_card shadow-md rounded lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block content_text font-bold mb-2">Nombre del libro:</label>
                <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 input_text" required>
            </div>
            <div class="mb-4">
                <label for="isbn" class="block content_text font-bold mb-2">ISBN:</label>
                <input type="text" id="isbn" name="isbn" class="w-full px-4 py-2 input_text" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block content_text font-bold mb-2">Autor:</label>
                <input type="text" id="autor" name="autor" class="w-full px-4 py-2 input_text" required>
            </div>
            <div class="mb-4">
                <label for="editorial" class="block content_text font-bold mb-2">Editorial:</label>
                <input type="text" id="editorial" name="editorial" class="w-full px-4 py-2 input_text" required>
            </div>
            <div class="mb-4">
                <label for="categoria" class="block content_text font-bold mb-2">Categoría:</label>
                <select name="categoria" class="w-full px-4 py-2 input_text grey_card">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="purple_button">Guardar</button>
                <a href="{{ route('libros.index') }}" class="action_button">Cancelar</a>
            </div>
        </form>
    </div>

@endsection