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

        <a href="{{ route('prestamos.create') }}" class="purple_button">Agregar préstamo</a><br>
        <br><br>
        <div class="grey_card">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">ID</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Libro</th>
                        <th class="content_text px-4 py-2 border-b-2 font-bold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    
    </div>
@endsection