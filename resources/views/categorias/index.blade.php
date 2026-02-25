@extends('layouts.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}"
                            class="breadcrumb_text">
                            <i class="fas fa-home mr-2"></i>
                            Inicio
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-1"></i>
                            <span class="breadcrumb_text">Categorías</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Categorías</h2>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 250 text-green-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}"
            class="purple_button">Agregar categoría</a><br>
        <br><br>
        <div class="grey_card">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">ID</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Nombre</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td class="content_text px-4 py-2 border-b-2">{{$categoria->id}}</td>
                            <td class="content_text px-4 py-2 border-b-2">{{$categoria->nombre}}</td>
                            <td class="content_text px-4 py-2 border-b-2">
                                <a href="{{ route('categorias.edit', $categoria->id) }}"
                                    class="purple_button">Editar</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="action_button">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection