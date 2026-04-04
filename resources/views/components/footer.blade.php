{{-- resources/views/components/footer.blade.php --}}
{{-- Blade Anonymous Component: Footer — Minimalis & Informatif --}}

<footer class="bg-voltra-black" aria-label="Footer VOLTRA">

    {{-- Garis pemisah tipis di bagian atas --}}
    <div class="h-px bg-gradient-to-r from-transparent via-voltra-linen/10 to-transparent"></div>

    {{-- ══════════════════════════════════════════════════════════
         MAIN FOOTER GRID
         Desktop: 3 kolom (Logo | Links | Social + Newsletter)
         Mobile:  stack vertikal
    ══════════════════════════════════════════════════════════════ --}}
    <div class="max-w-7xl mx-auto px-5 lg:px-8 py-16 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16">

            {{-- ── Kolom Kiri: Logo + Deskripsi ─────────────────── --}}
            <div class="flex flex-col gap-5">

                {{-- Logo --}}
                <a href="{{ url('/') }}"
                   class="group inline-flex items-center gap-2.5 w-fit"
                   aria-label="VOLTRA — Beranda">
                    <span class="w-8 h-8 rounded-xl bg-voltra-tangerine
                                  flex items-center justify-center
                                  text-white font-black text-sm
                                  group-hover:scale-110 transition-transform duration-300"
                          aria-hidden="true">V</span>
                    <span class="text-voltra-linen font-black tracking-tight text-lg">
                        VOLTRA
                    </span>
                </a>

                {{-- Deskripsi --}}
                <p class="text-voltra-linen/45 text-sm leading-relaxed max-w-[260px]">
                    Infrastruktur energi masa depan. Cerdas, berkelanjutan, dan
                    andal — untuk Indonesia yang lebih terang.
                </p>

                {{-- Badge sustainability --}}
                <div class="inline-flex items-center gap-2 w-fit px-3 py-1.5 rounded-full
                             border border-voltra-linen/10">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-400" aria-hidden="true"></span>
                    <span class="text-[10px] font-semibold uppercase tracking-widest text-voltra-linen/35">
                        Net-Zero 2030
                    </span>
                </div>
            </div>

            {{-- ── Kolom Tengah: Navigation Links ──────────────── --}}
            <nav aria-label="Footer navigasi">
                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-voltra-linen/25 mb-5">
                    Perusahaan
                </p>
                <ul class="flex flex-col gap-3">
                    @foreach ([
                        ['#tentang',           'Tentang Kami'],
                        ['#layanan',           'Layanan'],
                        ['#karir',             'Karir'],
                        ['#kebijakan-privasi', 'Kebijakan Privasi'],
                        ['#kontak',            'Hubungi Kami'],
                    ] as [$href, $label])
                        <li>
                            <a href="{{ $href }}"
                               class="group flex items-center gap-2
                                      text-sm text-voltra-linen/50
                                      hover:text-voltra-linen
                                      transition-colors duration-200">
                                <span class="w-0 h-px bg-voltra-tangerine rounded-full
                                              group-hover:w-4 transition-all duration-300"
                                      aria-hidden="true"></span>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- ── Kolom Kanan: Social + Newsletter ────────────── --}}
            <div class="flex flex-col gap-8">

                {{-- Social Media Icons --}}
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-voltra-linen/25 mb-5">
                        Ikuti Kami
                    </p>
                    <div class="flex items-center gap-3">

                        {{-- Instagram --}}
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                           aria-label="Instagram VOLTRA"
                           class="group w-9 h-9 rounded-xl border border-voltra-linen/10
                                  flex items-center justify-center
                                  hover:border-voltra-tangerine/50 hover:bg-voltra-tangerine/10
                                  transition-all duration-200">
                            <svg class="w-4 h-4 text-voltra-linen/40 group-hover:text-voltra-tangerine
                                         transition-colors duration-200"
                                 viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>

                        {{-- LinkedIn --}}
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
                           aria-label="LinkedIn VOLTRA"
                           class="group w-9 h-9 rounded-xl border border-voltra-linen/10
                                  flex items-center justify-center
                                  hover:border-voltra-tangerine/50 hover:bg-voltra-tangerine/10
                                  transition-all duration-200">
                            <svg class="w-4 h-4 text-voltra-linen/40 group-hover:text-voltra-tangerine
                                         transition-colors duration-200"
                                 viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>

                        {{-- X / Twitter --}}
                        <a href="https://x.com" target="_blank" rel="noopener noreferrer"
                           aria-label="X (Twitter) VOLTRA"
                           class="group w-9 h-9 rounded-xl border border-voltra-linen/10
                                  flex items-center justify-center
                                  hover:border-voltra-tangerine/50 hover:bg-voltra-tangerine/10
                                  transition-all duration-200">
                            <svg class="w-4 h-4 text-voltra-linen/40 group-hover:text-voltra-tangerine
                                         transition-colors duration-200"
                                 viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>

                        {{-- YouTube --}}
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
                           aria-label="YouTube VOLTRA"
                           class="group w-9 h-9 rounded-xl border border-voltra-linen/10
                                  flex items-center justify-center
                                  hover:border-voltra-tangerine/50 hover:bg-voltra-tangerine/10
                                  transition-all duration-200">
                            <svg class="w-4 h-4 text-voltra-linen/40 group-hover:text-voltra-tangerine
                                         transition-colors duration-200"
                                 viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>

                    </div>
                </div>

                {{-- Newsletter — single underline input, no box --}}
                <div x-data="{ email: '', sent: false }">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-voltra-linen/25 mb-5">
                        Newsletter
                    </p>

                    <p class="text-xs text-voltra-linen/35 mb-4 leading-relaxed">
                        Update terbaru soal energi bersih & inovasi VOLTRA.
                    </p>

                    {{-- Success state --}}
                    <div x-show="sent"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="flex items-center gap-2 text-sm text-voltra-tangerine font-medium">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        Terima kasih! Anda sudah terdaftar.
                    </div>

                    {{-- Form state --}}
                    <form
                        x-show="!sent"
                        x-transition
                        @submit.prevent="sent = (email.includes('@') && email.includes('.'))"
                        class="flex items-center gap-3"
                        aria-label="Formulir newsletter"
                        novalidate
                    >
                        {{-- Input: hanya border-b, tanpa box --}}
                        <div class="flex-1 relative">
                            <input
                                type="email"
                                x-model="email"
                                placeholder="email@anda.com"
                                class="w-full bg-transparent
                                       border-b border-voltra-linen/15
                                       hover:border-voltra-linen/30
                                       focus:border-voltra-tangerine
                                       pb-2 pt-0.5
                                       text-sm text-voltra-linen/70
                                       placeholder:text-voltra-linen/25
                                       outline-none transition-colors duration-200
                                       caret-voltra-tangerine"
                                aria-label="Alamat email untuk newsletter"
                            >
                        </div>

                        {{-- Submit: icon-only button --}}
                        <button
                            type="submit"
                            class="flex-shrink-0 w-8 h-8 rounded-full
                                   bg-voltra-tangerine/0 border border-voltra-linen/15
                                   hover:bg-voltra-tangerine hover:border-voltra-tangerine
                                   flex items-center justify-center
                                   transition-all duration-200 group"
                            aria-label="Daftar newsletter"
                        >
                            <svg class="w-3.5 h-3.5 text-voltra-linen/40 group-hover:text-white
                                         transition-colors duration-200"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════════
         BOTTOM BAR — Copyright
    ══════════════════════════════════════════════════════════════ --}}
    <div class="border-t border-voltra-linen/5">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-5
                    flex flex-col sm:flex-row items-center justify-between gap-3">

            <p class="text-[11px] text-voltra-linen/30 tracking-wide">
                &copy; 2026 VOLTRA Infrastructure. Built for the Future.
            </p>

            {{-- Tagline kanan --}}
            <div class="flex items-center gap-1.5">
                <span class="w-1 h-1 rounded-full bg-voltra-tangerine/60" aria-hidden="true"></span>
                <p class="text-[11px] text-voltra-linen/20 tracking-wide">
                    Powering Indonesia's Clean Energy Transition
                </p>
            </div>
        </div>
    </div>

</footer>
