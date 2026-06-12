@extends('layouts.app')

@section('title', 'Portofolio | Infratech Borneo Network')

@section('content')
{{-- Hero --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-night-900/95 via-night-900/80 to-night-900/60 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-brand-500/10 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
        <div class="max-w-3xl">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/30 bg-brand-500/5 text-brand-400 text-xs font-semibold tracking-wider uppercase mb-6">
                    Portofolio
                </span>
            </div>
            <h1 class="reveal reveal-delay-1 text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white leading-[1.1] mb-6">
                Proyek IT yang Telah
                <span class="text-gradient">Kami Kerjakan</span>
            </h1>
            <p class="reveal reveal-delay-2 text-lg text-night-300 max-w-2xl leading-relaxed">
                Berbagai proyek infrastruktur IT, pengembangan website, dan managed service yang telah kami selesaikan untuk klien di berbagai sektor.
            </p>
        </div>
    </div>
</section>

{{-- Filters --}}
<section class="sticky top-20 z-30 bg-night-900/90 backdrop-blur-md border-b border-night-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex gap-2 py-4 overflow-x-auto scrollbar-none" id="filter-bar">
            @foreach(['Semua Proyek', 'Infrastruktur Jaringan', 'Pengembangan Website', 'Managed Service', 'Konsultasi IT', 'Pengadaan Perangkat'] as $i => $filter)
            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium whitespace-nowrap transition-all duration-300 {{ $i === 0 ? 'bg-brand-500 text-white' : 'text-night-400 hover:text-white hover:bg-night-800' }}">
                {{ $filter }}
            </button>
            @endforeach
        </div>
    </div>
</section>

{{-- Project Grid --}}
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            @php
                $projects = [
                    ['tag' => 'Infrastruktur Jaringan', 'title' => 'Fiber Optic Backbone IKN', 'desc' => 'Instalasi jaringan fiber optik backbone sepanjang 12 km untuk mendukung konektivitas kawasan Ibu Kota Nusantara.', 'colspan' => 'md:col-span-8', 'h' => 'h-[500px]', 'src' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2034&auto=format&fit=crop'],
                    ['tag' => 'Pengembangan Website', 'title' => 'Portal Digital Pemerintahan', 'desc' => 'Pengembangan website portal layanan publik terintegrasi untuk pemerintah daerah dengan fitur pengaduan, informasi, dan dokumen digital.', 'colspan' => 'md:col-span-4', 'h' => 'h-[500px]', 'src' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop'],
                    ['tag' => 'Managed Service', 'title' => 'IT Infrastructure BUMN', 'colspan' => 'md:col-span-4', 'h' => 'h-[350px]', 'src' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2034&auto=format&fit=crop'],
                    ['tag' => 'Konsultasi IT', 'title' => 'Transformasi Digital Perbankan', 'colspan' => 'md:col-span-4', 'h' => 'h-[350px]', 'src' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop'],
                    ['tag' => 'Pengadaan Perangkat', 'title' => 'Sistem CCTV dan Server Kota Balikpapan', 'colspan' => 'md:col-span-4', 'h' => 'h-[350px]', 'src' => 'https://images.unsplash.com/photo-1563770551469-10d0e8c3a164?q=80&w=2070&auto=format&fit=crop'],
                    ['tag' => 'Infrastruktur Jaringan', 'title' => 'Jaringan Wireless Perusahaan Migas', 'desc' => 'Instalasi jaringan wireless point-to-point untuk area operasional perusahaan migas di Kalimantan Timur.', 'colspan' => 'md:col-span-6', 'h' => 'h-[400px]', 'src' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070&auto=format&fit=crop'],
                    ['tag' => 'Pengembangan Website', 'title' => 'E-Commerce UMKM Borneo', 'colspan' => 'md:col-span-6', 'h' => 'h-[400px]', 'src' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=2070&auto=format&fit=crop'],
                ];
            @endphp

            @foreach($projects as $project)
            <div class="group relative overflow-hidden rounded-2xl {{ $project['colspan'] }} {{ $project['h'] }} cursor-pointer project-item reveal" data-category="{{ $project['tag'] }}">
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
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-night-800 to-night-900 border border-night-700/50 p-10 sm:p-16 lg:p-20 reveal">
            <div class="absolute top-0 right-0 w-72 h-72 bg-brand-500/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-72 h-72 bg-accent-500/5 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="max-w-xl">
                    <h2 class="text-3xl sm:text-4xl font-heading font-bold text-white mb-4">Mulai Proyek IT Anda Bersama Kami</h2>
                    <p class="text-night-400 text-lg">Konsultasikan kebutuhan IT perusahaan Anda dan dapatkan solusi terbaik dari tim ahli kami.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 shrink-0">
                    <a href="{{ route('contact') }}" class="group relative overflow-hidden px-8 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-bold shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 text-center">
                        <span class="relative z-10 flex items-center gap-2 justify-center">
                            Konsultasi Gratis <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </span>
                        <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                    </a>
                    <button class="px-8 py-4 rounded-xl border border-night-600 text-night-200 font-bold hover:bg-white/5 hover:border-brand-500/50 transition-all duration-300 text-center">
                        Unduh Company Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projects = document.querySelectorAll('.project-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-brand-500', 'text-white');
                    b.classList.add('text-night-400', 'hover:text-white', 'hover:bg-night-800');
                });
                this.classList.remove('text-night-400', 'hover:text-white', 'hover:bg-night-800');
                this.classList.add('bg-brand-500', 'text-white');

                const filter = this.textContent.trim();

                projects.forEach(project => {
                    const category = project.dataset.category;
                    if (filter === 'Semua Proyek' || category === filter) {
                        project.style.display = '';
                        setTimeout(() => project.classList.add('visible'), 50);
                    } else {
                        project.classList.remove('visible');
                        setTimeout(() => project.style.display = 'none', 300);
                    }
                });
            });
        });
    });
</script>
@endpush
