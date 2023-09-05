@extends('layout.index')

@section('title','Cursos')

@section('header')
<ul class="flex flex-col sm:flex-row justify-center mt-4 sm:mt-10">
    <li class="mr-0 mb-2 sm:mr-6 sm:mb-0 hover:underline md:underline-offset-4 hover:text-black hover:border-b-2 hover:border-yellow-600">
        <a href="#quemsomos">Quem somos</a>
    </li>
    <li class="mr-0 mb-2 sm:mr-6 sm:mb-0 hover:underline md:underline-offset-4 hover:text-black hover:border-b-2 hover:border-yellow-600">
        <a href="#vantagem">Vantagens de assinar</a>
    </li>
    <li class="mr-0 mb-2 sm:mr-6 sm:mb-0 hover:underline md:underline-offset-4 hover:text-black hover:border-b-2 hover:border-yellow-600">
        <a href="#cursosemdestaque">Quero assinar</a>
    </li>
    <li class="mr-0 mb-2 sm:mr-6 sm:mb-0 hover:underline md:underline-offset-4 hover:text-black hover:border-b-2 hover:border-yellow-600">
        <a href="#faq">Perguntas frequentes</a>
    </li>
    <li class="mr-0 hover:underline md:underline-offset-4 hover:text-black hover:border-b-2 hover:border-yellow-600">
        <a href="#contato">Contato</a>
    </li>
</ul>


@endsection




@section('content')

 <!-- Imagem de cabeçalho -->
    <div class="w-full bg-gray-500 flex items-center justify-center">
        <img class="h-auto w-full object-cover" src="imagens/image.png" alt="Minha Imagem">
    </div>

    <!-- Conteúdo centralizado -->
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 id="quemsomos" class="text-center mb-6 font-bold text-xl">QUEM SOMOS</h1>
        <div class="rounded-2xl w-full md:w-2/3 lg:w-1/2">
            <img  class="h-auto w-full" src="imagens/image37.jpg" alt="">
        </div>
        <div class="text-center m-2 p-2 md:p-6 max-w-3xl"> <!-- Defina a largura máxima aqui (max-w-lg) -->
            <p class="text-center m-1 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                In aliquet sapien ut elit volutpat, eu gravida nulla sodales. Curabitur sit amet aliquam felis.
                Nam tincidunt mattis odio non accumsan.
                Morbi semper lectus vitae eleifend efficitur. Donec sodales massa vel lacus varius pretium. Pellentesque leo orci,
                commodo id diam vel, dapibus sollicitudin metus. Sed blandit justo massa, vel dictum risus dapibus eu.</p>
        </div>
    </div>
@endsection

@section('continue')

