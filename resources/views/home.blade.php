@extends('layouts.app')

@section('title', 'Beranda | Infratech Borneo Network')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-night-900/95 via-night-900/80 to-night-900/60 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-brand-500/10 via-transparent to-transparent z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-accent-500/5 via-transparent to-transparent z-10"></div>
        <img alt="" class="w-full h-full object-cover scale-105 animate-pulse-slow" src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop" style="animation: pulse-slow 20s ease-in-out infinite alternate;">
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
        <div class="max-w-3xl">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/30 bg-brand-500/5 text-brand-400 text-xs font-semibold tracking-wider uppercase mb-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-500 animate-pulse"></span>
                    Solusi IT Profesional di Kalimantan
                </span>
            </div>
            <h1 class="reveal reveal-delay-1 text-5xl sm:text-6xl lg:text-7xl font-heading font-extrabold text-white leading-[1.1] mb-6">
                Mitra Infrastruktur IT
                <span class="text-gradient">Terpercaya untuk Bisnis Anda</span>
            </h1>
            <p class="reveal reveal-delay-2 text-lg sm:text-xl text-night-300 max-w-xl mb-10 leading-relaxed">
                Spesialis instalasi jaringan, pengembangan website, pengadaan perangkat IT, dan managed service untuk mendukung transformasi digital perusahaan Anda di Kalimantan.
            </p>
            <div class="reveal reveal-delay-3 flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="group relative overflow-hidden px-8 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-semibold text-base shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                    <span class="relative z-10 flex items-center gap-2">
            Konsultasi Gratis <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </span>
                    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                </a>
                <a href="{{ route('portfolio') }}" class="group px-8 py-4 rounded-xl border border-night-600 text-night-200 font-semibold text-base hover:bg-white/5 hover:border-brand-500/50 transition-all duration-300">
                    Lihat Portofolio
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-night-500">
        <span class="text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-5 h-8 rounded-full border-2 border-night-600 flex justify-center pt-1.5">
            <div class="w-1 h-2 rounded-full bg-brand-500 animate-bounce"></div>
        </div>
    </div>
</section>

