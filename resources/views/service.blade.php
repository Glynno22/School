@extends('master')
@section('pageNane')
    services
@endsection

@section('content')
        <!-- Image principale avec le titre -->
        <section class="relative bg-blue-100 h-64 flex items-center justify-center">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/mnt/data/service.png'); opacity: 0.3;">
            </div>
            <div class="relative z-10 text-center">
                <h2 class="text-4xl font-bold text-blue-800">ASSISTANCES</h2>
                <p class="text-lg text-blue-600">ACCUEIL / SERVICES / ASSISTANCE</p>
            </div>
        </section>
    
        <!-- Section Admission -->
        <section class="container mx-auto py-12 px-4">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-8">ADMISSION</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-blue-700">QUESTION 1:</h3>
                    <p class="text-gray-600">Réponse à la question 1 de manière excitante pour pousser l'utilisateur à nous contacter pour en savoir plus encore...</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-blue-700">QUESTION 2:</h3>
                    <p class="text-gray-600">Réponse à la question 2 de manière excitante pour pousser l'utilisateur à nous contacter pour en savoir plus encore...</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-blue-700">QUESTION 3:</h3>
                    <p class="text-gray-600">Réponse à la question 3 de manière excitante pour pousser l'utilisateur à nous contacter pour en savoir plus encore...</p>
                </div>
            </div>
    
            <div class="mt-8 text-center">
                <a href="#" class="text-blue-700 font-bold text-lg hover:text-blue-900 transition">Pour voir plus de procédure complète cliquez ici !!!!!</a>
                <div class="mt-4 inline-block bg-blue-600 text-white p-3 rounded-full animate-bounce">
                    <span class="text-lg font-bold">50$</span>
                </div>
            </div>
        </section>
    
        <!-- Section Nos Assistances -->
        <section class="bg-blue-700 text-white py-12 space-y-4">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-6">NOS ASSISTANCES</h2>
                <ul class="space-y-4">
                    <li>Assistance pour une admission</li>
                    <li>Assistance pour un logement</li>
                    <li>Assistance pour une prise de rendez-vous</li>
                </ul>
            </div>
        </section>  

        <br>





@endsection