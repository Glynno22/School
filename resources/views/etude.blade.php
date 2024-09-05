<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Études - Orientation</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.tailwindcss.com"></script>--}}
    <style>
        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideIn 1s ease-out;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <header class="bg-blue-600 text-white">
        <div class=" mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">LOGO/NOM</div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="hover:underline">Accueil</a>
                <a href="#" class="hover:underline">Étude</a>
                <a href="#" class="hover:underline">Services</a>
                <a href="#" class="hover:underline">Bourse</a>
                <a href="#" class="hover:underline">Carrière</a>
                <a href="#" class="hover:underline">Contact</a>
            </nav>
            <!-- Hamburger Menu -->
            <button id="hamburger" class="md:hidden flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Accueil</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Étude</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Services</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Bourse</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Carrière</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Contact</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="slide-in mx-auto px-4 py-12 text-center bg-white">
        <h1 class="text-4xl font-bold mb-4">ETUDES</h1>
        <p class="text-lg">Accueil / Etude</p>
        <p class="mt-6 text-xl">Pour préparer votre réussite, nous vous proposons des solutions d'immigration fiable.</p>
    </section>

    <!-- Countries Section -->
    <section class="slide-in container mx-auto px-4 py-12 grid grid-cols-2 md:grid-cols-3 gap-8 text-center">
        <div class="bg-white p-6 shadow-lg rounded-lg">ALLEMAGNE</div>
        <div class="bg-white p-6 shadow-lg rounded-lg">FRANCE</div>
        <div class="bg-white p-6 shadow-lg rounded-lg">BELGIQUE</div>
        <div class="bg-white p-6 shadow-lg rounded-lg">CANADA</div>
        <div class="bg-white p-6 shadow-lg rounded-lg">CONGO</div>
        <div class="bg-white p-6 shadow-lg rounded-lg">AUTRES</div>
    </section>

    <!-- News Section -->
    <section class="slide-in  mx-auto px-4 py-12 text-center bg-white">
        <h2 class="text-3xl font-bold mb-4">ACTUALITÉS GLOBAL (ETUDE)</h2>
        <div class="bg-gray-200 p-6 shadow-lg rounded-lg">
            <p>Saint Louis University demande des admissions pour 2025, débutant le 06/09/2024</p>
        </div>
    </section>

    
</body>
</html>
                