{{-- Stats Bar --}}
<section class="relative z-10 -mt-16 mb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-counters class="grid grid-cols-2 md:grid-cols-4 gap-px bg-night-800 rounded-2xl overflow-hidden border border-night-800">
            @foreach([
                ['count' => 120, 'suffix' => '+', 'label' => 'Klien Terpercaya', 'icon' => 'group'],
                ['count' => 350, 'suffix' => '+', 'label' => 'Proyek Terselesaikan', 'icon' => 'checklist'],
                ['count' => 15, 'suffix' => '+', 'label' => 'Tenaga Ahli', 'icon' => 'engineering'],
                ['count' => 98, 'suffix' => '%', 'label' => 'Kepuasan Klien', 'icon' => 'star'],
            ] as $stat)
            <div class="bg-night-900/90 backdrop-blur-sm py-8 px-6 text-center group hover:bg-night-850 transition-colors duration-300">
                <span class="material-symbols-outlined text-brand-500 text-3xl mb-3 block">{{ $stat['icon'] }}</span>
                <div class="text-3xl sm:text-4xl font-heading font-extrabold text-white mb-1">
                    <span data-count="{{ $stat['count'] }}" data-suffix="{{ $stat['suffix'] }}">0{{ $stat['suffix'] }}</span>
                </div>
                <div class="text-xs text-night-400 uppercase tracking-wider font-semibold">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Services Bento Section --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-xl">
                <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block reveal">Keahlian Kami</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-4 reveal reveal-delay-1">
                    Layanan IT Terpadu
                </h2>
                <p class="text-night-400 text-lg reveal reveal-delay-2">
                    Solusi teknologi informasi lengkap untuk mendukung produktivitas dan pertumbuhan bisnis Anda.
                </p>
            </div>
            <a href="{{ route('services') }}" class="reveal reveal-delay-3 flex items-center gap-2 text-brand-400 font-semibold hover:text-brand-300 transition-colors shrink-0">
                Semua Layanan <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            {{-- Jaringan --}}
            <div class="md:col-span-7 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-brand-500/30 transition-all duration-500 reveal">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-brand-400 text-3xl">settings_ethernet</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Instalasi & Manajemen Jaringan</h3>
                    <p class="text-night-400 max-w-md mb-6">Kami menyediakan instalasi dan pengelolaan jaringan yang andal untuk memastikan konektivitas yang optimal untuk perusahaan Anda.</p>
                    <div class="flex items-center gap-4 text-sm">
                        <span class="flex items-center gap-1.5 text-night-300"><span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span> Fiber Optic</span>
                        <span class="flex items-center gap-1.5 text-night-300"><span class="w-1.5 h-1.5 rounded-full bg-accent-500"></span> Wireless</span>
                        <span class="flex items-center gap-1.5 text-night-300"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> SD-WAN</span>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 opacity-[0.04] group-hover:opacity-[0.08] transition-opacity duration-500">
                    <span class="material-symbols-outlined text-[12rem]">lan</span>
                </div>
            </div>

            {{-- Website --}}
            <div class="md:col-span-5 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-accent-500/30 transition-all duration-500 reveal reveal-delay-1">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-accent-500/10 border border-accent-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-accent-400 text-3xl">code</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Pengembangan Website</h3>
                    <p class="text-night-400 mb-6">Tim kami siap membantu Anda dalam merancang dan mengembangkan website yang menarik dan fungsional untuk bisnis Anda.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-full bg-night-700/50 text-night-300 text-xs font-medium border border-night-600">Company Profile</span>
                        <span class="px-3 py-1 rounded-full bg-night-700/50 text-night-300 text-xs font-medium border border-night-600">E-Commerce</span>
                        <span class="px-3 py-1 rounded-full bg-night-700/50 text-night-300 text-xs font-medium border border-night-600">Web App</span>
                    </div>
                </div>
            </div>

            {{-- Pengadaan Perangkat IT --}}
            <div class="md:col-span-5 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-emerald-500/30 transition-all duration-500 reveal reveal-delay-2">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-emerald-400 text-3xl">computer</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Pengadaan Perangkat IT</h3>
                    <p class="text-night-400">Kami menyediakan berbagai perangkat IT berkualitas tinggi sesuai kebutuhan bisnis Anda dengan harga kompetitif.</p>
                </div>
            </div>

            {{-- Maintenance --}}
            <div class="md:col-span-7 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-amber-500/30 transition-all duration-500 reveal reveal-delay-3">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-amber-400 text-3xl">build</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Maintenance Perangkat IT</h3>
                    <p class="text-night-400 max-w-lg">Kami menawarkan layanan pemeliharaan perangkat IT untuk menjamin kinerja yang optimal dan mengurangi risiko gangguan operasional bisnis Anda.</p>
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 opacity-[0.04] group-hover:opacity-[0.08] transition-opacity duration-500">
                    <span class="material-symbols-outlined text-[12rem]">settings</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Layanan Unggulan Lainnya --}}
<section class="py-24 lg:py-32 bg-night-950/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block reveal">Layanan Lainnya</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-4 reveal reveal-delay-1">
                Solusi Lengkap untuk Bisnis Anda
            </h2>
            <p class="text-night-400 text-lg max-w-2xl mx-auto reveal reveal-delay-2">
                Dua layanan unggulan lainnya yang melengkapi ekosistem solusi IT kami.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Managed Service --}}
            <div class="group bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 p-10 hover:border-brand-500/30 hover:-translate-y-1 transition-all duration-500 reveal">
                <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined text-brand-400 text-3xl">support_agent</span>
                </div>
                <h3 class="text-2xl font-heading font-bold text-white mb-3">Managed Service</h3>
                <p class="text-night-400 leading-relaxed">Layanan managed service kami menjamin bahwa sistem TI Anda berjalan lancar tanpa gangguan pada aktivitas sehari-hari. Tim kami akan memonitor, mengelola, dan merawat infrastruktur IT Anda secara proaktif.</p>
            </div>

            {{-- Konsultasi Teknologi --}}
            <div class="group bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 p-10 hover:border-accent-500/30 hover:-translate-y-1 transition-all duration-500 reveal reveal-delay-1">
                <div class="w-14 h-14 rounded-xl bg-accent-500/10 border border-accent-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined text-accent-400 text-3xl">lightbulb</span>
                </div>
                <h3 class="text-2xl font-heading font-bold text-white mb-3">Konsultasi Teknologi</h3>
                <p class="text-night-400 leading-relaxed">Kami menyediakan konsultasi mengenai teknologi yang tepat agar bisnis Anda tetap kompetitif dan berkembang. Dari pemilihan infrastruktur hingga strategi transformasi digital.</p>
            </div>
        </div>
    </div>
