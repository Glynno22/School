 <!-- Header avec Hamburger Menu -->
 <header class="bg-blue-700 text-white ">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="text-2xl font-bold">LOGO/NOM</div>
        <nav class="hidden md:flex space-x-4">
            <a href="#" class="text-yellow-400 hover:underline">Accueil</a>
            <a href="#" class="hover:underline hover:text-orange-500">Étude</a>
            <a href="{{url('/accueil/service/assistance')}}" class="hover:underline hover:text-orange-500">Services</a>
            <a href="#" class="hover:underline hover:text-orange-500">Bourse</a>
            <a href="#" class="hover:underline hover:text-orange-500">Carrière</a>
            <a href="{{url('/contact')}}" class="hover:underline hover:text-orange-500">Contact</a>
        </nav>
        <button id="hamburger" class="md:hidden focus:outline-none" >
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white space-y-2 p-4 fade-in-left">
        <a href="#" class="block text-yellow-400 hover:underline">Accueil</a>
        <a href="#" class="block hover:underline hover:text-orange-500">Étude</a>
        <a href="/accueil/service/assistance" class="block hover:underline hover:text-orange-500">Services</a>
        <a href="#" class="block hover:underline hover:text-orange-500">Bourse</a>
        <a href="#" class="block hover:underline hover:text-orange-500">Carrière</a>
        <a href="{{url('/contact')}}" class="block hover:underline hover:text-orange-500">Contact</a>
    </nav>
</header>
