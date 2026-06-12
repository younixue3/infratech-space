@extends('layouts.app')

@section('title', 'Tentang Kami | Infratech Borneo Network')

@section('content')
{{-- Hero --}}
<section class="relative min-h-[60vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-night-900/95 via-night-900/80 to-night-900/60 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-brand-500/10 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
        <div class="max-w-2xl">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/30 bg-brand-500/5 text-brand-400 text-xs font-semibold tracking-wider uppercase mb-6">
                    Tentang Kami
                </span>
            </div>
            <h1 class="reveal reveal-delay-1 text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white leading-[1.1] mb-6">
                Mitra Teknologi untuk
                <span class="text-gradient">Transformasi Digital Borneo</span>
            </h1>
            <p class="reveal reveal-delay-2 text-lg text-night-300 max-w-xl leading-relaxed">
                Berkomitmen menghadirkan solusi IT yang andal dan inovatif untuk mendukung kemajuan bisnis dan institusi di Kalimantan.
            </p>
        </div>
    </div>
</section>

{{-- Vision & Mission --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block">Nilai Kami</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white">Visi & Misi</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            {{-- Vision --}}
            <div class="md:col-span-7 relative group bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 reveal">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-brand-400 text-3xl">visibility</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-4">Visi Kami</h3>
                    <p class="text-night-400 text-lg leading-relaxed max-w-xl">
                        Menjadi mitra teknologi informasi terdepan di Kalimantan, mendorong transformasi digital dan konektivitas untuk menciptakan ekosistem bisnis yang lebih maju dan terkoneksi.
                    </p>
                </div>
                <div class="absolute -bottom-8 -right-8 w-56 h-56 opacity-[0.04]">
                    <span class="material-symbols-outlined text-[14rem]">hub</span>
                </div>
            </div>

            {{-- Misi 1 --}}
            <div class="md:col-span-5 bg-night-800/50 rounded-2xl border border-night-700/50 p-8 lg:p-10 hover:border-brand-500/20 transition-all duration-300 reveal reveal-delay-1">
                <div class="w-12 h-12 rounded-xl bg-accent-500/10 border border-accent-500/20 flex items-center justify-center mb-5">
                    <span class="material-symbols-outlined text-accent-400 text-2xl">network_intelligence</span>
                </div>
                <h4 class="text-xl font-heading font-bold text-white mb-3">Infrastruktur Andal</h4>
                <p class="text-night-400 leading-relaxed">Menyediakan infrastruktur jaringan dan sistem IT yang stabil, aman, dan berkinerja tinggi untuk mendukung operasional bisnis.</p>
            </div>

            {{-- Misi 2 --}}
            <div class="md:col-span-5 bg-night-800/50 rounded-2xl border border-night-700/50 p-8 lg:p-10 hover:border-emerald-500/20 transition-all duration-300 reveal reveal-delay-2">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center mb-5">
                    <span class="material-symbols-outlined text-emerald-400 text-2xl">devices</span>
                </div>
                <h4 class="text-xl font-heading font-bold text-white mb-3">Solusi Digital</h4>
                <p class="text-night-400 leading-relaxed">Mengembangkan solusi website dan aplikasi yang inovatif untuk membantu bisnis berkembang di era digital.</p>
            </div>

            {{-- Misi 3 with image --}}
            <div class="md:col-span-7 bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden reveal reveal-delay-3">
                <div class="flex flex-col md:flex-row h-full">
                    <div class="p-8 lg:p-10 flex-1">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center mb-5">
                            <span class="material-symbols-outlined text-amber-400 text-2xl">support</span>
                        </div>
                        <h4 class="text-xl font-heading font-bold text-white mb-3">Layanan Terpadu</h4>
                        <p class="text-night-400 leading-relaxed">Memberikan layanan maintenance, managed service, dan konsultasi teknologi yang responsif dan profesional untuk kepuasan klien.</p>
                    </div>
                    <div class="md:w-56 lg:w-72 h-48 md:h-auto shrink-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070&auto=format&fit=crop" alt="IT Team" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Core Values --}}
