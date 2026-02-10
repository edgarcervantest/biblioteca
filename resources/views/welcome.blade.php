<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Comunitaria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Merriweather', serif;
        }
        .book-card {
            transition: transform 0.3s ease;
        }
        .book-card:hover {
            transform: translateY(-5px);
        }
        .menu-open {
            display: flex !important;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header con menú -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <i class="fas fa-book text-2xl text-blue-700 mr-2"></i>
                <h1 class="text-2xl font-bold text-blue-900">Biblioteca<span class="text-blue-600">Comunitaria</span></h1>
            </div>

            <!-- Menú de navegación desktop -->
            <nav class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="#inicio" class="text-blue-900 font-semibold hover:text-blue-600 transition-colors duration-300">Inicio</a></li>
                    <li><a href="#catalogo" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Catálogo</a></li>
                    <li><a href="#eventos" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Eventos</a></li>
                    <li><a href="#servicios" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">Servicios</a></li>
                    <li><a href="#login" id="login-btn" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition-colors duration-300"><i class="fas fa-sign-in-alt mr-2"></i>Login</a></li>
                </ul>
            </nav>

            <!-- Botón menú hamburguesa -->
            <button id="menu-toggle" class="md:hidden text-blue-900 text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menú móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg absolute w-full z-40 flex-col py-4">
            <ul class="flex flex-col space-y-4 px-4">
                <li><a href="#inicio" class="text-blue-900 font-semibold block py-2 hover:text-blue-600">Inicio</a></li>
                <li><a href="#catalogo" class="text-gray-700 block py-2 hover:text-blue-600">Catálogo</a></li>
                <li><a href="#eventos" class="text-gray-700 block py-2 hover:text-blue-600">Eventos</a></li>
                <li><a href="#servicios" class="text-gray-700 block py-2 hover:text-blue-600">Servicios</a></li>
                <li><a href="#login" id="mobile-login-btn" class="bg-blue-700 text-white px-4 py-2 rounded-md inline-block hover:bg-blue-800 mt-2"><i class="fas fa-sign-in-alt mr-2"></i>Login</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Explora el mundo a través de los libros</h2>
                <p class="text-xl mb-8 text-blue-100">Descubre nuestra amplia colección de libros, revistas y recursos digitales. Un espacio para todos los amantes de la lectura.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#catalogo" class="bg-white text-blue-900 font-bold px-6 py-3 rounded-md hover:bg-gray-100 transition-colors duration-300">Explorar Catálogo</a>
                    <a href="#registro" class="bg-transparent border-2 border-white text-white font-bold px-6 py-3 rounded-md hover:bg-white hover:text-blue-900 transition-colors duration-300">Hazte socio</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Interior de biblioteca con estanterías llenas de libros" 
                     class="rounded-lg shadow-2xl max-w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Sección de catálogo -->
    <section id="catalogo" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-blue-900">Novedades en el catálogo</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Descubre los últimos libros añadidos a nuestra colección. Novedades en ficción, no ficción, literatura infantil y más.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Libro 1 -->
                <div class="book-card bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Libro abierto sobre una mesa" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2 text-blue-900">El jardín de los secretos</h3>
                        <p class="text-gray-600 mb-4">Una historia fascinante sobre misterios familiares y descubrimientos personales en un jardín olvidado.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Ficción</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Reservar <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 2 -->
                <div class="book-card bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Libro con ilustraciones abierto" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2 text-blue-900">Historia del arte moderno</h3>
                        <p class="text-gray-600 mb-4">Un recorrido exhaustivo por los movimientos artísticos que definieron el siglo XX y sus influencias actuales.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Arte</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Reservar <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 3 -->
                <div class="book-card bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1463320726281-696a485928c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Libros apilados sobre una mesa" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2 text-blue-900">El universo en tus manos</h3>
                        <p class="text-gray-600 mb-4">Una introducción accesible a la astronomía y los misterios del cosmos para todos los públicos.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Ciencia</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Reservar <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 4 -->
                <div class="book-card bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Persona leyendo libro en la biblioteca" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2 text-blue-900">Cuentos de la abuela</h3>
                        <p class="text-gray-600 mb-4">Una colección de cuentos tradicionales adaptados para el público infantil con hermosas ilustraciones.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Infantil</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Reservar <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-blue-700 text-white font-bold px-8 py-3 rounded-md hover:bg-blue-800 transition-colors duration-300">Ver catálogo completo</a>
            </div>
        </div>
    </section>

    <!-- Sección de eventos -->
    <section id="eventos" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-blue-900">Próximos eventos</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Participa en nuestras actividades culturales, clubes de lectura y talleres para todas las edades.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Evento 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Club de lectura en la biblioteca" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-100 text-blue-900 font-bold text-center rounded-md py-1 px-3 mr-4">
                                <div class="text-lg">15</div>
                                <div class="text-xs">JUN</div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-blue-900">Club de lectura mensual</h3>
                                <p class="text-gray-600 text-sm">18:00 - 20:00 h</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Discusión sobre "Cien años de soledad" de Gabriel García Márquez. Abierto a todos los públicos.</p>
                        <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Más información <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <!-- Evento 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Taller de escritura creativa" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-100 text-blue-900 font-bold text-center rounded-md py-1 px-3 mr-4">
                                <div class="text-lg">22</div>
                                <div class="text-xs">JUN</div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-blue-900">Taller de escritura creativa</h3>
                                <p class="text-gray-600 text-sm">17:00 - 19:00 h</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Aprende técnicas de narrativa y desarrollo de personajes con la escritora María González.</p>
                        <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Más información <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <!-- Evento 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Hora del cuento para niños" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-blue-100 text-blue-900 font-bold text-center rounded-md py-1 px-3 mr-4">
                                <div class="text-lg">25</div>
                                <div class="text-xs">JUN</div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-blue-900">Hora del cuento para niños</h3>
                                <p class="text-gray-600 text-sm">11:00 - 12:00 h</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Sesión de cuentacuentos para niños de 3 a 8 años. Actividad gratuita con inscripción previa.</p>
                        <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Más información <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de servicios -->
    <section id="servicios" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 text-blue-900">Nuestros servicios</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Ofrecemos una amplia gama de servicios para satisfacer las necesidades de nuestros usuarios.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-book-open text-blue-700 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-blue-900">Préstamo de libros</h3>
                    <p class="text-gray-700">Prestamos libros, revistas, DVDs y otros materiales por un período de 3 semanas renovable.</p>
                </div>
                
                <!-- Servicio 2 -->
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop text-blue-700 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-blue-900">Acceso a recursos digitales</h3>
                    <p class="text-gray-700">Acceso gratuito a bases de datos, e-books, revistas electrónicas y cursos en línea.</p>
                </div>
                
                <!-- Servicio 3 -->
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-blue-700 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-blue-900">Espacios de estudio</h3>
                    <p class="text-gray-700">Salas de estudio individuales y grupales, así como áreas de lectura silenciosa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Columna 1: Información -->
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-book text-2xl text-blue-300 mr-2"></i>
                        <h3 class="text-xl font-bold">Biblioteca<span class="text-blue-300">Comunitaria</span></h3>
                    </div>
                    <p class="text-blue-200 mb-4">Un espacio para el conocimiento, la cultura y el encuentro comunitario.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Columna 2: Horarios -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Horarios</h4>
                    <ul class="space-y-2 text-blue-200">
                        <li class="flex justify-between"><span>Lunes - Viernes</span> <span>9:00 - 20:00</span></li>
                        <li class="flex justify-between"><span>Sábados</span> <span>10:00 - 14:00</span></li>
                        <li class="flex justify-between"><span>Domingos</span> <span>Cerrado</span></li>
                    </ul>
                </div>
                
                <!-- Columna 3: Enlaces rápidos -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Enlaces rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="text-blue-200 hover:text-white">Inicio</a></li>
                        <li><a href="#catalogo" class="text-blue-200 hover:text-white">Catálogo en línea</a></li>
                        <li><a href="#eventos" class="text-blue-200 hover:text-white">Eventos</a></li>
                        <li><a href="#servicios" class="text-blue-200 hover:text-white">Servicios</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white">Hazte socio</a></li>
                    </ul>
                </div>
                
                <!-- Columna 4: Contacto -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Contacto</h4>
                    <ul class="space-y-2 text-blue-200">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>Calle de la Lectura, 123. 28001 Madrid</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span>+34 912 345 678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>info@bibliotecacomunitaria.es</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-blue-300 text-sm">
                <p>&copy; 2023 Biblioteca Comunitaria. Todos los derechos reservados. | <a href="#" class="hover:text-white">Política de privacidad</a> | <a href="#" class="hover:text-white">Términos de uso</a></p>
                <p class="mt-2">Imágenes de <a href="https://unsplash.com" class="hover:text-white" target="_blank">Unsplash</a></p>
            </div>
        </div>
    </footer>

    <!-- Modal de Login -->
    <div id="login-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-2xl max-w-md w-full">
            <div class="flex justify-between items-center p-6 border-b">
                <h3 class="text-2xl font-bold text-blue-900">Iniciar sesión</h3>
                <button id="close-login" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="p-6">
                <form id="login-form">
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 mb-2">Usuario o correo electrónico</label>
                        <input type="text" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 mb-2">Contraseña</label>
                        <input type="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-700 text-white font-bold py-3 rounded-md hover:bg-blue-800 transition-colors duration-300 mb-4">Iniciar sesión</button>
                    <div class="text-center">
                        <a href="#" class="text-blue-700 hover:text-blue-900 text-sm">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
                <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                    <p class="text-gray-600">¿No tienes una cuenta? <a href="#" class="text-blue-700 font-medium hover:text-blue-900">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle del menú hamburguesa
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const loginBtn = document.getElementById('login-btn');
        const mobileLoginBtn = document.getElementById('mobile-login-btn');
        const loginModal = document.getElementById('login-modal');
        const closeLogin = document.getElementById('close-login');
        const loginForm = document.getElementById('login-form');
        
        // Abrir/cerrar menú móvil
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Cambiar ícono del botón
            const icon = menuToggle.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });
        
        // Cerrar menú móvil al hacer clic en un enlace
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });
        
        // Mostrar modal de login
        function showLoginModal() {
            loginModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Evitar scroll en el fondo
        }
        
        // Ocultar modal de login
        function hideLoginModal() {
            loginModal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restaurar scroll
        }
        
        // Event listeners para login
        loginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            showLoginModal();
        });
        
        mobileLoginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            showLoginModal();
            // Cerrar menú móvil si está abierto
            mobileMenu.classList.add('hidden');
            const icon = menuToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        });
        
        // Cerrar modal con botón X
        closeLogin.addEventListener('click', hideLoginModal);
        
        // Cerrar modal haciendo clic fuera del contenido
        loginModal.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                hideLoginModal();
            }
        });
        
        // Cerrar modal con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !loginModal.classList.contains('hidden')) {
                hideLoginModal();
            }
        });
        
        // Manejar envío del formulario de login
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Aquí iría la lógica real de autenticación
            // Por ahora solo simulamos un login exitoso
            alert(`Inicio de sesión simulado para: ${username}`);
            hideLoginModal();
            
            // Limpiar formulario
            loginForm.reset();
        });
        
        // Suavizar scroll para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Solo aplicar scroll suave para enlaces internos (no para login)
                if (href !== '#login') {
                    e.preventDefault();
                    
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>