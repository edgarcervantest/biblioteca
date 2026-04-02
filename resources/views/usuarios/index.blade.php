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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-1"></i>
                            <span class="breadcrumb_text">Usuarios</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Usuarios</h2>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 250 text-green-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('usuarios.create') }}" class="purple_button">Agregar usuario</a><br>
        <br><br>
<div class="grey_card shadow-md rounded-lg p-4 sm:p-6 overflow-x-auto">
    <div class="min-w-[640px] md:min-w-0">
        <table class="w-full table-auto">
            <thead>
                <tr class="border-b-2">
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">ID</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Nombre</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Email</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Tipo de usuario</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Acciones</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="border-b transition-colors">
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $usuario->id }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $usuario->name }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $usuario->email }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $usuario->user_type }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="purple_button inline-block text-sm">Editar</a>
                            <a href="{{ route('usuarios.delete_confirm', $usuario->id) }}" class="inline-block action_button text-sm">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
        <div class="content-text px-6 py-4  flex items-center justify-between">
            {{ $usuarios->links()}}
        </div>
    </div>
@endsection