<div class="flex flex-col md:flex-row">
        <!-- Imagem à esquerda -->
        <div class="md:w-2/4">
            <img id="vantagem" src="imagens/Layer11.png" alt="Layer11">
        </div>

        <!-- Retângulos com texto à direita -->
        <div class="flex-initial md:w-2/4 m-4">
            <div class="m-2">
                <h2 class="m-4 text-yellow-600 font-bold text-3xl">Lorem ipsum dolor sit amet,</h2>
                <h3 class="m-4 text-xl">consectur adipiscing elit</h3>
            </div>
            
            <!-- Primeiro retângulo -->
            <div class="bg-yellow-600 rounded-xl p-4 mx-7 my-5 h-24 flex">
                <p class="text-white  font-bold flex-none text-5xl ml-2">1 |</p>
                <div class="mx-10">
                    <p class="text-white text-xl flex-1 w-64 font-semibold"> Lorem ipsum dolor sit amet</p>
                    <p class="text-white text-justify ">
                        consectetur adipiscing elit. Quisque semper diam ut orci feugiat ullamcorper.
                        Pellentesque tellus metus, elementum et aliquam
                    </p>
                </div>
            </div>
            
            <!-- Segundo retângulo -->
            <div class="bg-yellow-600 rounded-xl p-4 mx-7 my-5 h-24 flex">
                <p class="text-white  font-bold flex-none text-5xl ml-2">2 |</p>
                <div class="mx-10">
                    <p class="text-white text-xl flex-1 w-64 font-semibold"> Lorem ipsum dolor sit amet</p>
                    <p class="text-white text-justify ">
                        consectetur adipiscing elit. Quisque semper diam ut orci feugiat ullamcorper.
                        Pellentesque tellus metus, elementum et aliquam
                    </p>
                </div>
            </div>
            
            <!-- Terceiro retângulo -->
            <div class="bg-yellow-600 rounded-xl p-4 mx-7 my-5 h-24 flex">
                <p class="text-white  font-bold flex-none text-5xl ml-2">3 |</p>
                <div class="mx-10">
                    <p class="text-white text-xl flex-1 w-64 font-semibold"> Lorem ipsum dolor sit amet</p>
                    <p class="text-white text-justify ">
                        consectetur adipiscing elit. Quisque semper diam ut orci feugiat ullamcorper.
                        Pellentesque tellus metus, elementum et aliquam
                    </p>
                </div>
            </div>

            <!-- Quarto retângulo -->
            <div class="bg-yellow-600 rounded-xl p-4 mx-7 my-5 h-24 flex">
                <p class="text-white  font-bold flex-none text-5xl ml-2">4 |</p>
                <div class="mx-10">
                    <p class="text-white text-xl flex-1 w-64 font-semibold"> Lorem ipsum dolor sit amet</p>
                    <p class="text-white text-justify ">
                        consectetur adipiscing elit. Quisque semper diam ut orci feugiat ullamcorper.
                        Pellentesque tellus metus, elementum et aliquam
                    </p>
                </div>
            </div>

            <!-- Botão -->
            <button class="bg-yellow-600 text-white font-semibold py-1 px-3 md:px-14 rounded-full mt-10 ml-9">
                Lorem ipsum
            </button>
        </div>
    </div>

<!--faq---------------------------------------------------------------------------------------------------------------------------->

