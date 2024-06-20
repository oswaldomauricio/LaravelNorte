@extends('errors::layout')
@section('code')

@section('title', 'Norte Auto Peças - Forbidden')

<section class="container ">
    <div class=" h-[600px] flex justify-center items-center">
        <h1 class="font-bold text-5xl text-[red]">@section('message', __($exception->getMessage() ?: 'Forbidden'))</h1>
    </div>
</section>
@endsection
