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
    @yield('content')
    
    @include('partials.auth.footer')