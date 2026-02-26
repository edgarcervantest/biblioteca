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
                        <a href="{{ route('categorias.index') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Categorías
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Agregar categoría
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Agregar categoría</h2>
        </div>

        <form action="{{ route('categorias.store') }}" method="POST" class="grey_card shadow-md rounded lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="content_text mb-2">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="input_text w-full px-4 py-2" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="purple_button">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="action_button">Cancelar</a>
            </div>
        </form>

    </div>
@endsection