<section class="py-24 lg:py-32 bg-night-950/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block">Budaya Kami</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white">Core Values</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['icon' => 'verified', 'title' => 'Integritas', 'desc' => 'Komitmen pada kejujuran dan etika dalam setiap aspek pekerjaan kami.'],
                ['icon' => 'lightbulb', 'title' => 'Inovasi', 'desc' => 'Menerapkan teknologi dan metode terkini untuk hasil terbaik.'],
                ['icon' => 'handshake', 'title' => 'Kolaborasi', 'desc' => 'Bekerja bersama mitra dan klien untuk solusi yang tepat.'],
                ['icon' => 'trending_up', 'title' => 'Keunggulan', 'desc' => 'Standar kualitas tertinggi dalam setiap layanan yang kami berikan.'],
            ] as $value)
            <div class="bg-night-800/50 rounded-2xl border border-night-700/50 p-8 text-center hover:border-brand-500/20 hover:-translate-y-1 transition-all duration-300 reveal">
                <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-brand-400 text-3xl">{{ $value['icon'] }}</span>
                </div>
                <h4 class="text-lg font-heading font-bold text-white mb-3">{{ $value['title'] }}</h4>
                <p class="text-night-400 text-sm leading-relaxed">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Timeline --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="lg:w-1/3 reveal">
                <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block">Perjalanan Kami</span>
                <h2 class="text-3xl sm:text-4xl font-heading font-bold text-white mb-4">Sejarah Infratech Borneo</h2>
                <p class="text-night-400 leading-relaxed">Dari sebuah visi sederhana menjadi mitra IT terpercaya di Kalimantan Timur dan sekitarnya.</p>
            </div>
            <div class="lg:w-2/3 space-y-0">
                @foreach([
                    ['year' => '2018', 'title' => 'Pendirian Perusahaan', 'desc' => 'Infratech Borneo resmi didirikan di Balikpapan dengan fokus awal pada penyediaan jasa instalasi jaringan dan pengadaan perangkat IT untuk sektor korporasi.'],
                    ['year' => '2020', 'title' => 'Ekspansi Layanan', 'desc' => 'Memperluas layanan ke pengembangan website dan aplikasi web, melayani berbagai klien dari pemerintahan dan swasta di Kalimantan.'],
                    ['year' => '2023', 'title' => 'Mitra IT IKN', 'desc' => 'Terpilih sebagai mitra penyedia infrastruktur IT dan managed service untuk kawasan Ibu Kota Nusantara.'],
                    ['year' => '2024', 'title' => 'Pemain Utama IT Regional', 'desc' => 'Mencapai 120+ klien terpercaya dan diakui sebagai penyedia solusi IT terkemuka di Kalimantan.'],
                ] as $milestone)
                <div class="relative pl-10 pb-12 group reveal">
                    <div class="absolute left-[17px] top-10 bottom-0 w-px bg-night-700 group-last:hidden"></div>
                    <div class="absolute left-0 top-1 w-9 h-9 rounded-full border-2 border-brand-500 bg-night-900 flex items-center justify-center text-brand-400 text-xs font-bold z-10 group-hover:border-brand-400 group-hover:bg-brand-500/10 transition-all duration-300">
                        {{ $milestone['year'] }}
                    </div>
                    <div class="bg-night-800/50 rounded-xl border border-night-700/50 p-6 lg:p-8 ml-4 hover:border-brand-500/20 transition-all duration-300">
                        <h4 class="text-xl font-heading font-bold text-white mb-2">{{ $milestone['title'] }}</h4>
                        <p class="text-night-400 leading-relaxed">{{ $milestone['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-16 bg-gradient-to-r from-brand-500/5 via-night-900 to-accent-500/5 border-y border-night-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-counters class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['count' => 120, 'suffix' => '+', 'label' => 'Klien Terpercaya'],
                ['count' => 350, 'suffix' => '+', 'label' => 'Proyek Selesai'],
                ['count' => 15, 'suffix' => '+', 'label' => 'Tenaga Ahli'],
                ['count' => 7, 'suffix' => '+', 'label' => 'Tahun Pengalaman'],
            ] as $stat)
            <div class="reveal">
                <div class="text-4xl sm:text-5xl font-heading font-extrabold text-white mb-2">
                    <span data-count="{{ $stat['count'] }}" data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                </div>
                <div class="text-sm text-night-400 uppercase tracking-wider font-semibold">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-night-800 to-night-900 border border-night-700/50 p-10 sm:p-16 lg:p-20 text-center reveal">
            <div class="absolute top-0 right-0 w-72 h-72 bg-brand-500/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent-500/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-6">
                    Siap Bekerja Sama dengan Kami?
                </h2>
                <p class="text-night-400 text-lg mb-10 max-w-lg mx-auto">
                    Konsultasikan kebutuhan IT Anda dengan tim kami dan temukan solusi terbaik untuk bisnis Anda.
                </p>
                <a href="{{ route('contact') }}" class="group relative inline-flex overflow-hidden px-10 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-bold shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                    <span class="relative z-10 flex items-center gap-2">
                        Hubungi Kami <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </span>
                    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
