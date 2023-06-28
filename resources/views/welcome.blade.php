@extends('layouts.apps')
@section('content')
    <div class="py-12 bg-cover bg-center h-screen relative flex items-center justify-center" style="background-image: url({{ asset('assets/header.webp') }})">
        <div class="absolute bg-black/40 backdrop-blur w-full h-full top-0 left-0"></div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <img src="{{ asset('assets/logo.png') }}" width="200" class="m-auto mb-6" alt="Rustmatic Logo">
            <h1 class="text-[80px] text-white leading-[75px] mb-6 460px:text-4xl">Welcome to RUSTMATIC</h1>
            <ul class="flex items-center m-auto justify-center link 460px:flex-col 460px:items-center">
                <a class="mr-3 mb-2 460px:mr-0 hover:bg-white hover:text-black transition-all py-3 px-6 rounded-sm bg-black text-white" href="https://discord.gg/aMA883bgED" target="_blank" rel="nofollow">Discord</a>
                <a class="mr-3 mb-2 460px:mr-0 hover:bg-white hover:text-black transition-all py-3 px-6 rounded-sm bg-black text-white" href="steam://connect/104.129.133.179:28021" target="_blank" rel="nofollow">Connect</a>
                <a class="py-3 mb-2 460px:mr-0 hover:bg-white hover:text-black transition-all px-6 rounded-sm bg-black text-white" href="https://rustmatic.tip4serv.com/" target="_blank" rel="nofollow">Store</a>
            </ul>
        </div>
    </div>
@endsection