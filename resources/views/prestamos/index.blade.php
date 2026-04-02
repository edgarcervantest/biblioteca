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
<div class="grey_card shadow-md rounded-lg p-4 sm:p-6 overflow-x-auto">
    <div class="min-w-160 md:min-w-0">
        <table class="w-full table-auto">
            <thead>
                <tr class="border-b-2">
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">ID</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Libro</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Usuario</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Fecha préstamo</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Estado</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Fecha entrega</th>
                    <th class="content_text px-3 sm:px-4 py-2 sm:py-3 text-center uppercase font-bold whitespace-nowrap">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $prestamo)
                    <tr class="border-b transition-colors">
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $prestamo->id }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 wrap-break-word min-w-30">{{ $prestamo->libro->nombre }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $prestamo->usuario->name }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $prestamo->created_at->format('d/m/Y') }}</td>
                        @if ($prestamo->estado == 'pendiente')
                            <td class="px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800 inline-block">Pendiente</span>
                            </td>
                        @else
                            <td class="px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 inline-block">Entregado</span>
                            </td>
                        @endif
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '' }}</td>
                        <td class="content_text px-3 sm:px-4 py-2 sm:py-3 whitespace-nowrap">
                            @if($prestamo->estado == 'pendiente')
                                <a href="{{ route('prestamos.entregar_libro', $prestamo->id) }}" class="purple_button inline-block text-sm">Entregar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="content-text px-6 py-4 flex items-center justify-between">
            {{ $prestamos->links()}}
        </div>

    </div>
@endsection