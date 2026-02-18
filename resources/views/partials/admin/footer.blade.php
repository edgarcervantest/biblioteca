<!-- Footer -->
        <footer class="bg-gray-800 text-white py-6 mt-auto">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-book text-xl"></i>
                            <span class="text-xl font-bold">Biblioteca Central</span>
                        </div>
                        <p class="text-gray-400 mt-2">Sistema de Administración de Biblioteca © 2023</p>
                    </div>
                    
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div class="border-t border-gray-700 mt-6 pt-4 text-center md:text-left">
                    <div class="flex flex-col md:flex-row justify-between">
                        <div>
                            <p class="text-gray-400">Desarrollado con <i class="fas fa-heart text-red-400"></i> para bibliotecas</p>
                        </div>
                        <div class="mt-2 md:mt-0">
                            <a href="#" class="text-gray-300 hover:text-white mr-4">Política de Privacidad</a>
                            <a href="#" class="text-gray-300 hover:text-white">Términos de Servicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Funcionalidad para el menú hamburguesa en móviles
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const closeMenu = document.getElementById('close-menu');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const overlay = document.getElementById('overlay');
            const contentSection = document.getElementById('content-section');
            
            // Abrir menú móvil
            menuToggle.addEventListener('click', function() {
                mobileSidebar.classList.remove('sidebar-mobile');
                overlay.style.display = 'block';
                setTimeout(() => overlay.style.opacity = '1', 10);
            });
            
            // Cerrar menú móvil
            function closeMobileMenu() {
                mobileSidebar.classList.add('sidebar-mobile');
                overlay.style.opacity = '0';
                setTimeout(() => overlay.style.display = 'none', 300);
            }
            
            closeMenu.addEventListener('click', closeMobileMenu);
            overlay.addEventListener('click', closeMobileMenu);
            
            // Cambiar contenido según la sección seleccionada
            document.querySelectorAll('a[data-section]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const section = this.getAttribute('data-section');
                    
                    // Cambiar título y contenido según la sección
                    let title = '';
                    let content = '';
                    
                    switch(section) {
                        case 'inicio':
                            title = 'Panel de Administración';
                            content = `
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Bienvenido al Sistema de Administración de Biblioteca</h3>
                                    <p class="text-gray-600 mt-2">Desde este panel puedes gestionar todos los aspectos de la biblioteca: libros, usuarios, préstamos y más.</p>
                                </div>
                                <p>Selecciona una opción del menú para comenzar a gestionar la biblioteca.</p>
                            `;
                            break;
                        case 'usuarios':
                            title = 'Gestión de Usuarios';
                            content = `
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Usuarios Registrados</h3>
                                    <p class="text-gray-600 mt-2">Aquí puedes gestionar todos los usuarios registrados en la biblioteca.</p>
                                </div>
                                <p>Contenido de gestión de usuarios: lista de usuarios, búsqueda, agregar, editar y eliminar usuarios.</p>
                            `;
                            break;
                        case 'libros':
                            title = 'Gestión de Libros';
                            content = `
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Catálogo de Libros</h3>
                                    <p class="text-gray-600 mt-2">Administra el inventario de libros de la biblioteca.</p>
                                </div>
                                <p>Contenido de gestión de libros: catálogo completo, búsqueda, agregar nuevos libros, editar información y eliminar registros.</p>
                            `;
                            break;
                        case 'prestamos':
                            title = 'Gestión de Préstamos';
                            content = `
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Préstamos y Devoluciones</h3>
                                    <p class="text-gray-600 mt-2">Controla los préstamos activos, historial y devoluciones.</p>
                                </div>
                                <p>Contenido de gestión de préstamos: registrar nuevos préstamos, consultar préstamos activos, historial y devoluciones pendientes.</p>
                            `;
                            break;
                        case 'salir':
                            title = 'Cerrar Sesión';
                            content = `
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">¿Estás seguro de salir?</h3>
                                    <p class="text-gray-600 mt-2">Serás redirigido a la página de inicio de sesión.</p>
                                </div>
                                <p>Si confirmas, se cerrará tu sesión actual en el sistema de administración.</p>
                                <div class="mt-6">
                                    <button class="bg-red-600 text-white px-4 py-2 rounded-lg mr-3">Confirmar salida</button>
                                    <button class="bg-gray-300 text-gray-800 px-4 py-2 rounded-lg">Cancelar</button>
                                </div>
                            `;
                            break;
                    }
                    
                    // Actualizar breadcrumb y contenido
                    document.querySelector('h2.text-2xl').textContent = title;
                    contentSection.innerHTML = content;
                    
                    // Cerrar menú móvil si está abierto
                    if (window.innerWidth < 768) {
                        closeMobileMenu();
                    }
                });
            });
            
            // Manejar el cambio de tamaño de ventana
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    // En pantallas grandes, asegurarse de que el overlay esté oculto
                    overlay.style.display = 'none';
                    mobileSidebar.classList.add('sidebar-mobile');
                }
            });
        });
    </script>
