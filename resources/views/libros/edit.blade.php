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
                            Editar libro
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Editar libro</h2>
        </div>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="grey_card shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block content_text font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{$libro->nombre}}"
                    class="w-full px-4 py-2 input_text">
            </div>

            <div class="mb-4">
                <label for="isbn" class="block content_text font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{$libro->isbn}}"
                    class="w-full px-4 py-2 input_text">
            </div>
            <div class="mb-4">
                <label for="autor" class="block content_text font-bold mb-2">Autor:</label>
                <input type="text" id="autor" name="autor" value="{{$libro->autor}}"
                    class="w-full px-4 py-2 border input_text"
                    required>
            </div>
            <div class="mb-4">
                <label for="editorial" class="block content_text font-bold mb-2">Editorial:</label>
                <input type="text" id="editorial" name="editorial" value="{{$libro->editorial}}"
                    class="w-full px-4 py-2 input_text"
                    required>
            </div>
            <div class="mb-4">
                <label for="categoria" class="block content_text font-bold mb-2">Categoria:</label>
                <select name="categoria"
                    class="w-full px-4 py-2 input_text grey_card">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="flex items-center justify-between">
                <button type="submit"
                    class="purple_button">Guardar</button>
                <a href="{{ route('libros.index') }}"
                    class="action_button">Cancelar</a>
            </div>
        </form>
    </div>

@endsection