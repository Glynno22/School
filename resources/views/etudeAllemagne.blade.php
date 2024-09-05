<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Étude en Allemagne</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes scaleIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .fade-in { animation: fadeIn 1s ease-in-out; }
        .slide-in { animation: slideIn 1s ease-in-out; }
        .scale-in { animation: scaleIn 1s ease-in-out; }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <header class="bg-blue-700 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="text-2xl font-bold">LOGO/NOM</div>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-gray-200">Accueil</a>
                <a href="#" class="hover:text-gray-200">Étude</a>
                <a href="#" class="hover:text-gray-200">Services</a>
                <a href="#" class="hover:text-gray-200">Bourse</a>
                <a href="#" class="hover:text-gray-200">Carrière</a>
                <a href="#" class="hover:text-gray-200">Contact</a>
            </nav>
            <div class="md:hidden">
                <button id="hamburger" class="focus:outline-none">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-blue-700 space-y-2 p-4">
            <a href="#" class="block text-white">Accueil</a>
            <a href="#" class="block text-white">Étude</a>
            <a href="#" class="block text-white">Services</a>
            <a href="#" class="block text-white">Bourse</a>
            <a href="#" class="block text-white">Carrière</a>
            <a href="#" class="block text-white">Contact</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center" style="background-image: url('img1.jpg');">
        <div class="bg-blue-800 bg-opacity-70 text-white py-20 px-6 text-center">
            <h1 class="text-4xl font-bold mb-4 slide-in">services offerts</h1>
            <p class="text-xl mb-8 fade-in">Consultation Personnalisée</p>
            <p class="text-lg fade-in">Obtenez des conseils d'experts adaptés à votre situation unique pour faciliter votre processus d'immigration</p>
        </div>
    </section>

    <!-- Universities Section -->
   <!-- Universities Section -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8">NOS UNIVERSITÉS</h2>
        <div class="grid gap-8 grid-cols-1 md:grid-cols-2">
            <!-- University Carousel -->
            <div id="carouselExample" class="relative">
                <div class="overflow-hidden rounded-lg shadow-lg w-full h-64">
                    <div id="carouselImages" class="relative w-full h-full">
                        <img src="{{asset('img1.jpg')}}" alt="University Image 1" class="carousel-image absolute inset-0 w-full h-full object-cover">
                        <img src="{{asset('img1.jpg')}}" alt="University Image 2" class="carousel-image absolute inset-0 w-full h-full object-cover hidden">
                        <img src="{{asset('img2.jepg')}}" alt="University Image 3" class="carousel-image absolute inset-0 w-full h-full object-cover hidden">
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900">❮</button>
                <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-900">❯</button>
            </div>

            <!-- University Description -->
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Technische Universität Berlin</h3>
                <p class="text-gray-600 mb-4">
                    Straße des 17. Juni 135 10623 Berlin<br>
                    La Technische Universität Berlin (TU Berlin) propose des programmes de licence en ingénierie mécanique, informatique, génie électrique et architecture, ainsi que des masters en ingénierie de l'énergie, technologie de l'information et de la communication, génie civil et gestion de l'innovation. Elle offre également des programmes de doctorat axés sur la recherche et l'innovation, avec des collaborations internationales.
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700">Voir plus</a>
            </div>
        </div>
    </section>




    <!-- Procedure Section fade-in-->
    <section class="bg-blue-700 text-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">PROCEDURE</h2>
            <p class="mb-4 ">QUESTION 1: Reponse a la question 1 de manier exita...</p>
            <p class="mb-4 ">QUESTION 2: Reponse a la question 2 de manier exita...</p>
            <p class="mb-4 ">QUESTION 3: Reponse a la question 3 de manier exita...</p>
            <a href="#" class="underline hover:text-gray-300">pour voir plus de procedure complet cliquez ici</a>
        </div>
    </section>
<br>
   <!-- Satisfaction Section -->
    <section class="container mx-auto py-12  text-center bg-blue-500 w-full">
        <h2 class="text-3xl font-bold mb-8">Aimeriez-vous faire des études / Formations en Allemagne ?</h2>
        <div class="space-x-4">
            <button id="yesBtn" class="bg-blue-300 text-white px-6 py-3 rounded-full hover:bg-blue-700 scale-in">OUI</button>
            <button id="noBtn" class="bg-gray-500 text-white px-6 py-3 rounded-full hover:bg-gray-700 scale-in">NON</button>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-1/2 lg:w-1/3">
            <span id="closeModal" class="text-black cursor-pointer float-right font-bold text-lg">&times;</span>
            <div id="modalContent" class="text-center">
                <!-- Content will be injected by JavaScript -->
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="container mx-auto py-12 ">
        <h2 class="text-3xl font-bold text-center mb-8">ÉTUDIANTS SATISFAITS</h2>
        <div class="grid gap-8 grid-cols-1 md:grid-cols-3 mx-12">
            <!-- Testimonial Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center slide-in transition-transform slide-in transform hover:scale-105">
                <img src="{{asset('img1.jpg')}}" alt="Testimonial Image" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-bold">Donald Catherine</h3>
                <p class="text-gray-600">Description du temoignage ici</p>
            </div>
            <!-- Duplicate the above block for other testimonials -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center transition-transform slide-in transform hover:scale-105">
                <img src="{{asset('img1.jpg')}}" alt="Testimonial Image" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-bold">Donald Catherine</h3>
                <p class="text-gray-600">Description du temoignage ici</p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 text-center slide-in transition-transform slide-in transform hover:scale-105">
                <img src="{{asset('img1.jpg')}}" alt="Testimonial Image" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-bold">Donald Catherine</h3>
                <p class="text-gray-600">Description du temoignage ici</p>
            </div>
        </div>
        
    </section>



    <!-- Footer -->
    
    <!-- end Footer -->


    <script>
        // Mobile menu toggle
        document.getElementById('hamburger').onclick = function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        };
    </script>

<script>
    const modal = document.getElementById('modal');
    const modalContent = document.getElementById('modalContent');
    const closeModal = document.getElementById('closeModal');

    document.getElementById('yesBtn').onclick = function() {
        modalContent.innerHTML = `
            <h3 class="text-2xl font-bold mb-4">Contactez un Responsable</h3>
            <p class="mb-6">Pour en savoir plus sur les formations en Allemagne, contactez un de nos responsables qui pourra vous aider à choisir le programme le plus adapté.</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700">Contacter un responsable</button>
        `;
        modal.classList.remove('hidden');
    };

    document.getElementById('noBtn').onclick = function() {
        modalContent.innerHTML = `
            <h3 class="text-2xl font-bold mb-4">Pourquoi pas?</h3>
            <p class="mb-6">Merci de nous indiquer pourquoi vous ne souhaitez pas faire des études en Allemagne.</p>
            <form>
                <textarea class="w-full p-2 border rounded-lg mb-4" rows="4" placeholder="Votre réponse"></textarea>
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-full hover:bg-gray-700">Envoyer</button>
            </form>
        `;
        modal.classList.remove('hidden');
    };

    closeModal.onclick = function() {
        modal.classList.add('hidden');
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    };

</script>

<script>
    const images = document.querySelectorAll('.carousel-image');
    let currentIndex = 0;

    document.getElementById('nextBtn').onclick = function() {
        images[currentIndex].classList.add('hidden');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.remove('hidden');
    };

    document.getElementById('prevBtn').onclick = function() {
        images[currentIndex].classList.add('hidden');
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        images[currentIndex].classList.remove('hidden');
    };
</script>
</body>
</html>
