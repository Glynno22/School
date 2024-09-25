
@extends('master')

@section('content')

    
<!-- Hero Section -->
<div class="container mx-auto mt-10 text-center slide-in">
    <h1 class="text-4xl font-bold text-blue-800">ETUDES</h1>
    <p class="text-gray-600">ACCUEIL / ETUDE</p>
    <p class="text-xl mt-5">Pour préparer votre réussite, nous vous proposons des solutions d'immigration fiable.</p>
</div>

<!-- Pays Section -->

<div class=" container mx-auto mt-10 grid grid-cols-2 md:grid-cols-3 gap-6  fade-in-left">
    <a href="{{url('/etude/allemagne/universite')}}">
        <div class="text-center bg-gray-200 py-6 rounded-lg shadow-md hover:shadow-lg">
            <p class="text-xl font-semibold">FORMATION INITIALE</p>
        </div>
    </a>
    <a href="{{url('/etude/allemagne/formation')}}">
        <div class="text-center bg-gray-200 py-6 rounded-lg shadow-md hover:shadow-lg">
            <p class="text-xl font-semibold">FORMATION ALTERNANCE</p>
        </div>
    </a>
    <a href="{{url('/contact')}}">
        <div class="text-center bg-gray-200 py-6 rounded-lg shadow-md hover:shadow-lg">
            <p class="text-xl font-semibold">AUTRE</p>
        </div>
    </a>
    
</div>

<!-- Actualités Global Section -->
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center text-blue-800 mb-8 slide-in">ACTUALITES GLOBAL (ETUDE)</h2>

    <!-- Carrousel -->
    <div class="relative w-full overflow-hidden fade-in-left">
        <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
            <!-- First Slide -->
            <div class="w-full flex-shrink-0">
                <div class="flex">
                    <img src="{{asset('img1.jpg')}}" alt="Saint Louis University" class=" w-2/5 h-28" >
                    <p class="text-center mt-2">Saint Louis University - Demande d'admission pour 2025.</p>
                </div>
            </div>
            <!-- Second Slide -->
            <div class="w-full flex-shrink-0">
                <div class="flex">
                    <img src="{{asset('img1.jpg')}}" alt="Saint Louis University" class=" w-2/5 h-28" >
                    <p class="text-center mt-2">Saint Louis University - Demande d'admission pour 2025.</p>
                </div>
            </div>
            <!-- Third Slide -->
            <div class="w-full flex-shrink-0">
                <div class="flex">
                    <img src="{{asset('img1.jpg')}}" alt="Saint Louis University" class=" w-2/5 h-28" >
                    <p class="text-center mt-2">Saint Louis University - Demande d'admission pour 2025.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination / Navigation -->
    <div class="flex justify-center space-x-3 mt-4">
        <button class="w-3 h-3 rounded-full bg-blue-600 pagination button" onclick="moveCarousel(0)"></button>
        <button class="w-3 h-3 rounded-full bg-gray-400 pagination button" onclick="moveCarousel(1)"></button>
        <button class="w-3 h-3 rounded-full bg-gray-400 pagination button" onclick="moveCarousel(2)"></button>
    </div>
</div>

<!-- JS for Carousel -->


@endsection

