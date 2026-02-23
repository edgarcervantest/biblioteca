@extends('layouts.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Categorias</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 250 text-green-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Crear Categoria</a><br>
        <br><br>
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b-2">ID</th>
                    <th class="px-4 py-2 border-b-2">Nombre</th>
                    <th class="px-4 py-2 border-b-2">Acciones</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="px-4 py-2 border-b-2">{{$categoria->id}}</td>
                        <td class="px-4 py-2 border-b-2">{{$categoria->nombre}}</td>
                        <td class="px-4 py-2 border-b">
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Editar</a>
                            <form action="#" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
</div>
@endsection