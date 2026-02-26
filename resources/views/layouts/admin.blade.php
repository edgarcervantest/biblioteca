<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Biblioteca - Sistema de Gestión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<body class="background">
    <!-- Contenedor principal -->
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="header">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <!-- Logo y título -->
                <div class="flex items-center space-x-3">
                    <div class="md:hidden">
                        <button id="menu-toggle" class="text-white focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center space-x-2">

                        <h1 class="text-xl md:text-2xl font-bold">Bibli</h1>
                        <i class="fas fa-paperclip text-2xl"></i>
                    </div>
                </div>

                <!-- Menú principal (oculto en móviles) -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-6">
                        <li><a href="{{ route('home') }}"
                                class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="inicio">Inicio</a></li>
                        <li><a href="#" class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="usuarios">Usuarios</a></li>
                        <li><a href="{{ route('libros.index') }}"
                                class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="libros">Libros</a></li>
                        <li><a href="{{ route('categorias.index') }}"
                                class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="categorias">Categorias</a></li>
                        <li><a href="#" class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="prestamos">Préstamos</a></li>
                        <li><a href="{{ route('logout') }}"
                                class="hover:text-indigo-200 transition duration-300 font-medium"
                                data-section="salir">Salir</a></li>
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
            <aside id="sidebar" class="sidebar sidebar-transitio w-64 shrink-0 hidden md:block">
                <div class="p-5 border-b">
                    <h2 class="title_text">Menú de Administración</h2>
                </div>
                <nav class="p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('home') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="libros">
                                <i class="fas fa-home w-5"></i>
                                <span class="font-medium">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('libros.index') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="libros">
                                <i class="fas fa-book w-5"></i>
                                <span class="font-medium">Libros</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categorias.index') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg"
                                data-section="categorias">
                                <i class="fas fa-bookmark w-5"></i>
                                <span class="font-medium">Categorias</span>
                            </a>
                        </li>

                        <a href="#" class="sidebar_text flex items-center space-x-3 p-3 rounded-lg"
                            data-section="prestamos">
                            <i class="fas fa-exchange-alt w-5"></i>
                            <span class="font-medium">Préstamos</span>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="salir">
                                <i class="fas fa-sign-out-alt w-5"></i>
                                <span class="font-medium">Salir</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Información de biblioteca -->
                    <div class="grey_card container mx-auto px-4 py-8">
                        <h3 class="content_text mb-2 font-bold">Resumen de bibli</h3>
                        <div class="space-y-1 text-sm">
                            <div class="flex justify-between">
                                <span class="content_text font-bold">Libros totales:</span>
                                <span class="content_text">1,245</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="content_text font-bold">Préstamos activos:</span>
                                <span class="content_text">87</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="content_text font-bold">Usuarios:</span>
                                <span class="content_text">342</span>
                            </div>
                        </div>
                    </div>
            
                </nav>
            </aside>

            <!-- Overlay para móviles (oculto por defecto) -->
            <div id="overlay" class="fixed inset-0 overlay z-20 md:hidden" style="display: none;"></div>

            <!-- Sidebar móvil (oculto por defecto) -->
            <aside id="mobile-sidebar"
                class="sidebar sidebar-transition sidebar-mobile fixed inset-y-0 left-0 w-64  shadow-lg z-30 md:hidden hidden">
                <div class="p-5 border-b flex justify-between items-center">
                    <h2 class="title_text">Menú de administración</h2>
                    <button id="close-menu" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>

                </div>
                <nav class="p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('home') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="inicio">
                                <i class="fas fa-home-alt w-5"></i>
                                <span class="font-medium">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('libros.index') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="libros">
                                <i class="fas fa-book w-5"></i>
                                <span class="font-medium">Libros</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categorias.index') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg"
                                data-section="prestamos">
                                <i class="fas fa-bookmark w-5"></i>
                                <span class="font-medium">Categorias</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar_text flex items-center space-x-3 p-3 rounded-lg"
                                data-section="prestamos">
                                <i class="fas fa-exchange-alt w-5"></i>
                                <span class="font-medium">Préstamos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="sidebar_text flex items-center space-x-3 p-3 rounded-lg" data-section="salir">
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
        <footer class="footer">
            <div class="px-6">
                @include('partials.admin.footer')
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openBtn = document.getElementById('menu-toggle'); // si tienes un botón para abrir
            const closeBtn = document.getElementById('close-menu');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const overlay = document.getElementById('overlay');

            function showSidebar() {
                mobileSidebar.classList.remove('translate-x-[-100%]', 'hidden');
                mobileSidebar.classList.add('translate-x-0');
                overlay.style.display = 'block';
            }

            function hideSidebar() {
                mobileSidebar.classList.remove('translate-x-0');
                mobileSidebar.classList.add('translate-x-[-100%]');
                overlay.style.display = 'none';
            }

            if (openBtn) {
                openBtn.addEventListener('click', showSidebar);
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', hideSidebar);
            }

            if (overlay) {
                overlay.addEventListener('click', hideSidebar);
            }
        });
    </script>
</body>
</html>