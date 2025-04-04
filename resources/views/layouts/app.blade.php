<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Roue de la Fortune') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    
    <style>
        :root {
            /* Nouvelle palette de couleurs flat */
            --honolulu-blue: #0079B2ff;
            --apple-green: #86B942ff;
            --school-bus-yellow: #F7DB15ff;
            --persian-red: #D03A2Cff;
            --sea-green: #049055ff;
            --light-gray: #f5f5f5;
            --dark-gray: #333333;
            --primary-color: var(--school-bus-yellow);
            --secondary-color: var(--persian-red);
        }
        
        body {
            font-family: 'EB Garamond', serif;
            position: relative;
            min-height: 100vh;
        }
        
        .min-h-screen {
            background-image: url('/assets/images/web.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: var(--dark-gray);
            font-family: 'EB Garamond', serif;
            letter-spacing: 0.02em;
            line-height: 1.8;
            position: relative;
            min-height: 100vh;
        }
        
        /* Ajout d'un pseudo-élément pour le fond flou */
        .min-h-screen::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/images/web.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(20px);
            opacity: 0.8;
            z-index: -1;
            transform: scale(3); /* Légèrement agrandi pour éviter les bords transparents dus au flou */
        }
        
        @media (max-width: 768px) {
            .min-h-screen {
                background-size: auto 100%;
                background-position: center;
            }
            
            .min-h-screen::before {
                background-size: auto 100%;
            }
        }
        
        /* Suppression de l'effet matelassé en 3D */
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'EB Garamond', serif;
            font-weight: 600;
            letter-spacing: 0.04em;
            color: var(--dark-gray);
        }
        
        h1 {
            font-size: 2.5rem;
            position: relative;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--persian-red);
        }
        
        h2 {
            font-size: 2rem;
            color: var(--persian-red);
        }
        
        /* Style des boutons flat */
        .btn-primary {
            background-color: var(--school-bus-yellow) !important;
            border: none;
            font-family: 'EB Garamond', serif;
            font-size: 1.1rem;
            letter-spacing: 0.05em;
            padding: 0.5rem 1.2rem;
            position: relative;
            transition: all 0.3s ease;
            border-radius: 0.25rem;
            text-transform: uppercase;
            font-weight: 600;
            color: var(--dark-gray);
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: #e6cc00 !important;
            opacity: 0.9;
        }
                
        .btn-primary:active {
            background-color: #d4bd00 !important;
        }
        
        .btn-secondary {
            background-color: var(--persian-red);
            border: none;
            color: white;
        }
        
        .btn-secondary:hover, .btn-secondary:focus {
            background-color: #b73224;
            color: white;
        }
        
        /* Style navbar flat */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--persian-red);
            padding: 0.6rem 0;
            position: relative;
        }
        
        .navbar-brand img {
            height: 50px;
            width: auto;
        }
        
        .nav-link {
            color: var(--dark-gray);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--persian-red);
        }
        
        /* Style des cartes flat */
        .card {
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.25rem;
            overflow: hidden;
            position: relative;
            padding: 0;
            margin-bottom: 1.5rem;
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--persian-red);
            z-index: 1;
        }
        
        /* Suppression des card-header en les rendant invisibles */
        .card-header {
            display: none;
        }
        
        /* Card header modifié */
        .card-header.bg-primary {
            display: none;
        }
        
        .card-body {
            padding: 1.25rem;
        }
        
        .card-footer {
            padding: 1rem 1.25rem;
            background-color: white;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        <header class="py-2">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('home') }}" class="navbar-brand">
                        <img src="/assets/images/logo.jpg" alt="Roue de la Fortune Logo">
                    </a>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>

    <!-- jQuery + Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @livewireScripts
    @stack('scripts')
</body>
</html>
