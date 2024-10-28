@extends('master')



@section('content')
    
     <!-- Header Start -->
     <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">À propos de nous</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">About</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-light rounded">
                        <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                        <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">À propos de l'entreprise</h5>
                    <h1 class="display-5 mb-4">Nous sommes une agence de conseil en immigration .</h1>
                    <p class="mb-4"> Chez [nom de l'entreprise], nous facilitons votre transition de l'Afrique vers l'Europe en vous offrant des solutions d'immigration personnalisées de toutes natures. Notre objectif est de vous accompagner à chaque étape de votre parcours, en vous fournissant les informations et le soutien nécessaires pour réaliser vos rêves et bâtir un avenir meilleur, tout en vous ouvrant les portes de nouvelles opportunités.</p>
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                            <h5 class="ms-4">Les meilleures ressources en matière d'immigration</h5>
                        </div>
                        <div class="col-12 col-sm-6 d-flex align-items-center">
                            <i class="fas fa-passport fa-3x text-secondary"></i>
                            <h5 class="ms-4">Procédure étudiant disponible</h5>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="bg-light text-center rounded p-3">
                                <div class="mb-2">
                                    <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                                </div>
                                <h1 class="display-5 fw-bold mb-2">4</h1>
                                <p class="text-muted mb-0"> années d'expérience</p>
                            </div>
                        </div>
                        <div class="col-8 col-md-9">
                            <div class="mb-5">
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Offrir une assistance 100 % authentique</p>
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> C'est une exécution plus rapide et plus fiable</p>
                                <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Conseils précis et experts</p>
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
                                    <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">+237658003716</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection