<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Sistema de Gestión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
        }
        @media (min-width: 768px) {
            .sidebar-mobile {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Contenedor principal -->
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-indigo-800 text-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <!-- Logo y título -->
                <div class="flex items-center space-x-3">
                    <div class="md:hidden">
                        <button id="menu-toggle" class="text-white focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-book text-2xl"></i>
                        <h1 class="text-xl md:text-2xl font-bold">Biblioteca Central</h1>
                    </div>
                </div>
                
                <!-- Menú principal (oculto en móviles) -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="inicio">Inicio</a></li>
                        <li><a href="#" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="usuarios">Usuarios</a></li>
                        <li><a href="#" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="libros">Libros</a></li>
                        <li><a href="{{ route('categorias.index') }}" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="categorias">Categorias</a></li>
                        <li><a href="#" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="prestamos">Préstamos</a></li>
                        <li><a href="{{ route('logout') }}" class="hover:text-indigo-200 transition duration-200 font-medium" data-section="salir">Salir</a></li>
                    </ul>
                </nav>
                
                <!-- Perfil de usuario -->
                <div class="flex items-center space-x-3">
                    <div class="hidden md:flex flex-col text-right">
                        <span class="font-medium">Admin Bibliotecario</span>
                        <span class="text-sm text-indigo-200">Administrador</span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Contenido principal con sidebar -->
        <div class="flex flex-1">
            <!-- Sidebar para desktop (oculto en móviles) -->
            <aside id="sidebar" class="sidebar-transition bg-white shadow-lg w-64 flex-shrink-0 hidden md:block">
                <div class="p-5 border-b">
                    <h2 class="text-lg font-semibold text-gray-700">Menú de Administración</h2>
                </div>
                <nav class="p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('libros.create') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-indigo-700 hover:text-indigo-800 transition duration-200" data-section="libros">
                                <i class="fas fa-book w-5"></i>
                                <span class="font-medium">Libros</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categorias.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-indigo-700 hover:text-indigo-800 transition duration-200" data-section="categorias">
                                <i class="fas fa-book w-5"></i>
                                <span class="font-medium">Categorias</span>
                            </a>
                        </li>
                
                            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-800 transition duration-200" data-section="prestamos">
                                <i class="fas fa-exchange-alt w-5"></i>
                                <span class="font-medium">Préstamos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-800 transition duration-200" data-section="salir">
                                <i class="fas fa-sign-out-alt w-5"></i>
                                <span class="font-medium">Salir</span>
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Información de biblioteca -->
                    <div class="mt-10 p-4 bg-indigo-50 rounded-lg">
                        <h3 class="font-medium text-indigo-800 mb-2">Resumen Biblioteca</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Libros totales:</span>
                                <span class="font-medium">1,245</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Préstamos activos:</span>
                                <span class="font-medium">87</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Usuarios registrados:</span>
                                <span class="font-medium">342</span>
                            </div>
                        </div>
                    </div>
                </nav>
            </aside>
            
            <!-- Overlay para móviles (oculto por defecto) -->
            <div id="overlay" class="fixed inset-0 overlay z-20 md:hidden" style="display: none;"></div>
            
            <!-- Sidebar móvil (oculto por defecto) -->
            <aside id="mobile-sidebar" class="sidebar-transition sidebar-mobile fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-30 md:hidden">
                <div class="p-5 border-b flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-700">Menú Administración</h2>
                    <button id="close-menu" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <nav class="p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-indigo-700 hover:text-indigo-800 transition duration-200" data-section="libros">
                                <i class="fas fa-book w-5"></i>
                                <span class="font-medium">Libros</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-800 transition duration-200" data-section="prestamos">
                                <i class="fas fa-exchange-alt w-5"></i>
                                <span class="font-medium">Préstamos</span>
                            </a>
                        </li>
                                                <li>
                            <a href="{{ route('categorias.index') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-800 transition duration-200" data-section="prestamos">
                                <i class="fas fa-exchange-alt w-5"></i>
                                <span class="font-medium">Categorias</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-indigo-50 text-gray-700 hover:text-indigo-800 transition duration-200" data-section="salir">
                                <i class="fas fa-sign-out-alt w-5"></i>
                                <span class="font-medium">Salir</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Contenido principal -->
            <main class="flex-1 overflow-auto">
                <div class="p-6">
                    @yield('content')
                </div>
            </main>
            
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-4 border-t border-gray-700">
            <div class="px-6">
                @include('partials.admin.footer')
            </div>
        </footer>
    </div>
</body>
</html>
                    
        