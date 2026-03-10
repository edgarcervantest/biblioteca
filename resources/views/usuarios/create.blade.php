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
                        <a href="{{ route('usuarios.index') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Usuarios
                        </a>
                    </li>
                    <li aria-current="page">
                        <a href="" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Agregar usuario
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Agregar usuario</h2>
        </div>

        <form action="{{ route('usuarios.store') }}" method="POST" class="grey_card shadow-md rounded lg p-6">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="content_text mb-2">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="input_text w-full px-4 py-2" required>
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label for="email" class="content_text mb-2">Email:</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="input_text w-full px-4 py-2" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label for="password" class="content_text mb-2">Contraseña:</label>
                <input type="text" id="password" name="password" class="input_text w-full px-4 py-2" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label for="password_confirmation" class="content_text mb-2">Confirmar contraseña:</label>
                <input type="text" id="password_confirmation" name="password_confirmation" class="input_text w-full px-4 py-2" required>
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <label for="user_type" class="content_text mb-2">Selecciona un tipo de usuario:</label>
                <select name="user_type" id="user_type"class="input_text grey_card w-full px-4 py-2">
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
                @error('user_type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="purple_button">Guardar</button>
                <a href="{{ route('usuarios.index') }}" class="action_button">Cancelar</a>
            </div>
        </form>

    </div>
@endsection