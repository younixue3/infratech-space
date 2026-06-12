@extends('layouts.app')

@section('title', 'Kontak | Infratech Borneo Network')

@section('content')
{{-- Hero --}}
<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-night-900/95 via-night-900/80 to-night-900/60 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-brand-500/10 via-transparent to-transparent z-10"></div>
        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2074&auto=format&fit=crop" alt="" class="w-full h-full object-cover">
    </div>
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
        <div class="max-w-2xl">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/30 bg-brand-500/5 text-brand-400 text-xs font-semibold tracking-wider uppercase mb-6">
                    Hubungi Kami
                </span>
            </div>
            <h1 class="reveal reveal-delay-1 text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-white leading-[1.1] mb-6">
                Mari <span class="text-gradient">Bekerja Sama</span>
            </h1>
            <p class="reveal reveal-delay-2 text-lg text-night-300 max-w-xl leading-relaxed">
                Diskusikan kebutuhan infrastruktur dan teknologi Anda dengan tim ahli kami. Kami siap membantu mewujudkan proyek Anda.
            </p>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            {{-- Contact Info --}}
            <div class="lg:col-span-5 space-y-10 reveal">
                <div>
                    <h2 class="text-3xl font-heading font-bold text-white mb-4">Informasi Kontak</h2>
                    <p class="text-night-400 leading-relaxed">Jangan ragu untuk menghubungi kami melalui saluran berikut atau kunjungi kantor kami.</p>
                </div>

                <div class="space-y-8">
                    @foreach([
                        ['icon' => 'location_on', 'title' => 'Kantor Pusat', 'detail' => 'Jl. Jenderal Sudirman No. 104, Balikpapan, Kalimantan Timur, Indonesia'],
                        ['icon' => 'call', 'title' => 'Telephone', 'detail' => '+62 (542) 7654-321'],
                        ['icon' => 'mail', 'title' => 'Email', 'detail' => 'info@infratech-borneo.com'],
                        ['icon' => 'schedule', 'title' => 'Jam Kerja', 'detail' => 'Senin - Jumat, 08:00 - 17:00 WITA'],
                    ] as $info)
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-brand-500/10 border border-brand-500/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-brand-400 text-2xl">{{ $info['icon'] }}</span>
                        </div>
                        <div>
                            <h4 class="text-base font-heading font-bold text-white mb-1">{{ $info['title'] }}</h4>
                            <p class="text-night-400 text-sm">{{ $info['detail'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Form --}}
            <div class="lg:col-span-7 reveal reveal-delay-2">
                @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-sm flex items-center gap-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="bg-night-800/50 rounded-2xl border border-night-700/50 p-8 lg:p-10 space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-semibold text-night-200">Nama Lengkap <span class="text-brand-500">*</span></label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="John Doe" class="w-full bg-night-900 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none @error('name') border-red-500 @enderror">
                            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-semibold text-night-200">Email Perusahaan <span class="text-brand-500">*</span></label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="name@company.com" class="w-full bg-night-900 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none @error('email') border-red-500 @enderror">
                            @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="phone" class="text-sm font-semibold text-night-200">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+62 812 3456 7890" class="w-full bg-night-900 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none">
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-semibold text-night-200">Subjek <span class="text-brand-500">*</span></label>
                        <select id="subject" name="subject" required class="w-full bg-night-900 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white transition-all duration-300 outline-none @error('subject') border-red-500 @enderror">
                            <option value="" class="bg-night-900">Pilih subjek...</option>
                            <option value="Konsultasi Infrastruktur" class="bg-night-900">Konsultasi Infrastruktur</option>
                            <option value="Proyek Konstruksi" class="bg-night-900">Proyek Konstruksi</option>
                            <option value="Layanan IT" class="bg-night-900">Layanan IT & Jaringan</option>
                            <option value="Energi Terbarukan" class="bg-night-900">Energi Terbarukan</option>
                            <option value="Kerjasama" class="bg-night-900">Kerjasama / Partnership</option>
                            <option value="Lainnya" class="bg-night-900">Lainnya</option>
                        </select>
                        @error('subject') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-semibold text-night-200">Pesan <span class="text-brand-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required placeholder="Jelaskan kebutuhan Anda secara detail..." class="w-full bg-night-900 border border-night-700 rounded-xl focus:ring-2 focus:ring-brand-500 focus:border-brand-500 px-4 py-3.5 text-white placeholder-night-500 transition-all duration-300 outline-none resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="group relative overflow-hidden w-full px-8 py-4 rounded-xl bg-gradient-to-r from-brand-500 to-amber-500 text-white font-bold text-base shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            Kirim Pesan <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">send</span>
                        </span>
                        <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-gradient-to-r from-amber-500 to-brand-500 transition-transform duration-500 ease-out"></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Map Section --}}
<section class="py-16 lg:py-24 bg-night-950/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 reveal">
            <h2 class="text-3xl font-heading font-bold text-white mb-4">Lokasi Kami</h2>
            <p class="text-night-400">Kantor pusat kami di Balikpapan, Kalimantan Timur.</p>
        </div>
        <div class="rounded-2xl overflow-hidden border border-night-700/50 reveal reveal-delay-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1021211.7243777582!2d116.5212522640625!3d-1.2193095999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1476b6a2b6c3d%3A0x4f1b2e8b9e5c9f0a!2sBalikpapan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
        </div>
    </div>
</section>
@endsection
