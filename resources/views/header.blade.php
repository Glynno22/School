  <!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>Douala</a>
                <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>tchoffobrayan0@gmail.com</a>
                <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+237658003716</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0 text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>
        {{-- <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                
                <a href="{{ url('/assistance')}}" class="text-muted mx-2"> Support</a><small> / </small>
                <a href="{{ url('/contact')}}" class="text-muted ms-2"> Contact</a>
            </div>
        </div> --}}
    </div>
</div>  
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="display-5 text-secondary m-0"><img src="{{asset('img/brand-logo.png')}}" class="img-fluid" alt="">WillTavel</h1>
            <h6>CONSULTING</h6>
            {{-- <img src="img/logo.png" alt="Logo">  --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">ACCUEIL</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">AGENCE</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/about') }}" class="dropdown-item">PRESENTATION</a>
                        <a href="{{ url('/assistance') }}" class="dropdown-item">EQUIPE</a>  
                        <a href="{{ url('/temoignag') }}" class="dropdown-item">RECRUREMENT</a>           
                        <a href="{{ url('/temoignage') }}" class="dropdown-item">TEMOIGNAGE</a>
                        <a href="{{ url('/about') }}" class="dropdown-item">GALERIES</a>

                    
                    </div>
                </div>
                {{-- <a href="{{ url('/etude') }}" class="{{ Request::is('etude') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">Etude</a> --}}

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">SERVICES</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/assistance') }}" class="dropdown-item">Assistance Visa</a>  
                        <a href="{{ url('/temoignag') }}" class="dropdown-item">Etude a L'étranger</a>           
                        <a href="{{ url('/temoignage') }}" class="dropdown-item">Autres</a>


                    
                    </div>
                </div>
                {{-- <a href="{{ url('/accueil/service/assistance') }}" class="{{ Request::is('accueil/service/assistance') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">Service</a> --}}
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">ACTUALITE</a>
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">Contact</a>
            </div>
            {{-- <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
            {{-- <a href="" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get A Quote</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
 
 

 <!-- Header avec Hamburger Menu -->
 {{-- <header class="bg-blue-700 text-white ">
    <div class="container mx-auto flex justify-between items-center py-4">
        <a href="{{url('/')}}" class="mb-6">
            <img src="{{asset('logo.svg')}}" alt="logo" width="40" height="40">
        </a>
       
        
        <nav class="hidden md:flex space-x-4">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Accueil</a>
            <a href="{{ url('/etude') }}" class="{{ Request::is('etude') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Étude</a>
            <a href="{{ url('/accueil/service/assistance') }}" class="{{ Request::is('accueil/service/assistance') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Services</a>
            <a href="#" class="{{ Request::is('bourse') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Bourse</a>
            <a href="#" class="{{ Request::is('carriere') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Carrière</a>
            <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'text-yellow-400' : 'hover:text-orange-500 hover:underline' }}">Contact</a>
        </nav>
        <button id="hamburger" class="md:hidden focus:outline-none">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-700 text-white space-y-2 p-4 fade-in-left">
        <a href="{{url('/')}}" class="block text-yellow-400 hover:underline">Accueil</a>
        <a href="{{url('/etude')}}" class="block hover:underline hover:text-orange-500">Étude</a>
        <a href="{{url('/accueil/service/assistance')}}" class="block hover:underline hover:text-orange-500">Services</a>
        <a href="{{url('/bourse')}}" class="block hover:underline hover:text-orange-500">Bourse</a>
        <a href="#" class="block hover:underline hover:text-orange-500">Carrière</a>
        <a href="{{url('/contact')}}" class="block hover:underline hover:text-orange-500">Contact</a>
    </nav>
</header> --}}
