
<!-- -------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    
    <header class="h-20 w-full">
        <div class="grid grid-flow-col bg-white">
            <div class="m-6 ">
                <img class="h-10 w-auto ml-32 sm:ml-0" src="imagens/capituratela.png" alt="Minha Imagem">
            </div>
            @yield('header')
        </div>
    </header>
    @yield('content')
    
  <!-- limite -->
    <!-- Carrossel de Banners -->
    <div class="flex flex-col bg-gray-200 p-4">
    <h1 id="cursosemdestaqu" class="underline md:underline-offset-8 decoration-yellow-600 decoration-4 underline-offset-1 font-bold p-8 text-center text-xl ">CURSOS EM DESTAQUE</h1>
    <!-- Banners -->
    <div class="relative overflow-hidden mx-auto w-full max-w-screen-xl mb-10">
        <!-- Banner Container -->
        <div id="banner-container" class="flex flex-nowrap gap-10 justify-center transition-transform duration-500 ease-in-out">
            <!-- Banner 1 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 1" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-600 font-bold">Desenho Técnico 1</h2>
                <button class="m-3 px-4 py-2 bg-yellow-600 text-white font-bold rounded-md hover:bg-yellow-600">
                    Ver Mais Detalhes
                </button>
            </div>

            <!-- Banner 2 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 2" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-600 font-bold">Desenho Técnico 2</h2>
                <button class="m-3 px-4 py-2 bg-yellow-600 text-white font-bold rounded-md hover:bg-yellow-600">
                    Ver Mais Detalhes
                </button>
            </div>

            <!-- Banner 3 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 3" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-600 font-bold">Desenho Técnico 3</h2>
                <button class="m-3 px-4 py-2 bg-yellow-600 text-white font-bold rounded-md hover:bg-yellow-600">
                    Ver Mais Detalhes
                </button>
            </div>
        </div>
    </div>
    <!-- Inputs de rádio -->
    <div class="p-2 m-5 gap-3 flex justify-center">
        <input id="radio1" class="peer/draft" type="radio" name="status" checked />
        <input id="radio2" class="peer/draft" type="radio" name="status" />
        <input id="radio3" class="peer/draft" type="radio" name="status" />
    </div>
</div>
<script>
    const radios = document.querySelectorAll('input[type="radio"]');
    const bannerContainer = document.getElementById('banner-container');

    let currentIndex = 0;

    radios.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            currentIndex = index;
            moveImages();
        });
    });

    function moveImages() {
        const bannerItems = document.querySelectorAll('.banner-item');
        bannerItems.forEach((item, itemIndex) => {
            const newPosition = (itemIndex - currentIndex + 1 + bannerItems.length) % bannerItems.length;
            item.style.order = newPosition;
        });
    }
</script>
<script>
    const radios = document.querySelectorAll('input[type="radio"]');
    const bannerContainer = document.getElementById('banner-container');

    let currentIndex = 0;

    radios.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            currentIndex = index;
            moveImages();
        });
    });

    function moveImages() {
        const bannerItems = document.querySelectorAll('.banner-item');
        bannerItems.forEach((item, itemIndex) => {
            const newPosition = (itemIndex - currentIndex + 1 + bannerItems.length) % bannerItems.length;
            item.style.order = newPosition;
        });
    }
</script>
    <!-- limite -->
    <!-- limite -->
   
    @yield('continue')
 
    <div class="fixed bottom-0 right-0 m-4">
        <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold w-12 h-12 rounded-full flex items-center justify-center" onclick="scrollToTop()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
            </svg>
        </button>
    </div>

    <footer class="bg-gray-200 p-4">
        
    <footer class="bg-gray-200 ">
    <div class="text-center mb-2 text-sm">
        <p>CNPJ 00.000.000/0001-000</p>
        <p>Lorem ipsum</p>
        <p>lorem@ipsum.com</p>
    </div>
    <div class="flex justify-center items-end">
        <img class="h-8 w-auto" src="imagens/capituratela.png" alt="Minha Imagem">
    </div>
        <script>
            // Função para rolar para o topo da página
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // Rola suavemente
                });
            }

            // Mostrar o botão quando o usuário rolar para baixo
            window.addEventListener('scroll', function() {
                var scrollTopButton = document.getElementById('scrollTopButton');
                if (document.documentElement.scrollTop > 300) {
                    scrollTopButton.style.display = 'block';
                } else {
                    scrollTopButton.style.display = 'none';
                }
            });
        </script>

    </footer>  

   <script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script> 
</body>
</html>