
@extends('master')

@section('content')
<div class="w-full">
    <div id="carouselExampleCaptions" class="carousel slide">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <!-- Carousel Inner -->
        <div class="carousel-inner h-full">
            <div class="carousel-item active">
                <img src="{{asset('img1.jpg')}}" class="d-block w-full object-cover h-[500px]" alt="First slide" height="">
                <div class="carousel-caption d-flex flex-col justify-center h-full ">
                    <h5 class="self-center">First slide label</h5>
                    <p class="self-center">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{asset('img1.jpg')}}" class="d-block w-full object-cover h-[500px]" alt="First slide" height="">
                <div class="carousel-caption d-flex flex-col justify-center h-full ">
                    <h5 class="self-center">First slide label</h5>
                    <p class="self-center">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{asset('img1.jpg')}}" class="d-block w-full object-cover h-[500px]" alt="First slide" height="">
                <div class="carousel-caption d-flex flex-col justify-center h-full ">
                    <h5 class="self-center">First slide label</h5>
                    <p class="self-center">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


  
    <!-- Hero Section avec Carrousel -->
    <section class="relative bg-white">
        <div class="container mx-auto py-12 flex flex-col lg:flex-row items-center justify-between">
            <div class="w-full lg:w-1/2 p-6 fade-in-left relative">
                <!-- Carrousel -->
                <div class="relative overflow-hidden">
                    <div id="carousel" class="relative w-full h-64">
                        <img src="{{asset('img1.jpg')}}" alt="Image 1" class="w-full h-full object-cover absolute inset-0">
                        <img src="{{asset('img2.jpg')}}" alt="Image 2" class="w-full h-full object-cover absolute inset-0 hidden">
                        <img src="{{asset('img1.jpg')}}" alt="Image 3" class="w-full h-full object-cover absolute inset-0 hidden">
                    </div>
                    <!-- Navigation Carrousel -->
                    <div class="absolute inset-x-0 bottom-0 flex justify-center mb-4">
                        <button class="carousel-dot mx-1 bg-white w-3 h-3 rounded-full"></button>
                        <button class="carousel-dot mx-1 bg-gray-500 w-3 h-3 rounded-full"></button>
                        <button class="carousel-dot mx-1 bg-gray-500 w-3 h-3 rounded-full"></button>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 p-6 fade-in-right">
                <h2 class="text-3xl font-bold text-blue-700">VOTRE VOYAGE VERS DE NOUVELLES OPPORTUNITÉS COMMENCE ICI</h2>
                <p class="mt-4 text-gray-700">
                    Chez [nom de l'entreprise], nous facilitons votre transition de l'Afrique vers l'Europe en vous offrant des solutions d'immigration personnalisées de toutes natures. Notre objectif est de vous accompagner à chaque étape de votre parcours, en vous fournissant les informations et le soutien nécessaires pour réaliser vos rêves et bâtir un avenir meilleur, tout en vous ouvrant les portes de nouvelles opportunités.
                </p>
            </div>
        </div>
    </section>

    

    <!-- Nouvelles Section -->
    <section class="bg-[#77A2C8] py-12 mx-4 space-y-5 ">
        <div class="container mx-auto text-center fade-in-left">
            <h2 class="text-3xl font-bold mb-6 text-blue-700">RESTEZ INFORMÉ EN TEMPS RÉEL AVEC NOTRE FLUX DE NOUVELLES</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="News Image 1" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Université de Paris Sorbonne</h3>
                    <p class="text-gray-700">Lieu de départ pour les étudiants africains...</p>
                    <a href="#" class="text-blue-700 hover:underline">voir plus</a>
                </div>
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="News Image 2" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Université de Paris Sorbonne</h3>
                    <p class="text-gray-700">Lieu de départ pour les étudiants africains...</p>
                    <a href="#" class="text-blue-700 hover:underline">voir plus</a>
                </div>
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="News Image 3" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Université de Paris Sorbonne</h3>
                    <p class="text-gray-700">Lieu de départ pour les étudiants africains...</p>
                    <a href="#" class="text-blue-700 hover:underline">voir plus</a>
                </div>
            </div>
        </div>
   

    <!-- Newsletter Section -->
    <section class="bg-[rgb(119,162,200)] mx-2 text-white py-12 fade-in-right">
        <div class="container mx-auto text-center fade-in-right ">
            <h2 class="text-3xl font-bold mb-4 text-blue-700">Newsletter</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-9 items-center mx-2  ">
                <div class="">
                    <img src="{{asset('img1.jpg')}}" alt="Image 3" class="w-full h-64  object-cover">
                </div>
                <div class="text-left ">
                    <h4 class="text-xl font-bold mb-4 text-white">Abonnez-vous à notre Newsletter!</h4>
                    <p class="text-white">Recevez les dernières nouvelles et opportunités directement dans votre boîte de réception. Inscrivez-vous maintenant pour ne rien manquer</p>
                    <form class="flex justify-start items-center">
                        <input type="email" placeholder="tchofo@gmail.com" class="text-gray-800 p-3 rounded-l w-full max-w-lg ">
                        <button class="bg-yellow-400 text-gray-900 font-bold py-3 px-6 rounded-r hover:bg-yellow-300 transition duration-300">Envoyer</button>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Étudiants Satisfaits -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center fade-in-left">
            <h2 class="text-3xl font-bold mb-6 text-blue-700">Étudiants Satisfaits</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="Étudiant Satisfait 1" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Étudiant 1</h3>
                    <p class="text-gray-700">Chez [nom de l'entreprise], ils m'ont aidé à naviguer dans le processus complexe d'immigration...</p>
                </div>
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="Étudiant Satisfait 2" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Étudiant 2</h3>
                    <p class="text-gray-700">J'ai réussi à poursuivre mes études en Europe grâce à leurs précieux conseils...</p>
                </div>
                <div class="bg-white p-4 rounded shadow-lg">
                    <img src="{{asset('img1.jpg')}}" alt="Étudiant Satisfait 3" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold mt-4">Étudiant 3</h3>
                    <p class="text-gray-700">Ils ont été là à chaque étape, me guidant et me soutenant tout au long de mon voyage...</p>
                </div>
            </div>
        </div>
    </section>

    @endsection

    @section('scripts')
        <script>
           document.addEventListener('DOMContentLoaded', function () {
        const carouselItems = document.querySelectorAll('#carouselAuto .carousel-item');
        let currentIndex = 0;
        const totalItems = carouselItems.length;
        const intervalTime = 3000; // Temps d'intervalle en millisecondes (3 secondes)

        function showSlide(index) {
            carouselItems.forEach((item, i) => {
                item.classList.toggle('hidden', i !== index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex < totalItems - 1) ? currentIndex + 1 : 0;
            showSlide(currentIndex);
        }

        // Défilement automatique du carrousel
        setInterval(nextSlide, intervalTime);

        // Initialiser le carrousel avec la première image
        showSlide(currentIndex);
    });
        </script>
@endsection
     