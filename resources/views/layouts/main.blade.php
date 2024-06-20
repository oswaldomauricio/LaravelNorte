<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- favicon --}}

    <link rel="apple-touch-icon" sizes="180x180" href="/imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="/imgs/favicon/site.webmanifest">
    <link rel="mask-icon" href="/imgs/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <title>@yield('title')</title>
</head>
<body>
  <header>
    <div class="h-10 bg-[#010C52] flex justify-center items-center">
        <div class="container flex justify-between items-center">
          <button 
          class="flex justify-between items-center gap-2 text-white"
   
          >
            <ion-icon name="caret-down-outline" class="text-white"></ion-icon>
            <span class="font-bold">Conheça nossas lojas</span>
          </button>
          <div class="flex justify-between items-center gap-6 text-white">
            <a
              rel="stylesheet"
              href="https://www.facebook.com/norteautopecas"
              target="_blank"
            >
              <ion-icon name="logo-facebook"class="text-white text-2xl"></ion-icon>
            </a>
            <a
              rel="stylesheet"
              target="_blank"
              href="https://www.instagram.com/norteautopecas_/"
            >
            <ion-icon name="logo-instagram" class="text-white text-2xl"></ion-icon>
            </a>
            <a
              rel="stylesheet"
              target="_blank"
              href="https://www.linkedin.com/company/norte-auto-peças/mycompany/"
            >
            <ion-icon name="logo-linkedin" class="text-white text-2xl"></ion-icon>
            </a>
          </div>
        </div>
      </div>
    <nav class=" p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-xl font-bold">
                <img src="/logo.png" alt="Logo do grupo Norte auto peças" class="w-36">
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="/" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">INICIO</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">LOJAS</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">PRODUTOS</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">FORNECEDORES</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">SOBRE NÓS</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">NOVIDADES</a>
                <a href="#" class="h-12 py-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] flex justify-end font-semibold text-center">TRABALHE CONOSCO</a>
            </div>
            <div class="md:hidden">
                <button id="menu-button" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden ">
            <a href="/" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">INICIO</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">LOJAS</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">PRODUTOS</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">FORNECEDORES</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">SOBRE NÓS</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">NOVIDADES</a>
            <a href="#" class="block p-2 hover:border-b text-[#676664] cursor-pointer border-[#676664] justify-end font-semibold text-center">TRABALHE CONOSCO</a>
        </div>
    </nav>
  </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          @yield('content')
          @yield('modal')
        </div>
      </div>
    </main>
    <footer class="py-16 px-4 flex justify-center items-center lg:items-start bg-[#00041F] h-[1000px] lg:h-[600px]">
        @php
          $navItens = [
            [
               'id' => 1, 'text' => "Inicio", 'link' => "/"
            ],
            [
               'id' => 2, 'text' => "Loja", 'link' => "/lojas"
            ],
            [
               'id' => 3, 'text' => "Produtos", 'link' => "/Produtos"
            ],
            [
               'id' => 4, 'text' => "Fornecedores", 'link' => "/Fornecedores"
            ],
            [
               'id' => 5, 'text' => "Sobre Nós", 'link' => "/SobreNos"
            ],
            [
               'id' => 6, 'text' => "Novidades", 'link' => "/Novidades"
            ],
            [
               'id' => 7, 'text' => "Trabalhe Conosco", 'link' => "/TrabalheConosco"
            ],
          ]
        @endphp
        @php
        $contacts = [
              [
                'telephone' => "(92) 2129-1515",
                'email' => "vendas@norteautopecas.com.br"
              ],
            ]
        @endphp

        <div class="flex flex-col lg:flex-row lg:justify-around w-full items-center lg:items-start ">
          <div class="flex flex-col items-center lg:items-start">
            <img
              src="/imgs/logoBranca.png"
              alt="Logo do grupo norte auto peças na cor branca"
              class="w-[250px] lg:w-[300px] pb-8 flex flex-col justify-center lg:flex-row "
            />
            <p class="w-[300px] lg:w-[400px] text-white text-center lg:text-start mb-20 lg:mb-0">
              Somos uma empresa do ramo de auto peças focadas na comercialização de
              peças para linha pesada, estamos a 26 anos no mercado trazendo peças
              de qualidade para seu veiculo.
            </p>
          </div>
          <nav>
            <ul class="hidden lg:flex flex-col">
              <span class="font-bold text-white text-xl">Menu</span>
              @foreach($navItens as $navItem)
                <li
                  key={{$navItem['id']}}
                  class="duration-300 text-[#C3C3C3] cursor-pointer border-[#676664] flex text-[16px] font-light py-2"
                >
                  <a href={{$navItem['link']}}>{{$navItem['text']}}</a>
                </li>
              @endforeach
            </ul>
          </nav>
          <div>
            <div class="flex flex-col gap-y-7 items-center lg:items-start ">
              <span class="font-bold text-white text-xl">Contatos</span>
              <div class="flex items-center mb-2 text-white font-light">
                <ion-icon class="mr-2" name="call-outline"></ion-icon>
                <span>{{$contacts[0]['telephone']}}</span>
              </div>
              <div class="flex items-center text-white font-light">
                <ion-icon class="mr-2" name="mail-outline"></ion-icon>
                <span>{{$contacts[0]['email']}}</span>
              </div>
              <span class="font-bold text-white text-xl">Redes Sociais</span>
              <div>
                <div class="flex justify-between items-center gap-2 text-white">
                  <a
                    rel="stylesheet"
                    href="https://www.facebook.com/norteautopecas"
                    target="_blank"
                  >
                    <ion-icon class="text-white text-4xl" name="logo-facebook"></ion-icon>
                  </a>
                  <a
                    rel="stylesheet"
                    target="_blank"
                    href="https://www.instagram.com/norteautopecas_/"
                  >
                  <ion-icon class="text-white text-4xl" name="logo-instagram"></ion-icon>
                  </a>
                  <a
                    rel="stylesheet"
                    target="_blank"
                    href="https://www.linkedin.com/company/norte-auto-peças/mycompany/"
                  >
                    <ion-icon class="text-white text-4xl" name="logo-linkedin"></ion-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

    </footer>
    
    {{-- navBar --}}

    <script src="/js/navbar.js"></script>
    <script src="/js/cep.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 

    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>