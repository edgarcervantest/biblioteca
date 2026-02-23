@extends('layouts.admin')
@section('content')

    <!-- Contenido principal -->
    <main class="flex-1 p-4 md:p-6">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-indigo-600">
                            <i class="fas fa-home mr-2"></i>
                            Inicio
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-1"></i>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Dashboard</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">Panel de Administración</h2>
        </div>

        <!-- Tarjetas de resumen -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow p-5 border-l-4 border-indigo-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Libros Disponibles</p>
                        <p class="text-2xl font-bold text-gray-800">892</p>
                    </div>
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-book text-indigo-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 12% desde el mes pasado
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-5 border-l-4 border-green-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Préstamos Activos</p>
                        <p class="text-2xl font-bold text-gray-800">87</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-exchange-alt text-green-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 5% desde la semana pasada
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-5 border-l-4 border-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Usuarios Registrados</p>
                        <p class="text-2xl font-bold text-gray-800">342</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                </div>
                <div class="mt-3 text-sm text-green-600">
                    <i class="fas fa-arrow-up mr-1"></i> 8% desde el mes pasado
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-5 border-l-4 border-yellow-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Devoluciones Pendientes</p>
                        <p class="text-2xl font-bold text-gray-800">14</p>
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
        <div id="content-section" class="bg-white rounded-lg shadow p-4 md:p-6">
            <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-800">Bienvenido al Sistema de Administración de Biblioteca</h3>
                <p class="text-gray-600 mt-2">Desde este panel puedes gestionar todos los aspectos de la biblioteca: libros,
                    usuarios, préstamos y más.</p>
            </div>

            <!-- Información rápida -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border border-gray-200 rounded-lg p-5">
                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-book-reader text-indigo-600 mr-2"></i>
                        Acciones Rápidas
                    </h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('libros.create') }}"
                                class="text-indigo-600 hover:text-indigo-800 flex items-center" data-section="libros"><i
                                    class="fas fa-plus-circle text-sm mr-2"></i> Agregar nuevo libro</a></li>
                        <li><a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center"
                                data-section="usuarios"><i class="fas fa-user-plus text-sm mr-2"></i> Registrar nuevo
                                usuario</a></li>
                        <li><a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center"
                                data-section="prestamos"><i class="fas fa-handshake text-sm mr-2"></i> Registrar
                                préstamo</a></li>
                        <li><a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center"
                                data-section="prestamos"><i class="fas fa-undo-alt text-sm mr-2"></i> Registrar
                                devolución</a></li>
                    </ul>
                </div>

                <div class="border border-gray-200 rounded-lg p-5">
                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-chart-line text-green-600 mr-2"></i>
                        Estadísticas Recientes
                    </h4>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-600">Libros prestados este mes</span>
                                <span class="text-sm font-medium">124</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-600">Nuevos usuarios este mes</span>
                                <span class="text-sm font-medium">28</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-600">Libros agregados este mes</span>
                                <span class="text-sm font-medium">42</span>
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
                <h4 class="font-bold text-gray-800 mb-4">Lista de libros</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ISBN</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Autor</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Editorial</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoria</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($libros as $libro)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">{{ $libro->nombre }}</td>
                                    <td class="px-4 py-3">{{ $libro->isbn }}</td>
                                    <td class="px-4 py-3">{{ $libro->autor }}</td>
                                    <td class="px-4 py-3">{{ $libro->editorial }}</td>
                                    <td class="px-4 py-3">{{ $libro->categoria?->nombre}}</td>
                                    <td class="px-4 py-3">{{ $libro->estado }}</td>
                                    <td class="px-4 py-3">
                                        <a href="#', $libro->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Editar</a>
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    </div>
@endsection