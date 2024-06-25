@extends('layouts.main')
@include('components.mapa')

@section('title', 'Nossas Lojas - Mais de 30 lojas em AM - AP - AC - PA - RO - RR - MG - BA - MA')

@section('content')

    <head>
        <link rel="stylesheet" href="/css/mapSvg.css">
    </head>
    <main class="container">
        <div>@yield('mapSvg')</div>
    </main>
    
@endsection
