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
                            <span class="breadcrumb_text">Préstamos</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Préstamos</h2>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 250 text-green-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 250 text-red-700 px-4 py-3 font-bold rounded-md mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('prestamos.create') }}" class="purple_button">Agregar préstamo</a><br>
        <br><br>
        <div class="grey_card shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">ID</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Libro</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Usuario</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Fecha préstamo</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Estado</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Fecha entrega</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestamos as $prestamo)
                        <tr>
                            <td class="content_text px-4 py-2 border-b-2">{{ $prestamo->id }}</td>
                            <td class="content_text px-4 py-2 border-b-2">{{ $prestamo->libro->nombre }}</td>
                            <td class="content_text px-4 py-2 border-b-2">{{ $prestamo->usuario->name }}</td>
                            <td class="content_text px-4 py-2 border-b-2">{{ $prestamo->created_at->format('d/m/Y') }}</td>
                            @if ($prestamo->estado == 'pendiente')
                                     <td class="px-4 py-3"><span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Pendiente</span></td>
                                     @else
                                     <td class="px-4 py-3"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Entregado</span></td>
                                     @endif
                            <td class="content_text px-4 py-2 border-b-2">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega: '' }}</td>
                            <td class="content_text px-4 py-2 border-b-2">
                                @if($prestamo->estado == 'pendiente')
                                <a href="{{ route('prestamos.entregar_libro', $prestamo->id) }}" class="purple_button">Entregar</a>
                                @endif
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection