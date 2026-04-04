<x-app-layout>

    {{-- ══════════════════════════════════════════════════════════════
         HERO SECTION
         ✅ bg-voltra-linen (bukan bg-white)
         ✅ Padding luas: py-32 lg:py-40
         ✅ Tidak ada border kaku — glow via radial-gradient
    ══════════════════════════════════════════════════════════════════ --}}
    <section
        id="beranda"
        class="relative min-h-[90dvh] flex flex-col items-center justify-center
               bg-voltra-linen overflow-hidden
               px-5 py-32 lg:py-40"
        aria-label="Beranda VOLTRA"
    >
        {{-- Accent line atas — tipis, bukan border kaku --}}
        <div class="absolute top-0 inset-x-0 h-[3px] bg-gradient-to-r
                    from-transparent via-voltra-tangerine to-transparent"
             aria-hidden="true"></div>

        {{-- Radial glow latar --}}
        <div class="pointer-events-none absolute inset-0
                    bg-[radial-gradient(ellipse_60%_50%_at_50%_0%,_#FF6D1F12_0%,_transparent_100%)]"
             aria-hidden="true"></div>

        {{-- Konten hero --}}
        <div class="relative z-10 max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Kolom Kiri: Teks --}}
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-8 order-1">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full
                            bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                    <span class="w-2 h-2 rounded-full bg-voltra-tangerine animate-pulse" aria-hidden="true"></span>
                    <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                        Platform Energi Generasi Baru
                    </span>
                </div>

                {{-- Headline --}}
                <h1 class="text-[clamp(3.5rem,8vw,5.5rem)] font-black tracking-tighter
                           text-voltra-black leading-[0.92]">
                    VOLTRA
                    <span class="block text-voltra-tangerine italic
                                 [text-shadow:0_0_60px_#FF6D1F44,0_0_20px_#FF6D1F22]">
                        IS LIVE
                    </span>
                </h1>

                {{-- Sub-headline --}}
                <p class="text-lg lg:text-xl text-voltra-black/70 font-normal leading-relaxed
                           max-w-lg">
                    Teknologi infrastruktur energi masa depan dengan estetika premium
                    dan performa tanpa batas.
                </p>

                {{-- CTA --}}
                <a href="#contact-section"
                   class="group inline-flex items-center gap-2.5
                          px-8 py-4 rounded-full
                          bg-voltra-tangerine text-white font-semibold text-base
                          shadow-2xl shadow-voltra-tangerine/40
                          hover:shadow-[0_20px_60px_-8px_#FF6D1F66]
                          hover:bg-voltra-tangerine/90
                          hover:scale-[1.04] active:scale-95
                          transition-all duration-300">
                    Hubungi Kami
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            {{-- Kolom Kanan: Visual --}}
            <div class="relative w-full h-[350px] lg:h-[500px] order-2 mt-8 lg:mt-0">
                <img
                    src="{{ asset('images/hero-visual.png') }}"
                    alt="Visual Infrastruktur Energi Masa Depan"
                    class="object-cover w-full h-full rounded-[2rem] shadow-2xl shadow-voltra-tangerine/10 border border-voltra-black/5"
                    loading="eager"
                    draggable="false"
                >
            </div>
        </div>

        {{-- Footer strip — menggunakan bg-voltra-cotton bukan voltra-tangerine penuh agar tidak terlalu berat --}}
        <div class="absolute bottom-0 inset-x-0
                    bg-gradient-to-t from-voltra-cotton/60 to-transparent
                    h-32 flex items-end justify-center pb-8"
             aria-hidden="true">
            <div class="flex flex-col items-center gap-1 opacity-30">
                <div class="text-5xl font-black text-voltra-black tracking-tighter leading-none">V</div>
                <div class="text-xs font-bold text-voltra-black tracking-[0.3em] uppercase">VOLTRA</div>
            </div>
        </div>
    </section>

    {{-- Layanan Unggulan — Bento Grid --}}
    <x-services />

    {{-- VOLTRA Impact — Stats Count-Up --}}
    <x-stats />

    {{-- Suara dari Klien — Testimonials --}}
    <x-testimonials />

    {{-- ══════════════════════════════════════════════════════════════

         CONTACT SECTION
         ✅ bg-voltra-cotton (bukan bg-white)
         ✅ Padding luas: py-24 lg:py-32
         ✅ Input: border-none → shadow-sm + bg-voltra-linen (beda warna)
         ✅ @error() per field
         ✅ Session success banner voltra-tangerine
         ✅ rounded-[2rem] pada semua field
         ✅ CTA shadow menyala
    ══════════════════════════════════════════════════════════════════ --}}
    <section
        id="contact-section"
        class="bg-voltra-cotton py-24 lg:py-32 px-5"
        aria-label="Formulir Kontak"
    >
        <div class="max-w-4xl mx-auto">

            {{-- Section header --}}
            <div class="text-center mb-16 lg:mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-voltra-black tracking-tighter leading-[0.95]">
                    Mulai <span class="text-voltra-tangerine">Koneksi.</span>
                </h2>
                <p class="text-voltra-black/60 mt-5 text-lg leading-relaxed max-w-lg mx-auto">
                    Kirimkan pesan Anda, tim ahli VOLTRA akan segera merespons
                    dalam 1×24 jam.
                </p>
            </div>

            {{-- ── Banner Sukses ────────────────────────────────── --}}
            @if (session('success'))
                <div
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="flex items-start gap-4 p-5 mb-10 rounded-[2rem]
                           bg-voltra-tangerine text-white
                           shadow-2xl shadow-voltra-tangerine/30"
                    role="alert"
                    aria-live="polite"
                >
                    <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/20
                                  flex items-center justify-center mt-0.5" aria-hidden="true">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </span>
                    <div class="flex-1">
                        <p class="font-bold text-sm mb-0.5">Pesan Terkirim!</p>
                        <p class="text-white/85 text-sm leading-snug">{{ session('success') }}</p>
                    </div>
                    <button @click="show = false"
                            class="w-7 h-7 rounded-full hover:bg-white/20 flex items-center justify-center
                                   transition-colors duration-150"
                            aria-label="Tutup notifikasi">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            @endif

            {{-- ── Form Card ────────────────────────────────────── --}}
            {{--
                bg-voltra-linen → kontras dengan bg-voltra-cotton section
                shadow-sm       → tidak ada border kaku, kedalaman lewat shadow
                rounded-[2.5rem] → Apple-esque
            --}}
            <form
                action="{{ route('contact.store') }}"
                method="POST"
                class="bg-voltra-linen rounded-[2.5rem]
                       shadow-xl shadow-voltra-black/6
                       p-8 lg:p-12 space-y-7"
                novalidate
                aria-label="Formulir pesan"
            >
                @csrf

                {{-- Baris: Nama + Email --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Nama --}}
                    <div class="flex flex-col gap-2">
                        <label for="lp-name"
                               class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                            Nama Lengkap
                            <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                        </label>
                        <input
                            id="lp-name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Contoh: Budi Santoso"
                            autocomplete="name"
                            {{-- bg-voltra-cotton: beda warna dari card (voltra-linen) — tanpa border kaku --}}
                            class="w-full px-5 py-3.5 rounded-[2rem]
                                   bg-voltra-cotton border-0
                                   text-sm text-voltra-black placeholder:text-voltra-black/30
                                   shadow-sm
                                   focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/40
                                   transition-all duration-200
                                   @error('name') ring-2 ring-red-400 bg-red-50/60 @enderror"
                            aria-describedby="lp-name-error"
                            aria-required="true"
                        >
                        @error('name')
                            <p id="lp-name-error"
                               class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1"
                               role="alert">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col gap-2">
                        <label for="lp-email"
                               class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                            Email Aktif
                            <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                        </label>
                        <input
                            id="lp-email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="email"
                            class="w-full px-5 py-3.5 rounded-[2rem]
                                   bg-voltra-cotton border-0
                                   text-sm text-voltra-black placeholder:text-voltra-black/30
                                   shadow-sm
                                   focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/40
                                   transition-all duration-200
                                   @error('email') ring-2 ring-red-400 bg-red-50/60 @enderror"
                            aria-describedby="lp-email-error"
                            aria-required="true"
                        >
                        @error('email')
                            <p id="lp-email-error"
                               class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1"
                               role="alert">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- No. Telepon + Subjek --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Telepon (nullable) --}}
                    <div class="flex flex-col gap-2">
                        <label for="lp-phone"
                               class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                            No. Telepon
                            <span class="normal-case font-normal tracking-normal text-voltra-black/30">(opsional)</span>
                        </label>
                        <input
                            id="lp-phone"
                            type="tel"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+62 812 3456 7890"
                            autocomplete="tel"
                            class="w-full px-5 py-3.5 rounded-[2rem]
                                   bg-voltra-cotton border-0
                                   text-sm text-voltra-black placeholder:text-voltra-black/30
                                   shadow-sm
                                   focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/40
                                   transition-all duration-200
                                   @error('phone') ring-2 ring-red-400 bg-red-50/60 @enderror"
                            aria-describedby="lp-phone-error"
                        >
                        @error('phone')
                            <p id="lp-phone-error"
                               class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1"
                               role="alert">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Subjek --}}
                    <div class="flex flex-col gap-2">
                        <label for="lp-subject"
                               class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                            Subjek
                            <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                        </label>
                        <input
                            id="lp-subject"
                            type="text"
                            name="subject"
                            value="{{ old('subject') }}"
                            placeholder="Apa yang ingin Anda tanyakan?"
                            class="w-full px-5 py-3.5 rounded-[2rem]
                                   bg-voltra-cotton border-0
                                   text-sm text-voltra-black placeholder:text-voltra-black/30
                                   shadow-sm
                                   focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/40
                                   transition-all duration-200
                                   @error('subject') ring-2 ring-red-400 bg-red-50/60 @enderror"
                            aria-describedby="lp-subject-error"
                            aria-required="true"
                        >
                        @error('subject')
                            <p id="lp-subject-error"
                               class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1"
                               role="alert">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                {{-- Pesan --}}
                <div class="flex flex-col gap-2">
                    <label for="lp-message"
                           class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                        Pesan
                        <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                    </label>
                    <textarea
                        id="lp-message"
                        name="message"
                        rows="5"
                        placeholder="Tuliskan detail kebutuhan Anda di sini..."
                        class="w-full px-5 py-4 rounded-[2rem]
                               bg-voltra-cotton border-0
                               text-sm text-voltra-black placeholder:text-voltra-black/30
                               shadow-sm resize-none
                               focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/40
                               transition-all duration-200
                               @error('message') ring-2 ring-red-400 bg-red-50/60 @enderror"
                        aria-describedby="lp-message-error"
                        aria-required="true"
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p id="lp-message-error"
                           class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1"
                           role="alert">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button
                    type="submit"
                    class="group w-full flex items-center justify-center gap-2.5
                           py-4 lg:py-5 rounded-[2rem]
                           bg-voltra-tangerine text-white font-black text-base
                           uppercase tracking-widest
                           shadow-2xl shadow-voltra-tangerine/40
                           hover:shadow-[0_20px_60px_-8px_#FF6D1F66]
                           hover:bg-voltra-tangerine/90
                           hover:scale-[1.02] active:scale-95
                           transition-all duration-300
                           focus-visible:outline-none focus-visible:ring-2
                           focus-visible:ring-voltra-tangerine focus-visible:ring-offset-4"
                >
                    Kirim Pesan Sekarang
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                    </svg>
                </button>
            </form>
        </div>
    </section>

</x-app-layout>