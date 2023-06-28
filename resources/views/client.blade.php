@extends('layouts.apps')
@section('title', 'Client — Rustmatic')
@section('content')
    <div class="py-12 mt-[80px]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-4xl font-semibold">Welcome {{ auth()->user()->name }} 👋</h2>
                </div>
            </div>
        </div>
    </div>
@endsection