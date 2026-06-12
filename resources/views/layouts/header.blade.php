<header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm transition-all duration-300 h-20">
    <div class="max-w-container-max mx-auto px-margin-desktop flex justify-between items-center h-full">
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined text-primary text-3xl md:hidden cursor-pointer" onclick="toggleDrawer()">menu</span>
            <span class="font-display text-2xl font-bold text-primary tracking-tight">Infratech Borneo</span>
        </div>
        
        <nav class="hidden md:flex items-center gap-8">
            @php
                $links = [
                    'Home' => route('home'),
                    'Tentang Kami' => route('about'),
                    'Layanan' => route('services'),
                    'Portofolio' => route('portfolio'),
                    'Kontak' => route('contact'),
                ];
            @endphp

            @foreach($links as $label => $url)
                <a href="{{ $url }}" class="text-sm font-semibold transition-all duration-300 {{ Request::url() == $url ? 'text-tertiary border-b-2 border-tertiary' : 'text-secondary hover:text-tertiary' }}">
                    {{ $label }}
                </a>
            @endforeach
        </nav>

        <button class="bg-tertiary-container hover:bg-tertiary text-white font-bold px-6 py-2.5 rounded shadow-sm transition-all">
            Inquire
        </button>
    </div>
</header>

<!-- Mobile Drawer -->
<div class="fixed inset-0 bg-black/50 z-[60] hidden" id="drawer-overlay" onclick="toggleDrawer()"></div>
<aside class="fixed top-0 left-0 h-full w-80 bg-surface z-[70] transform -translate-x-full transition-transform duration-300 ease-in-out shadow-xl" id="mobile-drawer">
    <div class="flex flex-col gap-2 p-4">
        <div class="flex justify-between items-center mb-6 px-2">
            <span class="text-xl font-bold text-primary">Infratech Borneo</span>
            <span class="material-symbols-outlined cursor-pointer" onclick="toggleDrawer()">close</span>
        </div>
        <!-- Mobile links logic here similarly -->
    </div>
</aside>