<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Étude en Allemagne</title>
    @vite('resources/css/app.css')
    <style>
        
    </style>
</head>
<body class=" font-sans antialiased w-full bg-gray-100">

    @include('header')
    
    <section class="overflow-x-hidden space-y-10">

        @yield('content')

    </section>

    @include('footer')









   @yield('script')
<script>
    // Mobile menu toggle
    document.getElementById('hamburger').onclick = function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    };
</script>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('#carousel > div');
        const totalSlides = slides.length;
    
        function moveCarousel(slide) {
            const carousel = document.getElementById('carousel');
            carousel.style.transform = `translateX(-${slide * 100}%)`;
            currentSlide = slide;
            updateButtons();
        }
    
        function updateButtons() {
            const buttons = document.querySelectorAll('.pagination button');
            buttons.forEach((button, idx) => {
                if (idx === currentSlide) {
                    button.classList.add('bg-blue-600');
                    button.classList.remove('bg-gray-400');
                } else {
                    button.classList.add('bg-gray-400');
                    button.classList.remove('bg-blue-600');
                }
            });
        }
    
        setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            moveCarousel(currentSlide);
        }, 5000);
    </script>
    
    <script>
            
    
    // IntersectionObserver pour l'animation
    const elementsToAnimate = document.querySelectorAll('.fade-in, .slide-up, .fade-in-left, .fade-in-right');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-active');
            }
        });
    });
    
    elementsToAnimate.forEach((el) => observer.observe(el));
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
