@extends('layouts.admin')
@section('content')

    <!-- Contenido principal -->
    <main class="flex-1 p-4 md:p-6">

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
                        <a href="{{ route('categorias.index') }}" class="breadcrumb_text">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Dashboards
                        </a>
                    </li>
                </ol>
            </nav>
            <h2 class="title_text">Panel de administración</h2>
        </div>

        <!-- Tarjetas de resumen -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="grey_card rounded-lg shadow p-5 border-l-4 border-indigo-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="card_text font-bold">Libros disponibles</p>
                        <p class="text-2xl font-bold card_text">892</p>
                    </div>
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-book text-indigo-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 12% desde el mes pasado
                </div>
            </div>

            <div class="grey_card rounded-lg shadow p-5 border-l-4 border-green-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="card_text font-bold">Préstamos activos</p>
                        <p class="text-2xl font-bold card_text">87</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-exchange-alt text-green-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 5% desde la semana pasada
                </div>
            </div>

            <div class="grey_card rounded-lg shadow p-5 border-l-4 border-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="card_text font-bold">Usuarios registrados</p>
                        <p class="text-2xl font-bold card_text">342</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 8% desde el mes pasado
                </div>
            </div>

            <div class="grey_card rounded-lg shadow p-5 border-l-4 border-yellow-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="card_text font-bold">Devoluciones pendientes</p>
                        <p class="text-2xl font-bold card_text">14</p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-clock text-yellow-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-red-600">
                    <i class="fas fa-arrow-down mr-1"></i> 3% desde la semana pasada
                </div>
            </div>
        </div>

        <!-- Contenido dinámico según sección -->
        <div id="content-section" class="grey_card rounded-lg shadow p-4 md:p-6">
            <div class="mb-6">
                <h3 class="text-xl font-bold card_text">Bienvenido al Sistema de Administración de Biblioteca</h3>
                <p class="card_text mt-2">Desde este panel puedes gestionar todos los aspectos de la biblioteca: libros,
                    usuarios, préstamos y más.</p>
            </div>

            <!-- Información rápida -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border border-gray-200 rounded-lg p-5">
                    <h4 class="font-bold card_text mb-3 flex items-center">
                        <i class="fas fa-book-reader text-indigo-600 mr-2"></i>
                        Acciones Rápidas
                    </h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('libros.create') }}" class="card_text flex items-center"
                                data-section="libros"><i class="fas fa-plus-circle text-sm mr-2"></i> Agregar nuevo
                                libro</a></li>
                        <li><a href="#" class="card_text flex items-center" data-section="usuarios"><i
                                    class="fas fa-user-plus text-sm mr-2"></i> Registrar nuevo
                                usuario</a></li>
                        <li><a href="#" class="card_text flex items-center" data-section="prestamos"><i
                                    class="fas fa-handshake text-sm mr-2"></i> Registrar
                                préstamo</a></li>
                        <li><a href="#" class="card_text flex items-center" data-section="prestamos"><i
                                    class="fas fa-undo-alt text-sm mr-2"></i> Registrar
                                devolución</a></li>
                    </ul>
                </div>

                <div class="border border-gray-200 rounded-lg p-5">
                    <h4 class="font-bold card_text mb-3 flex items-center">
                        <i class="fas fa-chart-line text-green-600 mr-2"></i>
                        Estadísticas Recientes
                    </h4>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm card_text">Libros prestados este mes</span>
                                <span class="text-sm font-medium card_text">124</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm card_text">Nuevos usuarios este mes</span>
                                <span class="text-sm font-medium card_text">28</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm card_text">Libros agregados este mes</span>
                                <span class="text-sm font-medium card_text">42</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Préstamos recientes -->
            <div class="mt-8">
                <h4 class="font-bold card_text mb-4">Lista de libros</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="grey_card">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Nombre</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    ISBN</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Autor</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Editorial</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Categoria</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Estado</th>
                                <th class="px-4 py-3 text-left text-xs font-bold card_text uppercase tracking-wider">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="grey_card card_text divide-y divide-gray-200">

                            @foreach ($libros as $libro)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">{{ $libro->nombre }}</td>
                                    <td class="px-4 py-3">{{ $libro->isbn }}</td>
                                    <td class="px-4 py-3">{{ $libro->autor }}</td>
                                    <td class="px-4 py-3">{{ $libro->editorial }}</td>
                                    <td class="px-4 py-3">{{ $libro->categoria?->nombre}}</td>
                                    <td class="px-4 py-3">{{ $libro->estado }}</td>
                                    <td class="px-4 py-3">
                                        <a href="{{ route('libros.edit', $libro->id) }}" class="purple_button mr-2">Editar</a>
                                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action_button">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="b">
                {{ $libros->links()}}
            </div>
        </div>
    </main>
    </div>
@endsection