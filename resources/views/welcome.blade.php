
@extends('master')

@section('content')
  <!-- Carousel Start /home/u692016610/public_html/papy/School -->
  <div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 11000px;">
                        <p class="display-1 text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Explorez le monde et ces horizons</p>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">WillTravel Consulting accompagne les étudiants dans leurs projets de voyage à l’international, que ce soit pour des études, des stages ou des échanges culturels. Forts de notre expertise et de notre passion pour l’exploration, nous nous engageons à rendre votre expérience de voyage enrichissante, fluide et mémorable. </p>
                        {{-- <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 11000px;">
                        <p class="display-1 text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Réaliser votre rêves de vivre et de travailler a l'étranger</p>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">WillTravel Consulting est spécialisée dans les services de visa pour étudiants, facilitant les démarches d’immigration pour des études, des stages, ou des échanges culturels à l’étranger. Nous offrons un accompagnement personnalisé, adapté aux besoins et aux objectifs de chaque étudiant, pour assurer un processus de demande de visa efficace et sans stress.
                        </p>
                        {{-- <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a> --}}
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel3.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="text-center p-4" style="max-width: 11000px;">
                        <p class="display-1  text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Laisser nous vous guider a chaque etape du processus</p>
                        <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">WillTravel consulting vous offrons un accompagnement personnalisé, adapté aux besoins et aux objectifs de chaque étudiant, pour assurer un processus de demande de visa efficace et sans stress.
                        </p>
                        {{-- <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a> --}}
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
            <span class="visually-hidden-focusable">Next</span>
        </button>
       
    </div>
</div>
<!-- Carousel End -->


<!-- Modal Search Start -->
{{-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Modal Search End -->



<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="sub-title pe-3">À propos de l'entreprise</h5>
                <h1 class="display-6 mb-4">Nous sommes une agence de conseil en immigration de confiance.</h1>
                <p class="mb-4">Chez WillTravel Consulting, nous nous engageons à offrir des solutions d'immigration sur mesure pour les étudiants souhaitant étudier à l'étranger. Avec une équipe d'experts passionnés et expérimentés, nous garantissons un accompagnement personnalisé à chaque étape du processus, du choix de la destination à l'obtention du visa. Notre objectif est de rendre vos rêves d'études à l'international accessibles et réalisables, tout en vous offrant un service transparent et de qualité. Faites confiance à notre expertise pour transformer votre projet en réalité !</p>
                <div class="row gy-4 align-items-center">
                   
                    <div class="col-4 col-md-3">
                        <div class="bg-light text-center rounded p-3">
                            <div class="mb-2">
                                <i class="fa-solid fa-circle-check fa-4x text-primary"></i>
                                
                            </div>
                            <h1 class="display-5 fw-bold mb-2">04</h1>
                            <p class="text-muted mb-0">Anneés d'expériences</p>
                        </div>
                    </div>
                    <div class="col-8 col-md-9">
                        <div class="mb-5 d-flex row-auto">
                            <div class="col-4 ">  
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Confidentialité</p>
                            </div>
                            <div class="col-4 ">   
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Transparence</p>
                            </div>
                            <div class="col-4 "> 
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i>Fiabilité</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                    <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                    <div class="position-absolute" style="top: 0; left: 25px;">
                                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <span class="text-primary">Avez-vous des questions?</span>
                                <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;"> +0123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded">
                    <img src="img/about1.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image" style="width: 300px; height: 300px;">
                    {{-- <img src="img/about-2.png" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image" height="300" width="300"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Counter Facts Start -->
<div class="container-fluid counter-facts py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Catégories de visas</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">31</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Membres de l'équipe</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">377</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Procédure de demande de visa</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">4.9</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="counter-content">
                        <h3>Taux de réussite</h3>
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="counter-value" data-toggle="counter-up">98</span>
                            <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Facts End -->


<!-- Services Start -->
<div class="container-fluid service overflow-hidden pt-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Catégories de visas</h5>
            </div>
            <h1 class="display-5 mb-4">Réussissez Votre Projet d'immigration pour étude </h1>
            <p class="mb-0"> Notre Agence vous proposez un accompagnement adapté à chaque type de visa pour étudiants, afin de répondre aux spécificités de votre projet. Que ce soit pour un visa étudiant, un visa de stage, un visa d’échange culturel, etc, notre expertise vous aide à comprendre les exigences, à préparer les documents nécessaires et à maximiser vos chances de succès.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Visa étudiant</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">voire plus</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Visa étudiant</h4></a>
                                <div class="px-4">
                                    <p class="mb-4"> Pour les étudiants qui souhaitent suivre un cursus universitaire ou scolaire dans un établissement à l’étranger pour une période prolongée.                                        .</p>
                                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Explorez plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Visa de stage </a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explorez plus</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Visa de stage </h4></a>
                                <div class="px-4">
                                    <p class="mb-4"> Permet de réaliser un stage dans une entreprise ou une organisation étrangère en tant qu'étudiant inscrit dans un établissement d'enseignement supérieur. Ce visa est souvent requis pour les stages obligatoires ou facultatifs dans le cadre d’un programme de formation.
                                    </p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0"> Visa "Talent Chercheur" (ou Doctorant)</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3"> Visa "Talent Chercheur" (ou Doctorant)</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Pour les étudiants engagés dans un projet de recherche, par exemple une thèse de doctorat, souvent sous le statut de cotutelle. Ce visa est généralement destiné aux étudiants chercheurs ou doctorants collaborant avec une université étrangère</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Visa Travail:</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Visa Travail:</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">Visa d’échange culturel</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">Visa d’échange culturel</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Délivré aux étudiants participant à un programme d’échange culturel ou éducatif. Il peut concerner des étudiants en échange académique, des programmes d’immersion linguistique, ou des cotutelles internationales.
                                    </p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-inner">
                        <div class="service-img">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="service-title">
                            <div class="service-title-name">
                                <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                    <a href="#" class="h4 text-white mb-0">visa tourisme</a>
                                </div>
                                <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                            </div>
                            <div class="service-content pb-4">
                                <a href="#"><h4 class="text-white mb-4 py-3">visa toutisme</h4></a>
                                <div class="px-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                    <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->



<!-- Features Start -->
<div class="container-fluid features overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Why Choose Us</h5>
            </div>
            <h1 class="display-5 mb-4">Offer Tailor Made Services That Our Client Requires</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center text-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-dollar-sign fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Cost-Effective</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fab fa-cc-visa fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Visa Assistance</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-atlas fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Faster Processing</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="feature-item text-center p-4">
                    <div class="feature-icon p-3 mb-4">
                        <i class="fas fa-users fa-4x text-primary"></i>
                    </div>
                    <div class="feature-content d-flex flex-column">
                        <h5 class="mb-3">Direct Interviews</h5>
                        <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



<!-- Contact Start -->
<div class="container-fluid contact overflow-hidden pb-5">
    <div class="container py-5">
        <div class="office pt-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Worlwide Offices</h5>
                </div>
                <h1 class="display-5 mb-4">Explore Our Office Worldwide</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Australia</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+123.456.7890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-1.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">Canada</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">(012) 0345 6789</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-3.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">United Kingdom</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">01234.567.890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="office-item p-4">
                        <div class="office-img mb-4">
                            <img src="img/office-4.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                        <div class="office-content d-flex flex-column">
                            <h4 class="mb-2">India</h4>
                            <a href="#" class="text-secondary fs-5 mb-2">+123.45.67890</a>
                            <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                            <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection
     