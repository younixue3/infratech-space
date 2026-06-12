@extends('layouts.app')

@section('title', 'Layanan | Infratech Borneo Network')

@section('content')
{{-- Hero --}}
<section class="relative min-h-[55vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-night-900/95 via-night-900/80 to-night-900/60 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-accent-500/10 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
        <div class="max-w-2xl">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-accent-500/30 bg-accent-500/5 text-accent-400 text-xs font-semibold tracking-wider uppercase mb-6">
                    Layanan Kami
                </span>
            </div>
            <h1 class="reveal reveal-delay-1 text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white leading-[1.1] mb-6">
                Solusi IT <span class="text-gradient">Lengkap & Profesional</span>
            </h1>
            <p class="reveal reveal-delay-2 text-lg text-night-300 max-w-xl leading-relaxed">
                Dari instalasi jaringan hingga konsultasi teknologi, kami hadir untuk memenuhi seluruh kebutuhan IT bisnis Anda di Kalimantan.
            </p>
        </div>
    </div>
</section>

{{-- Services Bento --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block">Keahlian Kami</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-4">Layanan Kami</h2>
            <p class="text-night-400 text-lg max-w-2xl mx-auto">Kami menyediakan enam layanan utama untuk mendukung transformasi digital bisnis Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">
            {{-- 1. Instalasi dan Manajemen Jaringan --}}
            <div class="md:col-span-8 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-brand-500/30 transition-all duration-500 reveal">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-brand-400 text-3xl">settings_ethernet</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-4">Instalasi dan Manajemen Jaringan</h3>
                    <p class="text-night-400 max-w-lg mb-8">Kami menyediakan instalasi dan pengelolaan jaringan yang andal untuk memastikan konektivitas yang optimal untuk perusahaan Anda. Layanan ini mencakup perancangan topologi, instalasi kabel fiber optik dan UTP, konfigurasi router dan switch, serta manajemen bandwidth dan keamanan jaringan.</p>
                    <ul class="grid grid-cols-2 gap-3">
                        @foreach(['Desain & Instalasi Jaringan', 'Fiber Optic & Wireless', 'Manajemen Bandwidth', 'Keamanan Jaringan', 'Konfigurasi Router/Switch', 'Monitoring 24/7'] as $item)
                        <li class="flex items-center gap-2 text-sm text-night-300">
                            <span class="material-symbols-outlined text-sm text-emerald-500">check_circle</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 opacity-[0.04] group-hover:opacity-[0.08] transition-opacity duration-500">
                    <span class="material-symbols-outlined text-[12rem]">lan</span>
                </div>
            </div>

            {{-- 2. Pengembangan Website --}}
            <div class="md:col-span-4 group bg-night-800/50 rounded-2xl border border-night-700/50 p-8 lg:p-10 flex flex-col hover:border-accent-500/30 transition-all duration-500 reveal reveal-delay-1">
                <div class="w-12 h-12 rounded-xl bg-accent-500/10 border border-accent-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined text-accent-400 text-2xl">code</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Pengembangan Website</h3>
                <p class="text-night-400 text-sm flex-1">Tim kami siap membantu Anda dalam merancang dan mengembangkan website yang menarik dan fungsional untuk bisnis Anda.</p>
                <div class="mt-8 pt-6 border-t border-night-700">
                    <span class="text-xs text-brand-500 uppercase tracking-wider font-semibold">Teknologi</span>
                    <div class="flex flex-wrap gap-2 mt-3">
                        @foreach(['Laravel', 'Tailwind CSS', 'React.js', 'MySQL'] as $tag)
                        <span class="px-3 py-1 rounded-full bg-night-700/50 text-night-300 text-xs font-medium border border-night-600">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- 3. Pengadaan Perangkat IT --}}
            <div class="md:col-span-4 bg-night-800/50 rounded-2xl border border-night-700/50 p-8 lg:p-10 hover:border-emerald-500/30 transition-all duration-500 reveal reveal-delay-2">
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined text-emerald-400 text-2xl">computer</span>
                </div>
                <h3 class="text-xl font-heading font-bold text-white mb-3">Pengadaan Perangkat IT</h3>
                <p class="text-night-400 text-sm">Kami menyediakan berbagai perangkat IT berkualitas tinggi sesuai kebutuhan bisnis Anda, mulai dari workstation, server, perangkat jaringan, hingga aksesoris IT dengan harga kompetitif dan garansi resmi.</p>
            </div>

            {{-- 4. Maintenance Perangkat IT --}}
            <div class="md:col-span-8 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-amber-500/30 transition-all duration-500 reveal reveal-delay-3">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-amber-400 text-3xl">build</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Maintenance Perangkat IT</h3>
                    <p class="text-night-400 max-w-lg mb-6">Kami menawarkan layanan pemeliharaan perangkat IT untuk menjamin kinerja yang optimal dan mengurangi risiko gangguan. Layanan ini meliputi perawatan berkala, perbaikan hardware dan software, update sistem, serta backup data.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-brand-400 font-semibold hover:text-brand-300 transition-colors group/link">
                        Ajukan Maintenance <span class="material-symbols-outlined group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 opacity-[0.04] group-hover:opacity-[0.08] transition-opacity duration-500">
                    <span class="material-symbols-outlined text-[12rem]">settings</span>
                </div>
            </div>

            {{-- 5. Managed Service --}}
            <div class="md:col-span-6 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-brand-500/30 transition-all duration-500 reveal reveal-delay-4">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-brand-400 text-3xl">support_agent</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Managed Service</h3>
                    <p class="text-night-400">Layanan managed service kami menjamin bahwa sistem TI Anda berjalan lancar tanpa gangguan pada aktivitas sehari-hari. Kami menangani monitoring server, manajemen database, keamanan sistem, help desk, dan pemulihan bencana secara proaktif.</p>
                </div>
            </div>

            {{-- 6. Konsultasi Teknologi --}}
            <div class="md:col-span-6 group relative bg-gradient-to-br from-night-800 to-night-850 rounded-2xl border border-night-700/50 overflow-hidden p-8 lg:p-10 hover:border-accent-500/30 transition-all duration-500 reveal reveal-delay-4">
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-xl bg-accent-500/10 border border-accent-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-accent-400 text-3xl">lightbulb</span>
                    </div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-3">Konsultasi Teknologi</h3>
                    <p class="text-night-400">Kami menyediakan konsultasi mengenai teknologi yang tepat agar bisnis Anda tetap kompetitif dan berkembang. Dari audit infrastruktur IT, perencanaan transformasi digital, hingga rekomendasi solusi teknologi yang sesuai dengan kebutuhan dan anggaran Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="py-24 lg:py-32 bg-night-950/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <span class="text-brand-500 text-sm font-semibold tracking-widest uppercase mb-3 block">Mengapa Kami</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-white mb-6">Mitra IT Terpercaya di Kalimantan</h2>
                <p class="text-night-400 text-lg mb-8 leading-relaxed">Kami tidak sekadar penyedia jasa IT, tetapi mitra strategis yang berkomitmen pada kesuksesan transformasi digital bisnis Anda.</p>
                <div class="flex flex-col gap-6">
                    @foreach([
                        ['icon' => 'location_on', 'color' => 'text-brand-400', 'title' => 'Cakupan Luas', 'desc' => 'Melayani klien di seluruh provinsi Kalimantan.'],
                        ['icon' => 'support_agent', 'color' => 'text-accent-400', 'title' => 'Respon Cepat', 'desc' => 'Tim teknis siap merespon kebutuhan Anda dalam waktu singkat.'],
                        ['icon' => 'verified_user', 'color' => 'text-emerald-400', 'title' => 'Garansi Layanan', 'desc' => 'Setiap layanan dilengkapi garansi dan dukungan purna jual.'],
                    ] as $item)
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined {{ $item['color'] }} text-3xl shrink-0">{{ $item['icon'] }}</span>
                        <div>
                            <h4 class="text-lg font-heading font-bold text-white mb-1">{{ $item['title'] }}</h4>
                            <p class="text-night-400">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="relative reveal reveal-delay-2">
                <div class="absolute top-0 right-0 w-96 h-96 bg-brand-500/5 rounded-full blur-3xl -z-10"></div>
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=2070&auto=format&fit=crop" alt="IT Professional Team" class="rounded-2xl shadow-2xl shadow-black/30 object-cover w-full h-[500px]">
            </div>
        </div>
    </div>
