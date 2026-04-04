{{-- resources/views/components/hero.blade.php --}}
{{-- Blade Anonymous Component: Hero Section --}}

<section
    id="beranda"
    class="relative min-h-screen flex items-center overflow-hidden"
    aria-label="Hero — Beranda"
>

    {{-- ══════════════════════════════════════════════════════════
         LATAR BELAKANG — noise texture + radial glow halus
    ══════════════════════════════════════════════════════════════ --}}
    {{-- Radial glow tangerine (kiri atas) --}}
    <div class="pointer-events-none absolute -top-40 -left-40 w-[600px] h-[600px]
                rounded-full
                bg-[radial-gradient(ellipse_at_center,_#FF6D1F22_0%,_transparent_70%)]
                blur-3xl"
         aria-hidden="true">
    </div>

    {{-- Radial glow tangerine (kanan bawah, lebih tipis) --}}
    <div class="pointer-events-none absolute bottom-0 right-0 w-[500px] h-[500px]
                rounded-full
                bg-[radial-gradient(ellipse_at_center,_#FF6D1F14_0%,_transparent_70%)]
                blur-2xl"
         aria-hidden="true">
    </div>

    {{-- ══════════════════════════════════════════════════════════
         GRID LAYOUT — teks kiri, visual kanan
    ══════════════════════════════════════════════════════════════ --}}
    <div class="relative z-10 max-w-7xl mx-auto w-full px-5 lg:px-8
                grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-8
                items-center py-24 lg:py-0 min-h-screen">

        {{-- ── Kolom Kiri: Teks ─────────────────────────────────── --}}
        <div class="flex flex-col gap-8 max-w-2xl"
             x-data
             x-intersect.once="$el.classList.add('animate-in')">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2.5 w-fit
                        px-4 py-1.5 rounded-full
                        bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                <span class="w-2 h-2 rounded-full bg-voltra-tangerine animate-pulse"
                      aria-hidden="true"></span>
                <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                    Infrastruktur Energi Masa Depan
                </span>
            </div>

            {{-- ── HEADLINE ──────────────────────────────────────── --}}
            {{--
                text-[clamp(4rem,8vw,6rem)] → fluid typography
                font-black tracking-tighter  → berat & rapat ala Apple
            --}}
            <h1 class="text-[clamp(3.5rem,8vw,6rem)] leading-[0.95] font-black tracking-tighter text-voltra-black">
                Infrastruktur<br>
                <em class="not-italic text-voltra-tangerine
                           [text-shadow:0_0_60px_#FF6D1F55,0_0_20px_#FF6D1F33]">
                    Energi
                </em><br>
                <span class="text-voltra-black">Masa Depan</span>
            </h1>

            {{-- ── SUB-HEADLINE ──────────────────────────────────── --}}
            <p class="text-lg lg:text-xl font-normal text-voltra-black/70 leading-relaxed max-w-lg">
                VOLTRA menghubungkan kebutuhan energi dengan solusi cerdas.
                Kami membangun ekosistem yang <span class="font-medium text-voltra-black">berkelanjutan</span>,
                andal, dan terjangkau — untuk Indonesia yang lebih terang.
            </p>

            {{-- ── CTA BUTTONS ───────────────────────────────────── --}}
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">

                {{-- Primary CTA — efek shadow menyala --}}
                <a href="#layanan"
                   class="group inline-flex items-center gap-2.5
                          px-7 py-4 rounded-full
                          bg-voltra-tangerine text-white font-semibold text-base
                          shadow-2xl shadow-voltra-tangerine/40
                          hover:shadow-[0_20px_60px_-8px_#FF6D1F66]
                          hover:bg-voltra-tangerine/90
                          hover:scale-[1.04] active:scale-95
                          transition-all duration-300">
                    Mulai Sekarang
                    {{-- Arrow icon --}}
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

                {{-- Secondary CTA —ghost --}}
                <a href="#tentang"
                   class="inline-flex items-center gap-2 px-2 py-4
                          text-voltra-black/70 font-medium text-base
                          hover:text-voltra-black
                          underline-offset-4 hover:underline
                          transition-colors duration-200">
                    Pelajari Lebih Lanjut
                </a>
            </div>

            {{-- ── Micro-stats ───────────────────────────────────── --}}
            <div class="flex items-center gap-8 pt-4 border-t border-voltra-black/8">
                @foreach ([
                    ['10 GW',  'Kapasitas Target'],
                    ['50+',    'Mitra Strategis'],
                    ['2030',   'Target Net-Zero'],
                ] as [$value, $label])
                    <div class="flex flex-col gap-0.5">
                        <span class="text-2xl font-black text-voltra-black tracking-tight">
                            {{ $value }}
                        </span>
                        <span class="text-xs text-voltra-black/50 font-medium uppercase tracking-wider">
                            {{ $label }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ── Kolom Kanan: Visual Abstrak ─────────────────────── --}}
        <div class="relative hidden lg:flex items-center justify-center h-full py-20"
             aria-hidden="true">

            {{-- Container Orbit --}}
            <div class="relative w-[480px] h-[480px]">

                {{-- Lingkaran orbit 1 --}}
                <div class="absolute inset-0 rounded-full border border-voltra-tangerine/12
                             animate-[spin_30s_linear_infinite]"></div>

                {{-- Lingkaran orbit 2 (berlawanan, lebih kecil) --}}
                <div class="absolute inset-[60px] rounded-full border border-voltra-tangerine/20
                             animate-[spin_20s_linear_infinite_reverse]"></div>

                {{-- Lingkaran orbit 3 --}}
                <div class="absolute inset-[120px] rounded-full border border-voltra-tangerine/30
                             animate-[spin_12s_linear_infinite]"></div>

                {{-- Core Glow — pusat --}}
                <div class="absolute inset-[160px] rounded-full
                             bg-[radial-gradient(ellipse_at_center,_#FF6D1F_0%,_#FF6D1F00_70%)]
                             opacity-30 blur-sm
                             animate-[pulse_3s_ease-in-out_infinite]"></div>

                {{-- Core Solid --}}
                <div class="absolute inset-[175px] rounded-full
                             bg-voltra-tangerine
                             shadow-[0_0_80px_30px_#FF6D1F44,inset_0_0_30px_#FF6D1F88]">
                </div>

                {{-- Dot mengitari orbit 1 --}}
                <div class="absolute top-1/2 left-1/2
                             -translate-x-1/2 -translate-y-1/2
                             w-full h-full
                             animate-[spin_30s_linear_infinite]">
                    <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2
                                  w-3 h-3 rounded-full bg-voltra-tangerine
                                  shadow-[0_0_12px_4px_#FF6D1F88]">
                    </span>
                </div>

                {{-- Dot mengitari orbit 2 --}}
                <div class="absolute top-1/2 left-1/2
                             -translate-x-1/2 -translate-y-1/2
                             w-[360px] h-[360px]
                             animate-[spin_20s_linear_infinite_reverse]">
                    <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2
                                  w-2 h-2 rounded-full bg-voltra-tangerine/70
                                  shadow-[0_0_8px_3px_#FF6D1F55]">
                    </span>
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2
                                  w-1.5 h-1.5 rounded-full bg-voltra-tangerine/50
                                  shadow-[0_0_6px_2px_#FF6D1F44]">
                    </span>
                </div>

                {{-- Label floating --}}
                <div class="absolute -right-6 top-1/3
                             px-4 py-2.5 rounded-2xl
                             bg-voltra-linen/90 backdrop-blur-sm
                             border border-voltra-black/8
                             shadow-lg shadow-voltra-black/8
                             text-left">
                    <p class="text-[10px] font-semibold uppercase tracking-widest text-voltra-black/40">Output</p>
                    <p class="text-sm font-black text-voltra-black tracking-tight">10 GW Bersih</p>
                </div>

                <div class="absolute -left-8 bottom-1/3
                             px-4 py-2.5 rounded-2xl
                             bg-voltra-tangerine
                             shadow-xl shadow-voltra-tangerine/40
                             text-left">
                    <p class="text-[10px] font-semibold uppercase tracking-widest text-white/70">Status</p>
                    <p class="text-sm font-black text-white tracking-tight">Live · 2025</p>
                </div>

            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2
                flex flex-col items-center gap-2 text-voltra-black/30
                animate-bounce" aria-hidden="true">
        <span class="text-xs font-medium tracking-wider uppercase">Scroll</span>
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>

</section>
