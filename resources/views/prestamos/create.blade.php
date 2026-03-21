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
                            Préstamos
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Agregar préstamo
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Agregar préstamo</h2>
        </div>

        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="grey_card shadow-md rounded lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="content_text mb-2">ID del usuario:</label>
                <input type="text" id="usuario_id" name="usuario_id" class="input_text w-full px-4 py-2">
            </div>

            <div class="mb-4">
                <label for="nombre" class="content_text mb-2">Nombre del usuario:</label>
                <input type="text" id="usuario_nombre" name="usuario_nombre" class="input_text w-full px-4 py-2">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="purple_button">Buscar usuario</button>
                <a href="{{ route('prestamos.index') }}" class="action_button">Cancelar</a>
            </div>
        </form>

        @isset($usuario)
            <div class="mt-8">
                <h3 class="title_text">Datos del usuario</h3>
                <p class="content_text">ID: {{ $usuario->id }}</p>
                <p class="content_text">Nombre: {{ $usuario->name }}</p>
                <p class="content_text">Correo: {{ $usuario->email }}</p>
            </div>
        @endisset

    </div>
@endsection