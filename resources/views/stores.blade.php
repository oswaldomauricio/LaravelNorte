{{-- resources/views/lojas/show.blade.php --}}
@extends('layouts.main')
@include('components.mapa')

@section('title', 'Norte Auto Peças - ' . $estado)

@section('content')

    <head>
        <link rel="stylesheet" href="/css/mapSvg.css">
    </head>
    <main class="container mx-auto p-4 flex flex-col lg:flex-row gap-4">
        <div class="w-full flex justify-center sm:justify-between">
            @yield('mapSvg')
        </div>
        <div class="w-full lg:w-2/3">
            <ul>
                @if (count($lojas) > 0)
                    <div>
                        <h2 class="text-[44px] font-semibold text-[#0E007C]">{{ $estado }}</h2>
                        <div class="w-[80px] h-[6px] bg-[#ff0000]"></div>
                        <p class="py-4">Selecione um estado:</p>
                    </div>
                    @foreach ($lojas as $loja)
                        <li class="mb-6 card">
                            <div class="py-4 card-body">
                                <div class="">
                                    <div class="justify-center lg:justify-between">
                                        <h2 class="text-xl font-bold text-gray-800 card-title text-center">
                                            {{ $loja->nomeLoja }}
                                        </h2>
                                        <p class="text-gray-600 mt-2 text-center">
                                            <a class="card-subtitle mb-2 text-muted"
                                                href="https://www.google.com/maps/search/?api=1&query={{ urlencode($loja->enderecoLoja) }}"
                                                target="_blank" rel="noopener noreferrer">
                                                {{ $loja->enderecoLoja }}
                                            </a>
                                        </p>
                                        <a href="mailto:{{ $loja->email }}" class="text-blue-500 mt-2 flex justify-center">
                                            {{ $loja->email }}
                                        </a>
                                        <div class="flex items-center mt-2 justify-center w-max-[300px]">
                                            @if ($loja->whatsapp)
                                                <a href="https://wa.me/{{ $loja->whatsapp }}"
                                                    class="flex items-center text-green-500 card-link">
                                                    <ion-icon class="w-5 h-5 mr-1 fas fa-whatsapp"
                                                        name="logo-whatsapp"></ion-icon>
                                                    {{ $loja->whatsapp }}
                                                </a>
                                            @endif
                                            @if ($loja->telefone)
                                                <a href="tel:+55{{ $loja->telefone }}"
                                                    class="flex items-center text-blue-500 card-link">
                                                    <ion-icon class="w-5 h-5 mr-1 fas fa-whatsapp"
                                                        name="call-outline"></ion-icon>
                                                    {{ $loja->telefone }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="flex flex-wrap justify-center items-center w-max-[300px]">
                                            @if ($loja->segmentacao)
                                                <span
                                                    class="inline-block text-white rounded-full px-3 py-1 text-sm font-semibold mt-4 mr-8 bg-red-600">
                                                    {{ $loja->segmentacao }}
                                                </span>
                                            @endif
                                            @if ($loja->segmentacao2)
                                                <span
                                                    class="inline-block text-white rounded-full px-3 py-1 text-sm font-semibold mt-4 mr-8 bg-blue-600">
                                                    {{ $loja->segmentacao2 }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <div>
                        <h2 class="text-[44px] font-semibold text-[#0E007C]">{{ $estado }}</h2>
                        <div class="w-[80px] h-[6px] bg-[#ff0000]"></div>
                        <p class="py-4">Sem loja no estado selecionado:</p>
                    </div>
                @endif

            </ul>
        </div>
    </main>

@endsection