</section>

{{-- CTA Form --}}
<section class="py-24 lg:py-32">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="reveal">
            <span class="material-symbols-outlined text-brand-500 text-5xl mb-4 block">forum</span>
            <h2 class="text-3xl sm:text-4xl font-heading font-bold text-white mb-4">Butuh Solusi IT?</h2>
            <p class="text-night-400 text-lg mb-12">Konsultasikan kebutuhan IT perusahaan Anda dengan tim ahli kami secara gratis.</p>
        </div>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-5 text-left reveal reveal-delay-1" onsubmit="event.preventDefault(); alert('Terima kasih! Kami akan menghubungi Anda segera.');">
            <div class="space-y-2">
                <label class="text-sm font-semibold text-night-200 ml-1">Nama Lengkap</label>
                <input type="text" placeholder="John Doe" required class="w-full bg-night-800 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none">
            </div>
            <div class="space-y-2">
                <label class="text-sm font-semibold text-night-200 ml-1">Email Perusahaan</label>
                <input type="email" placeholder="name@company.com" required class="w-full bg-night-800 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none">
            </div>
            <div class="md:col-span-2 space-y-2">
                <label class="text-sm font-semibold text-night-200 ml-1">Layanan yang Dibutuhkan</label>
                <select required class="w-full bg-night-800 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-night-300 transition-all duration-300 outline-none">
                    <option value="" class="bg-night-900">Pilih layanan...</option>
                    <option value="Jaringan" class="bg-night-900">Instalasi & Manajemen Jaringan</option>
                    <option value="Website" class="bg-night-900">Pengembangan Website</option>
                    <option value="Pengadaan" class="bg-night-900">Pengadaan Perangkat IT</option>
                    <option value="Maintenance" class="bg-night-900">Maintenance Perangkat IT</option>
                    <option value="Managed Service" class="bg-night-900">Managed Service</option>
                    <option value="Konsultasi" class="bg-night-900">Konsultasi Teknologi</option>
                    <option value="Lainnya" class="bg-night-900">Lainnya</option>
                </select>
            </div>
            <div class="md:col-span-2 space-y-2">
                <label class="text-sm font-semibold text-night-200 ml-1">Pesan</label>
                <textarea placeholder="Jelaskan kebutuhan Anda..." rows="4" required class="w-full bg-night-800 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none resize-none"></textarea>
            </div>
            <div class="md:col-span-2 flex justify-center mt-4">
                <button type="submit" class="group relative overflow-hidden px-12 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-bold text-base shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                    <span class="relative z-10 flex items-center gap-2">
                        Kirim Permintaan <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">send</span>
                    </span>
                    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
