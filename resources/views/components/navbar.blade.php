<nav class="w-full fixed top-0 left-0 z-50 shadow-sm bg-white border-b border-gray-200">
    <div class="max-w-7xl m-auto px-4 py-2 flex justify-between items-center">
        <a class="flex items-center" href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" width="45" alt="Rustmatic Logo">
            <h2 class="title ml-3 text-lg">RUST<span class="text-main title">MATIC</span></h2>
        </a>
        <ul class="flex items-center font-semibold 870px:hidden">
            <a class="mx-6" href="{{ route('home') }}">Home</a>
            <a class="mx-6" href="{{ route('server') }}">Servers</a>
            <a class="mx-6" href="https://rustmatic.tip4serv.com/" target="_blank" rel="nofollow">Store</a>
            <a class="mx-6" href="https://discord.gg/aMA883bgED" target="_blank" rel="nofollow">Discord</a>
            @auth
                @if (auth()->user()->is_admin == 1)
                    <a class="mx-6" href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a class="mx-6" href="{{ route('client') }}">Client</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="py-2 px-6 bg-black text-white rounded-sm">Logout</button>
                </form>
            @endauth
            @guest
                <a class="px-6 border-r border-gray-200" href="{{ route('login') }}">Login</a>
                <a class="mx-6" href="{{ route('register') }}">Register</a>
            @endguest
        </ul>

        <div class="hidden 870px:block" x-data="{ open: false }">
            <img x-on:click="open = true" src="https://api.iconify.design/material-symbols:format-align-right-rounded.svg?color=%23000000" width="30" alt="Align Logo">
            <div class="bg-white flex items-center justify-center bg-opacity-80 backdrop-blur-md fixed top-0 left-0 w-full h-full" x-show="open" x-cloak x-on:click.self="open = false">
                <ul class="flex flex-col items-center text-center font-semibold">
                    <a class="mb-2" href="{{ route('home') }}">Home</a>
                    <a class="mb-2" href="{{ route('server') }}">Servers</a>
                    <a class="mb-2" href="https://rustmatic.tip4serv.com/" target="_blank" rel="nofollow">Store</a>
                    <a class="mb-2" href="https://discord.gg/aMA883bgED" target="_blank" rel="nofollow">Discord</a>
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <a class="mb-2" href="{{ route('dashboard') }}">Dashboard</a>
                        @else
                            <a class="mb-2" href="{{ route('client') }}">Client</a>
                        @endif
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="py-2 px-6 bg-black text-white rounded-sm">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <a class="mb-2" href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>