<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Newlester</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-100 text-gray-900">
    <!-- Navigation Bar -->
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold text-lg">LOGO/NOM</div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="{{url('/')}}" class="hover:text-orange-500">Accueil</a>
                <a href="#" class="hover:text-orange-500">Etude</a>
                <a href="#" class="hover:text-orange-500">Services</a>
                <a href="#" class="hover:text-orange-500">Bourse</a>
                <a href="#" class="hover:text-orange-500">Carrière</a>
                <a href="#" class="text-orange-500">Contact</a>
            </div>
            <div class="md:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden mt-2">
            <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Accueil</a>
            <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Etude</a>
            <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Services</a>
            <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Bourse</a>
            <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Carrière</a>
            <a href="#" class="block px-4 py-2 text-orange-500">Contact</a>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center text-blue-900 mb-4">NOUS SOMMES HEUREUX DE VOUS ENTENDRE !</h1>
        <p class="text-center text-gray-700 mb-8">
            Chez Newlester, nous croyons que chaque question et chaque commentaire compte. Nous sommes là pour vous écouter et vous aider avec le plus grand soin. Que vous ayez des questions, des suggestions ou simplement l'envie de nous faire part de vos impressions, n'hésitez pas à nous contacter. Votre avis est précieux pour nous, et nous nous engageons à vous répondre dans les plus brefs délais.
        </p>
        <form class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nom <span class="text-orange-500">*</span></label>
                    <input type="text" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Prénom <span class="text-orange-500">*</span></label>
                    <input type="text" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email <span class="text-orange-500">*</span></label>
                <input type="email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Téléphone <span class="text-orange-500">*</span></label>
                <input type="tel" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Comment pouvons-nous vous aider ? <span class="text-orange-500">*</span></label>
                <textarea required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm h-32"></textarea>
            </div>
            <div class="flex items-center mb-4">
                <input id="accept-terms" type="checkbox" required
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="accept-terms" class="ml-2 block text-sm text-gray-700">J'accepte la <a href="#" class="text-orange-500">politique de confidentialité</a></label>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-orange-500 text-white py-2 px-4 rounded-md shadow hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Soumettre
                </button>
            </div>
        </form>
    </section>

    <section class="container mx-auto p-8 text-center">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Souhaitez-vous un contact direct ?</h2>
        <div class="flex flex-col md:flex-row justify-center items-center gap-8">
            <div class="max-w-xs md:w-1/4">
                <img src="https://via.placeholder.com/150" alt="Brayan catherine"
                    class="rounded-full mx-auto mb-4 transition-transform transform hover:scale-105">
                <h3 class="text-lg font-bold">Brayan catherine</h3>
                <p class="text-blue-500">consultant</p>
                <p class="text-gray-700"><a href="mailto:brayan@gmail.com">brayan@gmail.com</a></p>
                <p class="text-gray-700">+33 457 327 823</p>
            </div>
            <div class="max-w-xs md:w-1/4">
                <img src="https://via.placeholder.com/150" alt="Heste catherine"
                    class="rounded-full mx-auto mb-4 transition-transform transform hover:scale-105">
                <h3 class="text-lg font-bold">Heste catherine</h3>
                <p class="text-blue-500">consultante</p>
                <p class="text-gray-700"><a href="mailto:heste@gmail.com">heste@gmail.com</a></p>
                <p class="text-gray-700">+33 457 327 823</p>
            </div>
            <div class="max-w-xs md:w-1/4">
                <img src="https://via.placeholder.com/150" alt="Donald catherine"
                    class="rounded-full mx-auto mb-4 transition-transform transform hover:scale-105">
                <h3 class="text-lg font-bold">Donald catherine</h3>
                <p class="text-blue-500">consultant</p>
                <p class="text-gray-700"><a href="mailto:donald@gmail.com">donald@gmail.com</a></p>
                <p class="text-gray-700">+33 457 327 823</p>
            </div>

            <div class="max-w-xs md:w-1/4 ">
                <img src="https://via.placeholder.com/150" alt="Donald catherine"
                    class="rounded-full mx-auto mb-4 transition-transform transform hover:scale-105">
                <h3 class="text-lg font-bold">Donald catherine</h3>
                <p class="text-blue-500">consultant</p>
                <p class="text-gray-700"><a href="mailto:donald@gmail.com">donald@gmail.com</a></p>
                <p class="text-gray-700">+33 457 327 823</p>
            </div>
        </div>
    </section>

    <!-- Direct Contact Section -->
    <!-- Footer -->
   



    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
