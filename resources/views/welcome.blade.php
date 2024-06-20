@extends('layouts.main')

@section('title', 'Norte Auto Peças - Sempre a sua melhor escolha!!')

@section('content')
     <section id="carouselExampleInterval" class="carousel slide p-0" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="/imgs/slides/slideDesktop.png" class="d-block w-full" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/imgs/slides/slideDesktop.png" class="d-block w-full" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/imgs/slides/slideDesktop.png" class="d-block w-full" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </section>
                
     {{-- seção de nossas lojas --}}
        <section class="flex justify-around flex-col lg:flex-row items-center w-full py-20 container">
            <a href="/lojas">
            <img
                src="/imgs/brazil.png"
                alt="Mapa do brazil com pontos em que a loja esta carregada."
                class="sm:w-[625px] sm:h-[650px] "
            />
            </a>
            <div class="flex flex-col lg:w-2/6 justify-center gap-11 lg:items-start items-center">
            <div class="">
                <h2 class="text-[44px] font-semibold text-[#0E007C]">Nossas Lojas</h2>
                <div class="w-[180px] h-[6px] bg-[#ff0000]"></div>
                </div>
            <p class="text-lg font-semibold lg:text-start ">
                Estamos estabelecidos em 9 estados, facilitando a busca por nossa
                unidade mais próxima de você. Contamos com o estoque mais abrangente
                de peças automotivas, especialmente projetadas para caminhonetes,
                caminhões, carretas de todos os portes, ônibus, além de oferecermos
                lubrificantes e baterias de alta qualidade. Descubra a excelência em
                peças automotivas na Norte Auto Peças a sua fonte confiável para
                manter veículo em pleno funcionamento.
            </p>
            <a href="/lojas"
                class="p-2 bg-azul-logo hover:bg-azul-button text-white font-semibold rounded-xl lg:w-2/4 text-center btn btn-primary"
            >
                Conheça nossas lojas
            </a>
            </div>
        </section>

        {{-- seção SobreNós --}}

        <section class="flex items-center justify-center container flex-col">
            <div class="flex justify-around flex-col lg:flex-row items-center w-full">
                <div class="flex flex-col lg:w-2/6 justify-center gap-11 items-center pb-20">
                <div class="">
                    <h2 class="text-[44px] font-semibold text-[#0E007C]">Sobre Nós</h2>
                    <div class="w-[150px] h-[6px] bg-[#ff0000]"></div>
                </div>
                </div>
            </div>
            <div class="flex items-center flex-col lg:flex-row justify-between gap-8">
                <div class="flex flex-col ">
                <div class="lg:max-w-[600px]  flex items-center rounded-3xl border-1 border-[#9e9e9e] my-2 text-lg font-semibold">
                    <p class="p-3">
                    A Norte Auto Peças atua a mais de 29 anos no ramo de venda de
                    peças e pneus para veículos leves e Sua matriz está localizada na
                    cidade de Manaus no Amazonas. Hoje o grupo possui lojas em nove
                    estados, Amazonas, Acre, Amapá, Bahia, Pará, Rondônia, Roraima,
                    Maranhão e Minas Gerais, totalizando 34 lojas.
                    </p>
                </div>
                <div class="lg:max-w-[600px] flex items-center rounded-3xl border-1 border-[#9e9e9e] my-2 text-lg font-semibold">
                    <p class="p-3">
                    No início a empresa entendeu que esse era um ramo desafiador e com
                    muitas oportunidades na região amazônica. Com isso o fundador
                    direcionou seus esforços para atender as demandas e necessidades
                    dos seus clientes, com a venda de peças e serviços especializados,
                    dos mais variados fabricantes, sempre com confiabilidade e
                    atendimento de qualidade.
                    </p>
                </div>
                <div class="lg:max-w-[600px] flex items-center rounded-3xl border-1 border-[#9e9e9e] my-2 text-lg font-semibold">
                    <p class="p-3">
                    Decorridos mais de 29 anos, a Norte Auto Peças ocupa posição de
                    destaque nos mercados onde atua, reconhecida pelos clientes e
                    fornecedores como uma empresa confiável e inovadora, com
                    atendimento cortês e ágil.
                    </p>
                </div>
                </div>
                <img
                src="/imgs/AboutUsImage.png"
                alt="Imagem da norte auto peças, foto de frente da loja."
                />
            </div>
            </section>
            {{-- seção MVV --}}
            @php
            $Cards = [
                [
                    'id' => 1,
                    'title' => 'Missão',
                    'texto' => 'Na Norte Auto Peças, estamos comprometidos em ser a principal fonte de peças para linha pesada, oferecendo qualidade inigualável e atendimento excepcional para impulsionar a confiança e o desempenho dos nossos clientes.',
                    'imagem' => '/imgs/mvv/Icon-Missao.png'
                ],
                [
                    'id' => 2,
                    'title' => 'Visão',
                    'texto' => 'Nossa visão é ser reconhecida como a referência global em peças para linha pesada, elevando constantemente os padrões da indústria por meio de inovação contínua e parcerias sólidas, mantendo nossa posição como líderes do mercado.',
                    'imagem' => '/imgs/mvv/Icon-Visao.png'
                ],
                [
                    'id' => 3,
                    'title' => 'Valores',
                    'texto' => 'Nossos valores fundamentais são qualidade intransigente, conhecimento especializado, parcerias confiáveis e compromisso inabalável com nossos clientes e colaboradores, sustentando nosso papel como a escolha preferencial no mercado de peças para linha pesada.',
                    'imagem' => '/imgs/mvv/Icon-Valores.png'
                ]
            ];
        @endphp

        <div
            class="relative w-full lg:h-[600px] bg-cover bg-center h-[1000px]"
            style="background-image: url('/imgs/mvv/desktopMVV.png'); background-repeat: repeat-x; background-size: cover;"
            >
            <div class="absolute inset-0 flex flex-col items-center space-y-8 lg:flex-row justify-around px-8">
                @foreach ($Cards as $card)
                    <div class="flex flex-col items-center justify-around">
                        <img src={{ $card['imagem'] }} alt="{{ $card['title'] }}" class="pb-5" />
                        <h2 class="text-white font-bold text-xl pb-2">{{ $card['title'] }}</h2>
                        <p class="lg:w-96 text-white text-center">{{ $card['texto'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- seção o que trabalhamos --}}

        @php
            $Cards = [
                [
                    'id' => 1,
                    'title' => "Titulo1",
                    'texto' =>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.",
                    'imagem' => "/imgs/comOqueTrabalhamos/PecaCard1.png",
                ],
                [
                    'id' => 2,
                    'title' => "Titulo2",
                    'texto' =>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.",
                    'imagem' => "/imgs/comOqueTrabalhamos/PecaCard2.png",
                ],
                [
                    'id' => 3,
                    'title' => "Titulo3",
                    'texto' =>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.",
                    'imagem' => "/imgs/comOqueTrabalhamos/PecaCard3.png",
                ],
                [
                    'id' => 4,
                    'title' => "Titulo4",
                    'texto' =>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.",
                    'imagem' => "/imgs/comOqueTrabalhamos/PecaCard4.png",
                ],
            ]
        @endphp

            <div class="flex items-center justify-center sm:w-[1940px] w-[325px] flex-col container">
                <div class="flex flex-col lg:w-2/6 justify-center gap-11 items-center pb-20">
                    <div class="">
                        <h2 class="text-[44px] font-semibold text-[#0E007C]">Com o que trabalhamos?</h2>
                        <div class="w-[150px] h-[6px] bg-[#ff0000]"></div>
                    </div>
                </div>
                <div class="grid grid-row lg:grid-cols-2 gap-7 w-full justify-items-center">
                @foreach ($Cards as $card)
                    <div
                    key={{$card['id']}}
                    class=" flex justify-center lg:items-center h-72 lg:w-[500px] w-[300px] py-4 px-7 bg-[#F4F6FA] rounded-lg	"
                    >
                    <div class="flex flex-col w-full">
                        <h1 class="text-2xl font-bold">{{$card['title']}}</h1>
                        <p class="w-52 text-[#333333]">{{$card['texto']}}</p>
                    </div>
                    <div class="max-w-60 absolute">
                        <div class="relative -bottom-24 left-[3.2rem] lg:-bottom-14 lg:left-[9.2rem]">
                        <img
                            src="{{$card['imagem']}}"
                            alt="{{$card['title']}}"
                            class="mix-blend-multiply"
                        />
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
    @endsection
            

            
        
        @section('modal')
        @include('components.modal')
        @endsection