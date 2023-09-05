@extends('layout.index')

@section('title','ADM')

@section('content')

@endsection

<div class="flex flex-col bg-gray-200 p-4">
    <h1 class="text-yellow-500 font-bold p-8 text-center">Cursos em Destaque</h1>
    <!-- Banners -->
    <div class="relative overflow-hidden mx-auto w-full max-w-screen-xl mb-10">
        <!-- Banner Container -->
        <div id="banner-container" class="flex flex-nowrap gap-10 justify-center transition-transform duration-500 ease-in-out">
            <!-- Banner 1 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 1" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-500 font-bold">Desenho Técnico 1</h2>
                <button class="m-3 px-4 py-2 bg-yellow-500 text-white font-bold rounded-md hover:bg-yellow-600">
                    Ver Mais Detalhes
                </button>
            </div>

            <!-- Banner 2 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 2" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-500 font-bold">Desenho Técnico 2</h2>
                <button class="m-3 px-4 py-2 bg-yellow-500 text-white font-bold rounded-md hover:bg-yellow-600">
                    Ver Mais Detalhes
                </button>
            </div>

            <!-- Banner 3 -->
            <div class="banner-item bg-white flex flex-col items-center justify-center rounded-lg overflow-hidden shadow-2xl">
                <img src="imagens/image41.png" alt="Banner 3" class="w-full h-36 object-cover">
                <h2 class="m-2 text-yellow-500 font-bold">Desenho Técnico 3</h2>
                <button class="m-3 px-4 py-2 bg-yellow-500 text-white font-bold rounded-md hover:bg-yellow-600">
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