{{-- resources/views/components/services.blade.php --}}
{{-- Blade Anonymous Component: Layanan Unggulan — Bento Grid --}}

<section
    id="layanan"
    class="bg-voltra-linen py-24 lg:py-32 px-5 overflow-hidden"
    aria-label="Layanan Unggulan VOLTRA"
>
    <div class="max-w-7xl mx-auto">

        {{-- ── Section Header ─────────────────────────────────── --}}
        <div class="mb-14 lg:mb-18 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
            <div class="max-w-xl">
                <div class="inline-flex items-center gap-2 mb-5 px-4 py-1.5 rounded-full
                            bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                    <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                    <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                        Layanan Unggulan
                    </span>
                </div>
                <h2 class="text-5xl lg:text-6xl font-black tracking-tighter text-voltra-black leading-[0.92]">
                    Solusi Energi<br>
                    <span class="text-voltra-tangerine">Masa Depan.</span>
                </h2>
            </div>
            <p class="text-base text-voltra-black/55 leading-relaxed max-w-xs lg:text-right lg:pb-2">
                Tiga pilar teknologi VOLTRA yang mendorong transisi energi bersih
                di seluruh Indonesia.
            </p>
        </div>

        {{-- ══════════════════════════════════════════════════════
             BENTO GRID
             Desktop (lg):  [ Card 1 Large ] [ Card 2 ]
                            [ Card 3 Wide           ]
             Tablet (md):   2 kolom, Card 3 full-width
             Mobile:        stack vertikal 1 kolom
        ══════════════════════════════════════════════════════════ --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3
                    grid-rows-auto lg:grid-rows-2
                    gap-4 lg:gap-5">

            {{-- ╔═══════════════════════════════════════╗
                 ║  CARD 1 — Smart Grid Infrastructure  ║
                 ║  Bento: lg:col-span-2 lg:row-span-1  ║
                 ╚═══════════════════════════════════════╝ --}}
            <article
                class="group relative lg:col-span-2
                       bg-voltra-cotton rounded-[2rem]
                       p-8 lg:p-10
                       overflow-hidden
                       transition-all duration-500 ease-out
                       hover:bg-voltra-tangerine
                       hover:shadow-2xl hover:shadow-voltra-tangerine/30
                       hover:-translate-y-1
                       cursor-default"
                aria-label="Layanan: Smart Grid Infrastructure"
            >
                {{-- Background decorative ring --}}
                <div class="pointer-events-none absolute -right-16 -bottom-16
                             w-64 h-64 rounded-full
                             border-[40px] border-voltra-tangerine/8
                             group-hover:border-white/10
                             transition-colors duration-500"
                     aria-hidden="true"></div>
                <div class="pointer-events-none absolute -right-4 -bottom-4
                             w-36 h-36 rounded-full
                             border-[24px] border-voltra-tangerine/12
                             group-hover:border-white/8
                             transition-colors duration-500"
                     aria-hidden="true"></div>

                {{-- Image --}}
                <div class="mb-6 relative w-16 h-16 rounded-2xl overflow-hidden
                             bg-voltra-tangerine/10 shadow-sm border border-voltra-tangerine/20
                             transition-all duration-500">
                    <img src="{{ asset('images/service-1.png') }}" alt="Smart Grid"
                         class="w-full h-full object-cover mix-blend-luminosity opacity-80
                                group-hover:mix-blend-normal group-hover:opacity-100 group-hover:scale-110
                                transition-all duration-500" loading="lazy">
                    {{-- Overlay Tangerine --}}
                    <div class="absolute inset-0 bg-voltra-tangerine/20 mix-blend-color
                                group-hover:bg-transparent transition-colors duration-500" aria-hidden="true"></div>
                </div>

                {{-- Content --}}
                <div class="relative z-10">
                    <div class="flex items-start justify-between gap-4 mb-3">
                        <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-voltra-black
                                   group-hover:text-white transition-colors duration-500 leading-tight">
                            Smart Grid<br>Infrastructure
                        </h3>
                        {{-- Arrow indicator --}}
                        <div class="flex-shrink-0 w-10 h-10 rounded-full
                                     bg-voltra-tangerine/10 group-hover:bg-white/20
                                     flex items-center justify-center
                                     group-hover:translate-x-1 group-hover:-translate-y-1
                                     transition-all duration-500">
                            <svg class="w-4 h-4 text-voltra-tangerine group-hover:text-white transition-colors duration-500"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-voltra-black/60 group-hover:text-white/80
                               text-sm lg:text-base leading-relaxed
                               transition-colors duration-500 max-w-lg">
                        Infrastruktur jaringan listrik cerdas berbasis IoT yang memantau,
                        mengoptimalkan, dan mendistribusikan energi secara real-time.
                        Hadir dengan latensi sub-detik dan uptime 99,99%.
                    </p>

                    {{-- Stats mini --}}
                    <div class="mt-6 pt-6 border-t border-voltra-black/8 group-hover:border-white/15
                                 flex items-center gap-8 transition-colors duration-500">
                        @foreach ([['99.99%', 'Uptime'], ['<1ms', 'Latensi'], ['10k+', 'Node']] as [$val, $lbl])
                            <div>
                                <p class="text-lg font-black text-voltra-black group-hover:text-white
                                           tracking-tight transition-colors duration-500">{{ $val }}</p>
                                <p class="text-xs text-voltra-black/40 group-hover:text-white/60
                                           font-medium uppercase tracking-wider transition-colors duration-500">
                                    {{ $lbl }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>

            {{-- ╔═══════════════════════════════════════╗
                 ║  CARD 2 — Renewable Energy Storage   ║
                 ║  Bento: lg:col-span-1 lg:row-span-2  ║
                 ╚═══════════════════════════════════════╝ --}}
            <article
                class="group relative md:col-span-1 lg:col-span-1 lg:row-span-2
                       bg-voltra-cotton rounded-[2rem]
                       p-8
                       overflow-hidden
                       transition-all duration-500 ease-out
                       hover:bg-voltra-tangerine
                       hover:shadow-2xl hover:shadow-voltra-tangerine/30
                       hover:-translate-y-1
                       cursor-default flex flex-col"
                aria-label="Layanan: Renewable Energy Storage"
            >
                {{-- Decorative circle --}}
                <div class="pointer-events-none absolute -left-20 -top-20
                             w-56 h-56 rounded-full
                             bg-voltra-tangerine/6 group-hover:bg-white/8
                             transition-colors duration-500"
                     aria-hidden="true"></div>

                {{-- Image & Title Container --}}
                <div class="mb-auto">
                    {{-- Image --}}
                    <div class="mb-6 relative w-16 h-16 rounded-2xl overflow-hidden
                                 bg-voltra-tangerine/10 shadow-sm border border-voltra-tangerine/20
                                 transition-all duration-500">
                        <img src="{{ asset('images/service-2.png') }}" alt="Renewable Energy Storage"
                             class="w-full h-full object-cover mix-blend-luminosity opacity-80
                                    group-hover:mix-blend-normal group-hover:opacity-100 group-hover:scale-110
                                    transition-all duration-500" loading="lazy">
                        {{-- Overlay Tangerine --}}
                        <div class="absolute inset-0 bg-voltra-tangerine/20 mix-blend-color
                                    group-hover:bg-transparent transition-colors duration-500" aria-hidden="true"></div>
                    </div>

                    <div class="flex items-start justify-between gap-3 mb-3">
                        <h3 class="text-xl lg:text-2xl font-black tracking-tight text-voltra-black
                                   group-hover:text-white transition-colors duration-500 leading-tight">
                            Renewable<br>Energy Storage
                        </h3>
                        <div class="flex-shrink-0 w-9 h-9 rounded-full
                                     bg-voltra-tangerine/10 group-hover:bg-white/20
                                     flex items-center justify-center
                                     group-hover:translate-x-1 group-hover:-translate-y-1
                                     transition-all duration-500">
                            <svg class="w-3.5 h-3.5 text-voltra-tangerine group-hover:text-white transition-colors duration-500"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-voltra-black/60 group-hover:text-white/80
                               text-sm leading-relaxed transition-colors duration-500">
                        Sistem penyimpanan energi terbarukan skala besar menggunakan
                        teknologi baterai generasi berikutnya dengan siklus hidup
                        hingga 20 tahun.
                    </p>
                </div>

                {{-- Visual: Battery bar --}}
                <div class="mt-8 pt-6 border-t border-voltra-black/8 group-hover:border-white/15
                             transition-colors duration-500">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold uppercase tracking-wider
                                      text-voltra-black/40 group-hover:text-white/60
                                      transition-colors duration-500">Kapasitas</span>
                        <span class="text-sm font-black text-voltra-black group-hover:text-white
                                      transition-colors duration-500">500 MWh</span>
                    </div>
                    {{-- Progress bar --}}
                    <div class="h-2 w-full rounded-full bg-voltra-black/10 group-hover:bg-white/20
                                 overflow-hidden transition-colors duration-500">
                        <div class="h-full w-[78%] rounded-full bg-voltra-tangerine
                                     group-hover:bg-white
                                     transition-all duration-700"
                             role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"
                             aria-label="78% kapasitas terisi"></div>
                    </div>
                    <div class="flex items-center justify-between mt-1.5">
                        <span class="text-[10px] text-voltra-black/30 group-hover:text-white/50
                                      transition-colors duration-500">0 MWh</span>
                        <span class="text-[10px] font-semibold text-voltra-tangerine group-hover:text-white
                                      transition-colors duration-500">78% Optimal</span>
                    </div>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2 mt-5">
                        @foreach (['LFP Battery', 'Grid-Scale', 'BESS'] as $tag)
                            <span class="px-3 py-1 rounded-full text-[10px] font-semibold uppercase tracking-wider
                                          bg-voltra-tangerine/10 text-voltra-tangerine
                                          group-hover:bg-white/20 group-hover:text-white
                                          transition-all duration-500">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </article>

            {{-- ╔═══════════════════════════════════════╗
                 ║  CARD 3 — AI-Powered Distribution    ║
                 ║  Bento: lg:col-span-2 lg:row-span-1  ║
                 ╚═══════════════════════════════════════╝ --}}
            <article
                class="group relative md:col-span-2 lg:col-span-2
                       bg-voltra-cotton rounded-[2rem]
                       p-8 lg:p-10
                       overflow-hidden
                       transition-all duration-500 ease-out
                       hover:bg-voltra-tangerine
                       hover:shadow-2xl hover:shadow-voltra-tangerine/30
                       hover:-translate-y-1
                       cursor-default"
                aria-label="Layanan: AI-Powered Distribution"
            >
                {{-- Decorative wave --}}
                <div class="pointer-events-none absolute right-0 bottom-0 w-72 h-72 opacity-100"
                     aria-hidden="true">
                    <svg viewBox="0 0 288 288" fill="none" class="w-full h-full">
                        <path d="M288 288 C200 288 144 220 144 144 C144 68 200 0 288 0"
                              fill="none" stroke="currentColor"
                              class="text-voltra-tangerine/8 group-hover:text-white/8 transition-colors duration-500"
                              stroke-width="48"/>
                        <path d="M288 288 C230 288 190 250 190 200 C190 150 230 100 288 100"
                              fill="none" stroke="currentColor"
                              class="text-voltra-tangerine/12 group-hover:text-white/10 transition-colors duration-500"
                              stroke-width="32"/>
                    </svg>
                </div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center gap-8">

                    {{-- Left: Image + Title --}}
                    <div class="lg:flex-1">
                        {{-- Image --}}
                        <div class="mb-6 relative w-16 h-16 rounded-2xl overflow-hidden
                                     bg-voltra-tangerine/10 shadow-sm border border-voltra-tangerine/20
                                     transition-all duration-500">
                            <img src="{{ asset('images/service-3.png') }}" alt="AI-Powered Distribution"
                                 class="w-full h-full object-cover mix-blend-luminosity opacity-80
                                        group-hover:mix-blend-normal group-hover:opacity-100 group-hover:scale-110
                                        transition-all duration-500" loading="lazy">
                            {{-- Overlay Tangerine --}}
                            <div class="absolute inset-0 bg-voltra-tangerine/20 mix-blend-color
                                        group-hover:bg-transparent transition-colors duration-500" aria-hidden="true"></div>
                        </div>

                        <div class="flex items-start gap-4 mb-3">
                            <h3 class="text-2xl lg:text-3xl font-black tracking-tight text-voltra-black
                                       group-hover:text-white transition-colors duration-500 leading-tight">
                                AI-Powered<br>Distribution
                            </h3>
                            <div class="flex-shrink-0 w-10 h-10 rounded-full
                                         bg-voltra-tangerine/10 group-hover:bg-white/20
                                         flex items-center justify-center
                                         group-hover:translate-x-1 group-hover:-translate-y-1
                                         transition-all duration-500 mt-1">
                                <svg class="w-4 h-4 text-voltra-tangerine group-hover:text-white transition-colors duration-500"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-voltra-black/60 group-hover:text-white/80
                                   text-sm lg:text-base leading-relaxed transition-colors duration-500">
                            Model machine learning kami memprediksi kebutuhan energi
                            sebelum lonjakan terjadi — mengoptimalkan distribusi dan
                            mengurangi pemborosan hingga 40%.
                        </p>
                    </div>

                    {{-- Right: Feature list --}}
                    <div class="lg:flex-shrink-0 lg:w-64 flex flex-col gap-3">
                        @foreach ([
                            ['Prediksi demand real-time',   'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z'],
                            ['Optimisasi rute distribusi',  'M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.271 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z'],
                            ['Deteksi anomali otomatis',    'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
                            ['Laporan efisiensi harian',    'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z'],
                        ] as [$text, $iconPath])
                            <div class="flex items-center gap-3
                                         p-3.5 rounded-2xl
                                         bg-voltra-linen/60 group-hover:bg-white/12
                                         transition-all duration-500">
                                <span class="flex-shrink-0 w-7 h-7 rounded-xl
                                              bg-voltra-tangerine/12 group-hover:bg-white/15
                                              flex items-center justify-center
                                              transition-colors duration-500">
                                    <svg class="w-3.5 h-3.5 text-voltra-tangerine group-hover:text-white
                                                 transition-colors duration-500"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                         aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $iconPath }}"/>
                                    </svg>
                                </span>
                                <span class="text-xs font-medium text-voltra-black/70
                                              group-hover:text-white/85 transition-colors duration-500">
                                    {{ $text }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>

        </div>{{-- /grid --}}

        {{-- ── CTA Bottom ──────────────────────────────────────── --}}
        <div class="mt-12 text-center">
            <a href="#contact-section"
               class="inline-flex items-center gap-2 text-sm font-medium
                      text-voltra-black/50 hover:text-voltra-tangerine
                      transition-colors duration-200 group">
                Diskusikan kebutuhan energi Anda bersama kami
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>
