@extends('layouts.admin')
@section('content')

    <div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full table-auto">
            <h1 class="text-2xl font-bold mb-6">Categorias</h1>
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b-2">ID</th>
                    <th class="px-4 py-2 border-b-2">Nombre</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="px-4 py-2 border-b-2">{{$categoria->id}}</td>
                        <td class="px-4 py-2 border-b-2">{{$categoria->nombre}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
</div>
@endsection