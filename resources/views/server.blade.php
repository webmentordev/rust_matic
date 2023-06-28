@extends('layouts.apps')
@section('title', 'Server — Rustmatic')
@section('content')
    <section class="py-12 bg-cover h-screen bg-center relative flex items-center justify-center" style="background-image: url({{ asset('assets/header.webp') }})">
        <div class="absolute bg-black/40 backdrop-blur w-full h-full top-0 left-0"></div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <h1 class="text-[80px] text-white 460px:text-4xl">RUSTMATIC Servers</h1>
            <div class="p-6 bg-gray-100 rounded-lg max-w-lg m-auto">
                <img class="rounded-lg" src="{{ $server['attributes']['details']['rust_headerimage'] }}" alt="{{ $server['attributes']['name'] }} Image">
                <div class="p-3 py-4">
                    <h2 class="font-semibold">{{ $server['attributes']['name'] }}</h2>
                </div>
                <div class="bg-gray-300 overflow-hidden relative mb-2 flex items-center justify-center h-[33px] rounded-lg w-full">
                    <div class="absolute top-0 h-full left-0 bg-green-500" style="width: {{ ($server['attributes']['players'] / $server['attributes']['maxPlayers']) * 100 }}%"></div>
                    <p class="relative text-sm font-semibold">{{ $server['attributes']['players'] }}/{{ $server['attributes']['maxPlayers'] }}</p>
                </div>
                <a class="py-2 rounded-md p-4 w-full text-center bg-main text-white title inline-block" href="steam://connect/{{ $server['attributes']['ip'] }}:{{ $server['attributes']['port'] }}">Connect</a>
            </div>
        </div>
    </section>
@endsection