<div class=" h-max bg-gray-100 p-12" >
    <div class=" w-100 mx-auto max-w-2xl ">
        <h1 id="faq" class="text-center font-bold text-xl underline md:underline-offset-8 decoration-yellow-500 decoration-4 underline-offset-1" >FAQ</h1>

        <p class="text-center p-5" >
            consectetur adipiscing elit. Quisque semper diam ut orci feugiat ullamcorper. 
            Pellentesque tellus metus, elementum et aliquam quis,
        </p>

        <div class="shaldow-2xl bg-white rounded-3xl p-1 m-4 w-full border-gray-300">
            <div class="flex items-center justify-between p-2  cursor-pointer ">
                    <p class="px-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span id="toggle-arrow" class="font-bold" onclick="toggleAnswer(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg></span>
            </div>
            <div class="p-2">
                <div class="answer hidden">
                    <p>In aliquet sapien ut elit volutpat, eu gravida nulla sodales. 
                            Curabitur sit amet aliquam felis. Nam tincidunt mattis odio non accumsan.
                            Morbi semper lectus vitae eleifend efficitur. Donec sodales massa vel lacus
                            varius pretium. Pellentesque leo orci, commodo id diam vel,
                            dapibus sollicitudin metus. Sed blandit justo massa,
                                vel dictum risus dapibus eu.
                    </p>
                </div>
            </div>
        </div>


         <div class="shaldow-2xl bg-white rounded-3xl p-1 m-4 w-full border-gray-300">
            <div class="flex items-center justify-between p-2  cursor-pointer ">
                    <p class="px-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span id="toggle-arrow" class="font-bold" onclick="toggleAnswer(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg></span>
            </div>
            <div class="p-2">
                <div class="answer hidden">
                    <p>In aliquet sapien ut elit volutpat, eu gravida nulla sodales. 
                            Curabitur sit amet aliquam felis. Nam tincidunt mattis odio non accumsan.
                            Morbi semper lectus vitae eleifend efficitur. Donec sodales massa vel lacus
                            varius pretium. Pellentesque leo orci, commodo id diam vel,
                            dapibus sollicitudin metus. Sed blandit justo massa,
                                vel dictum risus dapibus eu.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="shaldow-2xl bg-white rounded-3xl p-1 m-4 w-full border-gray-300 ">
            <div class="flex items-center justify-between p-2  cursor-pointer ">
                    <p class="px-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span id="toggle-arrow" class="font-bold" onclick="toggleAnswer(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg></span>
            </div>
            <div class="p-2">
                <div class="answer hidden ">
                    <p>In aliquet sapien ut elit volutpat, eu gravida nulla sodales. 
                            Curabitur sit amet aliquam felis. Nam tincidunt mattis odio non accumsan.
                            Morbi semper lectus vitae eleifend efficitur. Donec sodales massa vel lacus
                            varius pretium. Pellentesque leo orci, commodo id diam vel,
                            dapibus sollicitudin metus. Sed blandit justo massa,
                                vel dictum risus dapibus eu.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <button class="m-8 bg-yellow-600 text-white font-semibold py-2 px-8 rounded-full">Saiba mais</button>
        </div>
        
    </div>
</div>

<script>
    function toggleAnswer(arrowIcon) {
    const answerDiv = arrowIcon.parentElement.nextElementSibling.querySelector('.answer');
    const chevronIcon = arrowIcon.querySelector('svg');

    if (answerDiv.classList.contains("hidden")) {
        chevronIcon.style.transform = "rotate(180deg)"; //  posição original
        answerDiv.classList.remove("hidden");
    } else {
        chevronIcon.style.transform = "rotate(0deg)"; //  rotação para inverter o ícone
        answerDiv.classList.add("hidden");
    }
}
</script>

<!-- contato ------------------------------------------------------------------------------------------------>
                <div class="m-8">
                    <h1 id="contato" class="text-center font-bold text-xl underline md:underline-offset-8 decoration-yellow-600 decoration-4 underline-offset-1">CONTATO</h1>
                </div>
    <div class="mx-auto bg-white rounded-lg shadow-md flex flex-row justify-center">
        

        <div class="h-auto w-4/12 m-5 p-4">
            <div class="flex  justify-between">
                <div class="p-2">  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                    <h3>Endereço:</h3>
                    <p>Av. Nilo Peçanha, 338</p>
                    <p>Petrópolis, Natal</p>
                </div>
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> 
                    <h3>Telefone:</h3>
                    <p>Telefone: (99) 1234-5678</p>
                </div>
            </div>
            <form action="/home" method="post" class="w-full">
                @csrf
                <div class="mb-2">
                    <input type="text" name='nome' placeholder="Digite seu nome..." class="w-full border border-yellow-600 rounded-2xl p-2 mb-2">
                    @error('nome')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <input type="text" name='email' placeholder="Digite seu E-mail..." class="w-full border border-yellow-600 rounded-2xl p-2">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col md:flex-row mb-2">
                    <input type="text" name='interesse' placeholder="Digite seu interesse..." class="w-full md:w-2/3 border border-yellow-600 rounded-2xl p-2 mb-2 md:mb-0 md:mr-3">
                    @error('interesse')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <input type="date" name='data_nascimento' placeholder="  /  /  ..." class="w-full md:w-1/3 border border-yellow-600 rounded-2xl p-2">
                    @error('data_nascimento')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <textarea name='mensagem' placeholder="Mensagem..." class="w-full border border-yellow-500 rounded-2xl p-2"></textarea>
                    @error('mensagem')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-yellow-600 text-white py-2 px-12 rounded-3xl hover:bg-yellow-600">Enviar</button>
            </form>
        </div>

    <!-- Mapa -->
        <div class="h-96 w-96 m-5 p-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.531977021512!2d-35.19874037017977!3d-5.805908871053844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b30404c2f276f7%3A0xdf17e04ffae0de3c!2sAv.%20Nilo%20Pe%C3%A7anha%2C%20338%20-%20Petr%C3%B3polis%2C%20Natal%20-%20RN%2C%2059120-000!5e0!3m2!1sen!2sbr!4v1662978342355!5m2!1sen!2sbr"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
        </div>
    </div>
@endsection