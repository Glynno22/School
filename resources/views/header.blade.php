  <!-- Topbar Start -->
  <div class="container-fluid bg-primary px-4 d-none d-lg-block">
    <div class="row gx-6 align-items-center">
        <div class="col-lg-8 d-flex  text-center text-lg-start mb-lg-0">
            <a href="#" class="text-muted me-3"><i class="fas fa-map-marker-alt text-secondary me-1"></i>Douala-Yaoundé</a>
            <a href="#" class="text-muted me-3"><i class="fas fa-envelope text-secondary me-1"></i>tchoffobrayan0@gmail.com</a>
            <a href="#" class="text-muted"><i class="fas fa-phone-alt text-secondary me-1"></i>+237658003716</a>
        </div>
        <div class="col-lg-4 text-center mb-2 mb-lg-0 text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 50px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0 text-center">
            <h1 class="display-4 text-secondary m-0">
                <img src="{{ asset('img/brand-logo.png') }}" class="img-fluid" alt="">WillTravel
            </h1>
               <p class="">CONSULTING</p>
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
                        <a href="{{ url('/assistance') }}" class="dropdown-item">ASSISTANCE VISA</a>  
                        <a href="{{ url('/temoignag') }}" class="dropdown-item"> ETUDE A L'ETRANGER</a>           
                        <a href="{{ url('/temoignage') }}" class="dropdown-item">AUTRES</a>


                    
                    </div>
                </div>
                {{-- <a href="{{ url('/accueil/service/assistance') }}" class="{{ Request::is('accueil/service/assistance') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">Service</a> --}}
                <a href="{{ url('/actualite') }}" class="{{ Request::is('actuilite') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">ACTUALITE</a>
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'nav-item nav-link active' : 'nav-item nav-link'}}">CONTACT</a>
            </div>
            {{-- <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
            {{-- <a href="" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get A Quote</a> --}}
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
 
 


