<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Infratech Borneo Network - Penyedia layanan infrastruktur IT profesional di Kalimantan: instalasi jaringan, pengembangan website, pengadaan perangkat IT, maintenance, managed service, dan konsultasi teknologi.">
    <title>@yield('title', 'Infratech Borneo Network')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-night-900 text-night-100 font-sans antialiased overflow-x-hidden">

    {{-- Navigation --}}
    <header id="header" class="fixed top-0 z-50 w-full transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 md:h-24 transition-all duration-500">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo-infratech.png') }}" alt="Infratech Borneo Network" class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                </a>

                <nav class="hidden lg:flex items-center gap-1">
                    @php
                        $navItems = [
                            'home' => ['Beranda', 'home'],
                            'about' => ['Tentang', 'corporate_fare'],
                            'services' => ['Layanan', 'engineering'],
                            'portfolio' => ['Portofolio', 'account_tree'],
                            'contact' => ['Kontak', 'call'],
                        ];
                    @endphp
                    @foreach($navItems as $route => [$label, $icon])
                        <a href="{{ route($route) }}"
                           class="flex items-center gap-2 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-300 {{ request()->routeIs($route) ? 'bg-brand-500/10 text-brand-400 border border-brand-500/20' : 'text-night-300 hover:text-white hover:bg-night-800/50' }}">
                            <span class="material-symbols-outlined text-lg">{{ $icon }}</span>
                            {{ $label }}
                        </a>
                    @endforeach
                </nav>

                <div class="hidden lg:flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="relative group overflow-hidden px-6 py-2.5 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white text-sm font-semibold shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                        <span class="relative z-10 flex items-center gap-2">
                            Hubungi Kami <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </span>
                        <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                    </a>
                </div>

                <button id="menu-btn" class="lg:hidden flex items-center justify-center w-11 h-11 rounded-xl text-night-300 hover:text-white hover:bg-night-800 transition-all duration-300" aria-label="Toggle menu">
                    <span id="menu-icon" class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </header>

    {{-- Mobile Drawer --}}
    <div id="drawer-overlay" class="fixed inset-0 z-[60] bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300" onclick="closeDrawer()"></div>
    <aside id="drawer" class="fixed top-0 right-0 z-[70] h-full w-80 max-w-[85vw] bg-night-900 border-l border-night-700 transform translate-x-full transition-transform duration-300 ease-out">
        <div class="flex flex-col h-full p-6">
            <div class="flex items-center justify-between mb-10">
                <span class="text-lg font-bold text-white">Menu</span>
                <button onclick="closeDrawer()" class="w-10 h-10 rounded-xl bg-night-800 flex items-center justify-center text-night-300 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <nav class="flex flex-col gap-2 flex-1">
                @foreach($navItems as $route => [$label, $icon])
                    <a href="{{ route($route) }}"
                       class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-base font-medium transition-all duration-300 {{ request()->routeIs($route) ? 'bg-brand-500/10 text-brand-400 border border-brand-500/20' : 'text-night-300 hover:text-white hover:bg-night-800' }}"
                       onclick="closeDrawer()">
                        <span class="material-symbols-outlined text-2xl">{{ $icon }}</span>
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
            <div class="pt-6 border-t border-night-800">
                <a href="{{ route('contact') }}" class="flex items-center justify-center gap-2 w-full px-6 py-3.5 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-semibold shadow-lg" onclick="closeDrawer()">
                    Hubungi Kami <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </aside>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-night-950 border-t border-night-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
                <div class="lg:col-span-4 space-y-6">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('images/logo-infratech.png') }}" alt="Infratech Borneo Network" class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                    </a>
                    <p class="text-night-400 text-sm leading-relaxed max-w-sm">
                        Penyedia solusi teknologi informasi terpercaya di Kalimantan. Spesialis instalasi jaringan, pengembangan website, pengadaan perangkat IT, dan managed services untuk bisnis Anda.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 rounded-lg bg-night-800 border border-night-700 flex items-center justify-center text-night-400 hover:text-brand-400 hover:border-brand-500/30 transition-all duration-300">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-night-800 border border-night-700 flex items-center justify-center text-night-400 hover:text-brand-400 hover:border-brand-500/30 transition-all duration-300">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-night-800 border border-night-700 flex items-center justify-center text-night-400 hover:text-brand-400 hover:border-brand-500/30 transition-all duration-300">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-5">
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider">Perusahaan</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Layanan</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Portofolio</a></li>
                        <li><a href="{{ route('contact') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3 space-y-5">
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Instalasi & Manajemen Jaringan</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Pengembangan Website</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Pengadaan Perangkat IT</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Maintenance Perangkat IT</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Managed Service</a></li>
                        <li><a href="{{ route('services') }}" class="text-night-400 hover:text-brand-400 text-sm transition-colors">Konsultasi Teknologi</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3 space-y-5">
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider">Kantor Pusat</h4>
                    <ul class="space-y-3 text-night-400 text-sm">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-brand-500 text-lg shrink-0 mt-0.5">location_on</span>
                            <span>Jl. Jenderal Sudirman No. 104, Balikpapan, Kalimantan Timur, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-brand-500 text-lg shrink-0">call</span>
                            <span>+62 (542) 7654-321</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-brand-500 text-lg shrink-0">mail</span>
                            <span>info@infratech-borneo.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-night-800 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-night-500">
                <p>&copy; {{ date('Y') }} PT Infratech Borneo Network. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-night-300 transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-night-300 transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Scripts --}}
    <script>
        // Mobile drawer
        const menuBtn = document.getElementById('menu-btn');
        const drawer = document.getElementById('drawer');
        const overlay = document.getElementById('drawer-overlay');
        const menuIcon = document.getElementById('menu-icon');

        function openDrawer() {
            drawer.classList.remove('translate-x-full');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.classList.remove('opacity-0'), 10);
            document.body.style.overflow = 'hidden';
            menuIcon.textContent = 'close';
        }

        function closeDrawer() {
            drawer.classList.add('translate-x-full');
            overlay.classList.add('opacity-0');
            setTimeout(() => overlay.classList.add('hidden'), 300);
            document.body.style.overflow = '';
            menuIcon.textContent = 'menu';
        }

        if (menuBtn) {
            menuBtn.addEventListener('click', () => {
                if (drawer.classList.contains('translate-x-full')) {
                    openDrawer();
                } else {
                    closeDrawer();
                }
            });
        }

        // Shrink header on scroll
        const header = document.getElementById('header');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const nav = header.querySelector('.flex.items-center.justify-between');

            if (scrollY > 60) {
                header.classList.add('glass', 'shadow-lg', 'shadow-black/10');
                nav.classList.remove('h-20', 'md:h-24');
                nav.classList.add('h-16', 'md:h-18');
            } else {
                header.classList.remove('glass', 'shadow-lg', 'shadow-black/10');
                nav.classList.add('h-20', 'md:h-24');
                nav.classList.remove('h-16', 'md:h-18');
            }

            lastScroll = scrollY;
        });

        // Scroll reveal observer
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
        });

        // Counter animation
        function animateCounters() {
            document.querySelectorAll('[data-count]').forEach(el => {
                const target = parseInt(el.dataset.count);
                const suffix = el.dataset.suffix || '';
                const duration = 2000;
                const start = performance.now();

                function update(currentTime) {
                    const elapsed = currentTime - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const current = Math.floor(eased * target);

                    el.textContent = current.toLocaleString() + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        el.textContent = target.toLocaleString() + suffix;
                    }
                }

                requestAnimationFrame(update);
            });
        }

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.addEventListener('DOMContentLoaded', () => {
            const statsSection = document.querySelector('[data-counters]');
            if (statsSection) counterObserver.observe(statsSection);
        });
    </script>
    @stack('scripts')
</body>
</html>
