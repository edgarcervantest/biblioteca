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
                            Eliminar usuario
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Eliminar usuario: {{ $usuario->name }}</h2>
        </div>

        <div>
            <p class="content_text">¿Estas seguro que quieres eliminar el usuario {{ $usuario->name }}?</p>
        </div>
        <br>

        <div class="grey_card">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">ID</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Nombre</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Email</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Tipo de usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="content_text px-4 py-2 border-b-2">{{$usuario->id}}</td>
                        <td class="content_text px-4 py-2 border-b-2">{{$usuario->name}}</td>
                        <td class="content_text px-4 py-2 border-b-2">{{ $usuario->email }}</td>
                        <td class="content_text px-4 py-2 border-b-2">{{ $usuario->user_type }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>

        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="purple_button">Eliminar</button>
            <a href="{{ route('usuarios.index') }}" class="action_button">Cancelar</a>
        </form>


    </div>
@endsection