</section>

{{-- Featured Projects --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block reveal">Portofolio</span>
            <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-4 reveal reveal-delay-1">
                        Proyek Terkini
                    </h2>
                    <p class="text-night-400 text-lg max-w-xl reveal reveal-delay-2">
                        Berbagai proyek IT yang telah kami kerjakan untuk klien di berbagai sektor di Kalimantan.
                    </p>
                </div>
                <a href="{{ route('portfolio') }}" class="reveal reveal-delay-3 flex items-center gap-2 text-brand-400 font-semibold hover:text-brand-300 transition-colors shrink-0">
                    Lihat Semua <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            @foreach([
                [
                    'src' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2034&auto=format&fit=crop',
                    'tag' => 'Infrastruktur Jaringan',
                    'title' => 'Fiber Optic Backbone IKN',
                    'desc' => 'Instalasi jaringan fiber optik backbone untuk mendukung konektivitas kawasan Ibu Kota Nusantara.',
                    'colspan' => 'md:col-span-8',
                    'h' => 'h-[480px]',
                ],
                [
                    'src' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop',
                    'tag' => 'Pengembangan Website',
                    'title' => 'Portal Digital Pemerintahan',
                    'desc' => 'Pengembangan website portal layanan publik terintegrasi untuk pemerintah daerah.',
                    'colspan' => 'md:col-span-4',
                    'h' => 'h-[480px]',
                ],
                [
                    'src' => 'https://images.unsplash.com/photo-1537498425277-c283d32ef9db?q=80&w=2078&auto=format&fit=crop',
                    'tag' => 'Managed Service',
                    'title' => 'IT Infrastructure BUMN',
                    'colspan' => 'md:col-span-4',
                    'h' => 'h-[340px]',
                ],
                [
                    'src' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop',
                    'tag' => 'Konsultasi IT',
                    'title' => 'Transformasi Digital Perbankan',
                    'colspan' => 'md:col-span-4',
                    'h' => 'h-[340px]',
                ],
                [
                    'src' => 'https://images.unsplash.com/photo-1563770551469-10d0e8c3a164?q=80&w=2070&auto=format&fit=crop',
                    'tag' => 'Pengadaan Perangkat',
                    'title' => 'Sistem CCTV Kota Balikpapan',
                    'colspan' => 'md:col-span-4',
                    'h' => 'h-[340px]',
                ],
            ] as $project)
            <div class="group relative overflow-hidden rounded-2xl {{ $project['colspan'] }} {{ $project['h'] ?? 'h-[340px]' }} cursor-pointer reveal">
                <img src="{{ $project['src'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-night-900/90 via-night-900/30 to-transparent"></div>
                <div class="absolute inset-0 bg-brand-500/0 group-hover:bg-brand-500/10 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-8">
                    <span class="inline-block px-3 py-1 rounded-full bg-brand-500/20 border border-brand-500/30 text-brand-400 text-xs font-semibold tracking-wider uppercase mb-3">{{ $project['tag'] }}</span>
                    <h3 class="text-xl lg:text-2xl font-heading font-bold text-white">{{ $project['title'] }}</h3>
                    @if(isset($project['desc']))
                    <p class="text-night-400 text-sm mt-2 max-w-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">{{ $project['desc'] }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-night-800 to-night-900 border border-night-700/50 p-10 sm:p-16 lg:p-20 text-center reveal">
            <div class="absolute top-0 right-0 w-72 h-72 bg-brand-500/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent-500/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>

            <div class="relative z-10 max-w-2xl mx-auto">
                <span class="material-symbols-outlined text-brand-500 text-5xl mb-6 block">handshake</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-6">
                    Siap Tingkatkan Infrastruktur IT Anda?
                </h2>
                <p class="text-night-400 text-lg mb-10 max-w-lg mx-auto">
                    Hubungi tim ahli kami untuk konsultasi gratis dan temukan solusi IT yang tepat untuk bisnis Anda.
                </p>
                <a href="{{ route('contact') }}" class="group relative inline-flex overflow-hidden px-10 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-bold text-base shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                    <span class="relative z-10 flex items-center gap-2">
                        Konsultasi Gratis <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </span>
                    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
