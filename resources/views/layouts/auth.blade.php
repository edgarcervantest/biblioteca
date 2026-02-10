<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Login y Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos personalizados para los formularios */
        .form-container {
            max-width: 28rem;
            margin: 0 auto;
        }
        
        .form-header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        }
        
        .form-card {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .form-card:hover {
            transform: translateY(-5px);
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }
        
        .form-divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6b7280;
            margin: 1.5rem 0;
        }
        
        .form-divider::before,
        .form-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .form-divider::before {
            margin-right: 1rem;
        }
        
        .form-divider::after {
            margin-left: 1rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 640px) {
            .form-container {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body class="font-sans bg-gradient-to-br from-blue-50 to-gray-100 min-h-screen flex flex-col">
    <!-- Header de la página -->
    <header class="form-header text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-book-open text-3xl"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Biblioteca Central</h1>
                        <p class="text-blue-100">Acceso a miembros</p>
                    </div>
                </div>
                <a href="#" class="text-white hover:text-blue-200 transition duration-300">
                    <i class="fas fa-home text-xl"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="flex-grow py-8 md:py-12">
        <div class="container mx-auto px-4">
            
            <!-- Formulario de Login -->
            <section class="mb-16">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Iniciar Sesión</h2>
                    <p class="text-gray-600 mt-2">Accede a tu cuenta de la biblioteca</p>
                </div>
                
                <div class="form-container">
                    <div class="form-card bg-white rounded-xl p-6 md:p-8">
                        <form id="loginForm">
                            <!-- Campo Email -->
                            <div class="mb-6">
                                <label for="loginEmail" class="block text-gray-700 font-medium mb-2">
                                    Correo Electrónico
                                </label>
                                <div class="relative">
                                    <div class="input-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input 
                                        type="email" 
                                        id="loginEmail" 
                                        name="email"
                                        required
                                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                        placeholder="tucorreo@ejemplo.com"
                                    >
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Ingresa el correo electrónico asociado a tu cuenta.</p>
                            </div>
                            
                            <!-- Campo Contraseña -->
                            <div class="mb-6">
                                <div class="flex justify-between items-center mb-2">
                                    <label for="loginPassword" class="block text-gray-700 font-medium">
                                        Contraseña
                                    </label>
                                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 hover:underline transition duration-300">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="input-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="loginPassword" 
                                        name="password"
                                        required
                                        class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                        placeholder="Ingresa tu contraseña"
                                    >
                                    <button 
                                        type="button" 
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                                        id="toggleLoginPassword"
                                        aria-label="Mostrar/Ocultar contraseña"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">La contraseña debe tener al menos 8 caracteres.</p>
                            </div>
                            
                            <!-- Checkbox Recordar -->
                            <div class="mb-6">
                                <div class="flex items-center">
                                    <input 
                                        type="checkbox" 
                                        id="rememberMe" 
                                        name="remember"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                    >
                                    <label for="rememberMe" class="ml-2 text-gray-700">
                                        Recordar mi sesión en este dispositivo
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Botón de Enviar -->
                            <button 
                                type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-3 px-4 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                            >
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Iniciar Sesión
                            </button>
                            
                            <!-- Divider -->
                            <div class="form-divider">
                                <span class="text-gray-500 text-sm">O continúa con</span>
                            </div>
                            
                            <!-- Botones de login social -->
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <button 
                                    type="button"
                                    class="flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                >
                                    <i class="fab fa-google text-red-500 mr-2"></i>
                                    <span>Google</span>
                                </button>
                                <button 
                                    type="button"
                                    class="flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                >
                                    <i class="fab fa-facebook text-blue-600 mr-2"></i>
                                    <span>Facebook</span>
                                </button>
                            </div>
                            
                            <!-- Enlace a registro -->
                            <div class="text-center">
                                <p class="text-gray-600">
                                    ¿No tienes una cuenta? 
                                    <a href="#registro" class="text-blue-600 font-medium hover:text-blue-800 hover:underline transition duration-300">
                                        Regístrate aquí
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Información adicional -->
                    <div class="mt-6 text-center text-gray-600">
                        <p class="text-sm">
                            <i class="fas fa-info-circle mr-1"></i>
                            Si tienes problemas para acceder, contacta al 
                            <a href="#" class="text-blue-600 hover:underline">soporte técnico</a>.
                        </p>
                    </div>
                </div>
            </section>
            
            <!-- Formulario de Registro -->
            <section id="registro" class="mb-16">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Crear una Cuenta</h2>
                    <p class="text-gray-600 mt-2">Regístrate para acceder a todos los servicios de la biblioteca</p>
                </div>
                
                <div class="form-container">
                    <div class="form-card bg-white rounded-xl p-6 md:p-8">
                        <form id="registerForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- Campo Nombre -->
                                <div>
                                    <label for="registerFirstName" class="block text-gray-700 font-medium mb-2">
                                        Nombre *
                                    </label>
                                    <div class="relative">
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            id="registerFirstName" 
                                            name="firstName"
                                            required
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                            placeholder="Tu nombre"
                                        >
                                    </div>
                                </div>
                                
                                <!-- Campo Apellido -->
                                <div>
                                    <label for="registerLastName" class="block text-gray-700 font-medium mb-2">
                                        Apellido *
                                    </label>
                                    <div class="relative">
                                        <div class="input-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            id="registerLastName" 
                                            name="lastName"
                                            required
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                            placeholder="Tu apellido"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Campo Email -->
                            <div class="mb-6">
                                <label for="registerEmail" class="block text-gray-700 font-medium mb-2">
                                    Correo Electrónico *
                                </label>
                                <div class="relative">
                                    <div class="input-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input 
                                        type="email" 
                                        id="registerEmail" 
                                        name="email"
                                        required
                                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                        placeholder="tucorreo@ejemplo.com"
                                    >
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Usaremos este correo para contactarte y para iniciar sesión.</p>
                            </div>
                            
                            <!-- Campo Contraseña -->
                            <div class="mb-6">
                                <label for="registerPassword" class="block text-gray-700 font-medium mb-2">
                                    Contraseña *
                                </label>
                                <div class="relative">
                                    <div class="input-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="registerPassword" 
                                        name="password"
                                        required
                                        class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                        placeholder="Crea una contraseña segura"
                                    >
                                    <button 
                                        type="button" 
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                                        id="toggleRegisterPassword"
                                        aria-label="Mostrar/Ocultar contraseña"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-600 mb-1">La contraseña debe incluir:</p>
                                    <ul class="text-xs text-gray-500 grid grid-cols-1 md:grid-cols-2 gap-1">
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                            Al menos 8 caracteres
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                            Una letra mayúscula
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                            Una letra minúscula
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check-circle text-green-500 mr-1 text-xs"></i>
                                            Un número
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Campo Repetir Contraseña -->
                            <div class="mb-6">
                                <label for="registerConfirmPassword" class="block text-gray-700 font-medium mb-2">
                                    Confirmar Contraseña *
                                </label>
                                <div class="relative">
                                    <div class="input-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="registerConfirmPassword" 
                                        name="confirmPassword"
                                        required
                                        class="w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                                        placeholder="Repite tu contraseña"
                                    >
                                    <button 
                                        type="button" 
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                                        id="toggleRegisterConfirmPassword"
                                        aria-label="Mostrar/Ocultar contraseña"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">Debe coincidir con la contraseña ingresada anteriormente.</p>
                            </div>
                            
                            <!-- Términos y condiciones -->
                            <div class="mb-8">
                                <div class="flex items-start">
                                    <input 
                                        type="checkbox" 
                                        id="acceptTerms" 
                                        name="acceptTerms"
                                        required
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1"
                                    >
                                    <label for="acceptTerms" class="ml-2 text-gray-700">
                                        Acepto los 
                                        <a href="#" class="text-blue-600 hover:underline">términos y condiciones</a> 
                                        y la 
                                        <a href="#" class="text-blue-600 hover:underline">política de privacidad</a> 
                                        de la Biblioteca Central.
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <input 
                                            type="checkbox" 
                                            id="newsletter" 
                                            name="newsletter"
                                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1"
                                        >
                                        <label for="newsletter" class="ml-2 text-gray-700">
                                            Me gustaría recibir información sobre nuevos libros, eventos y promociones de la biblioteca.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Botón de Enviar -->
                            <button 
                                type="submit"
                                class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold py-3 px-4 rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                            >
                                <i class="fas fa-user-plus mr-2"></i>
                                Crear Cuenta
                            </button>
                            
                            <!-- Enlace a login -->
                            <div class="text-center mt-6">
                                <p class="text-gray-600">
                                    ¿Ya tienes una cuenta? 
                                    <a href="#loginForm" class="text-blue-600 font-medium hover:text-blue-800 hover:underline transition duration-300">
                                        Inicia sesión aquí
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Información adicional -->
                    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                            <div>
                                <h3 class="font-medium text-blue-800 mb-1">Beneficios de ser miembro</h3>
                                <ul class="text-sm text-blue-700 space-y-1">
                                    <li>• Acceso a préstamo de libros físicos y digitales</li>
                                    <li>• Reserva de salas de estudio y reuniones</li>
                                    <li>• Participación en clubes de lectura y eventos</li>
                                    <li>• Acceso a bases de datos académicas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-book-open text-2xl text-blue-300"></i>
                        <span class="text-xl font-bold">Biblioteca<span class="text-blue-300">Central</span></span>
                    </div>
                    <p class="text-gray-400 text-sm mt-1">Conectando personas con el conocimiento desde 1995.</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-6 pt-6 text-center text-gray-400 text-sm">
                <p>&copy; 2023 Biblioteca Central. Todos los derechos reservados.</p>
                <p class="mt-1">Los formularios son responsivos y compatibles con todos los dispositivos.</p>
            </div>
        </div>
    </footer> -->

    <!-- JavaScript solo para funcionalidades básicas de UI -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para alternar visibilidad de contraseña
            function setupPasswordToggle(toggleId, passwordId) {
                const toggleButton = document.getElementById(toggleId);
                const passwordInput = document.getElementById(passwordId);
                
                if (toggleButton && passwordInput) {
                    toggleButton.addEventListener('click', function() {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);
                        
                        // Cambiar icono del botón
                        const icon = this.querySelector('i');
                        if (type === 'password') {
                            icon.classList.remove('fa-eye-slash');
                            icon.classList.add('fa-eye');
                        } else {
                            icon.classList.remove('fa-eye');
                            icon.classList.add('fa-eye-slash');
                        }
                    });
                }
            }
            
            // Configurar toggles de contraseña para login
            setupPasswordToggle('toggleLoginPassword', 'loginPassword');
            
            // Configurar toggles de contraseña para registro
            setupPasswordToggle('toggleRegisterPassword', 'registerPassword');
            setupPasswordToggle('toggleRegisterConfirmPassword', 'registerConfirmPassword');
            
            // Desplazamiento suave para enlaces internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    
                    if (href !== '#' && href !== '#loginForm' && href !== '#registro') {
                        e.preventDefault();
                        
                        const targetElement = document.querySelector(href);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
            
            // Prevenir envío de formularios (solo para demostración)
            document.getElementById('loginForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Formulario de login enviado (esto es solo una demostración)');
                // En una aplicación real, aquí enviarías los datos al servidor
            });
            
            document.getElementById('registerForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Formulario de registro enviado (esto es solo una demostración)');
                // En una aplicación real, aquí enviarías los datos al servidor
            });
        });
    </script>
</body>
</html>