@extends('layouts.app')

@section('title', 'Selamat Datang | Infratech Borneo Network')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="text-center max-w-2xl">
        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-brand-500 to-amber-400 flex items-center justify-center mx-auto mb-8 shadow-2xl shadow-brand-500/25">
            <span class="material-symbols-outlined text-white text-5xl font-bold">rocket_launch</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-heading font-extrabold text-white mb-4">Selamat Datang di Infratech Borneo</h1>
        <p class="text-lg text-night-400 mb-8">Pionir solusi infrastruktur dan teknologi terdepan di Kalimantan.</p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('home') }}" class="px-8 py-3.5 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                Jelajahi Situs
            </a>
        </div>
    </div>
</div>
@endsection
