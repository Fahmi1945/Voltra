{{-- resources/views/components/stats.blade.php --}}
{{-- Blade Anonymous Component: VOLTRA Impact — High Contrast Stats --}}

<section
    id="statistik"
    class="relative bg-voltra-black overflow-hidden py-24 lg:py-36 px-5"
    aria-label="VOLTRA Impact — Statistik Kunci"
    x-data="voltraStats()"
    x-init="init()"
>

    {{-- ── Dekoratif: glow tangerine di tengah (subtle) ───────── --}}
    <div class="pointer-events-none absolute inset-0
                bg-[radial-gradient(ellipse_80%_50%_at_50%_100%,_#FF6D1F10_0%,_transparent_70%)]"
         aria-hidden="true"></div>

    {{-- Dekoratif: grid dot pattern --}}
    <div class="pointer-events-none absolute inset-0 opacity-[0.03]"
         style="background-image: radial-gradient(circle, #FAF3E1 1px, transparent 1px);
                background-size: 32px 32px;"
         aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto">

        {{-- ── Section Label ───────────────────────────────────── --}}
        <div class="text-center mb-16 lg:mb-20"
             :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
             style="transition: opacity 600ms ease, transform 600ms ease;">

            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full
                        bg-voltra-tangerine/15 border border-voltra-tangerine/25">
                <span class="w-2 h-2 rounded-full bg-voltra-tangerine animate-pulse" aria-hidden="true"></span>
                <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                    VOLTRA Impact
                </span>
            </div>

            <h2 class="text-5xl lg:text-6xl font-black tracking-tighter text-voltra-linen leading-[0.92]">
                Angka yang
                <span class="text-voltra-tangerine
                             [text-shadow:0_0_60px_#FF6D1F55,0_0_20px_#FF6D1F33]">
                    Berbicara.
                </span>
            </h2>
            <p class="mt-5 text-voltra-linen/50 text-lg max-w-lg mx-auto leading-relaxed">
                Dampak nyata yang telah VOLTRA wujudkan untuk masa depan energi Indonesia.
            </p>
        </div>

        {{-- ── Stats Grid ──────────────────────────────────────── --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-voltra-linen/5 rounded-[2.5rem] overflow-hidden">

            {{-- ── Stat 1: Megawatt ─────────────────────────────── --}}
            <div
                class="group relative bg-voltra-black px-8 py-12 lg:px-12 lg:py-16
                       flex flex-col items-center text-center gap-5
                       hover:bg-voltra-linen/[0.03] transition-colors duration-300"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                style="transition: opacity 700ms ease 100ms, transform 700ms ease 100ms;"
            >
                {{-- Icon --}}
                <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/10 border border-voltra-tangerine/20
                             flex items-center justify-center mb-2
                             group-hover:bg-voltra-tangerine/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-voltra-tangerine" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>

                {{-- Number: Count-up --}}
                <div aria-label="500 lebih Megawatt Distributed">
                    <div class="flex items-end justify-center gap-1">
                        <span class="text-[clamp(3.5rem,8vw,5rem)] font-black leading-none
                                      text-voltra-tangerine tracking-tighter tabular-nums
                                      [text-shadow:0_0_40px_#FF6D1F44]"
                              x-text="counters[0].display">
                            0
                        </span>
                        <span class="text-3xl font-black text-voltra-tangerine mb-2 leading-none">+</span>
                    </div>
                    <p class="text-xl font-bold text-voltra-linen tracking-tight mt-1">Megawatt</p>
                    <p class="text-sm font-semibold text-voltra-linen/40 uppercase tracking-widest mt-1">
                        Distributed
                    </p>
                </div>

                {{-- Divider bar --}}
                <div class="w-12 h-0.5 rounded-full bg-voltra-tangerine/30
                             group-hover:w-20 group-hover:bg-voltra-tangerine/60
                             transition-all duration-500"></div>

                <p class="text-xs text-voltra-linen/35 leading-relaxed max-w-[200px]">
                    Kapasitas daya yang sudah berhasil didistribusikan ke jaringan nasional.
                </p>
            </div>

            {{-- ── Stat 2: Homes Powered ────────────────────────── --}}
            <div
                class="group relative bg-voltra-black px-8 py-12 lg:px-12 lg:py-16
                       flex flex-col items-center text-center gap-5
                       hover:bg-voltra-linen/[0.03] transition-colors duration-300
                       border-l border-r border-voltra-linen/5"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                style="transition: opacity 700ms ease 250ms, transform 700ms ease 250ms;"
            >
                {{-- Icon --}}
                <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/10 border border-voltra-tangerine/20
                             flex items-center justify-center mb-2
                             group-hover:bg-voltra-tangerine/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-voltra-tangerine" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                </div>

                {{-- Number: Count-up --}}
                <div aria-label="12 ribu lebih Homes Powered">
                    <div class="flex items-end justify-center gap-1">
                        <span class="text-[clamp(3.5rem,8vw,5rem)] font-black leading-none
                                      text-voltra-tangerine tracking-tighter tabular-nums
                                      [text-shadow:0_0_40px_#FF6D1F44]"
                              x-text="counters[1].display">
                            0
                        </span>
                        <span class="text-3xl font-black text-voltra-tangerine mb-2 leading-none">K+</span>
                    </div>
                    <p class="text-xl font-bold text-voltra-linen tracking-tight mt-1">Homes</p>
                    <p class="text-sm font-semibold text-voltra-linen/40 uppercase tracking-widest mt-1">
                        Powered
                    </p>
                </div>

                {{-- Divider bar --}}
                <div class="w-12 h-0.5 rounded-full bg-voltra-tangerine/30
                             group-hover:w-20 group-hover:bg-voltra-tangerine/60
                             transition-all duration-500"></div>

                <p class="text-xs text-voltra-linen/35 leading-relaxed max-w-[200px]">
                    Rumah tangga yang kini menikmati energi bersih dari infrastruktur VOLTRA.
                </p>
            </div>

            {{-- ── Stat 3: Carbon Reduction ─────────────────────── --}}
            <div
                class="group relative bg-voltra-black px-8 py-12 lg:px-12 lg:py-16
                       flex flex-col items-center text-center gap-5
                       hover:bg-voltra-linen/[0.03] transition-colors duration-300"
                :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                style="transition: opacity 700ms ease 400ms, transform 700ms ease 400ms;"
            >
                {{-- Icon --}}
                <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/10 border border-voltra-tangerine/20
                             flex items-center justify-center mb-2
                             group-hover:bg-voltra-tangerine/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-voltra-tangerine" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                    </svg>
                </div>

                {{-- Number: Count-up --}}
                <div aria-label="85 persen Carbon Reduction">
                    <div class="flex items-end justify-center gap-1">
                        <span class="text-[clamp(3.5rem,8vw,5rem)] font-black leading-none
                                      text-voltra-tangerine tracking-tighter tabular-nums
                                      [text-shadow:0_0_40px_#FF6D1F44]"
                              x-text="counters[2].display">
                            0
                        </span>
                        <span class="text-3xl font-black text-voltra-tangerine mb-2 leading-none">%</span>
                    </div>
                    <p class="text-xl font-bold text-voltra-linen tracking-tight mt-1">Carbon</p>
                    <p class="text-sm font-semibold text-voltra-linen/40 uppercase tracking-widest mt-1">
                        Reduction
                    </p>
                </div>

                {{-- Divider bar --}}
                <div class="w-12 h-0.5 rounded-full bg-voltra-tangerine/30
                             group-hover:w-20 group-hover:bg-voltra-tangerine/60
                             transition-all duration-500"></div>

                <p class="text-xs text-voltra-linen/35 leading-relaxed max-w-[200px]">
                    Penurunan emisi karbon dibandingkan pembangkit konvensional yang kami ganti.
                </p>
            </div>

        </div>{{-- /stats grid --}}

        {{-- ── Bottom CTA strip ────────────────────────────────── --}}
        <div
            class="mt-16 lg:mt-20 flex flex-col sm:flex-row items-center justify-between gap-6
                   p-6 lg:p-8 rounded-[2rem]
                   bg-voltra-linen/[0.04] border border-voltra-linen/8"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: opacity 700ms ease 600ms, transform 700ms ease 600ms;"
        >
            <div>
                <p class="text-voltra-linen font-bold text-lg tracking-tight">
                    Bergabunglah dengan ekosistem energi VOLTRA.
                </p>
                <p class="text-voltra-linen/40 text-sm mt-1">
                    Target kami: 10 GW kapasitas terbarukan pada 2030.
                </p>
            </div>
            <a href="#kontak"
               class="flex-shrink-0 inline-flex items-center gap-2.5
                      px-6 py-3 rounded-full
                      bg-voltra-tangerine text-white font-semibold text-sm
                      shadow-xl shadow-voltra-tangerine/40
                      hover:bg-voltra-tangerine/90 hover:scale-[1.04] active:scale-95
                      transition-all duration-300 whitespace-nowrap">
                Mulai Perjalanan Anda
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════
     Alpine.js Component: Count-Up + Scroll Reveal
     Menggunakan IntersectionObserver untuk trigger animasi
     saat section masuk viewport.
══════════════════════════════════════════════════════════════════ --}}
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('voltraStats', () => ({
            visible: false,
            started: false,

            counters: [
                { target: 500, current: 0, display: '0',  duration: 1800, suffix: '' },
                { target: 12,  current: 0, display: '0',  duration: 1600, suffix: '' },
                { target: 85,  current: 0, display: '0',  duration: 1400, suffix: '' },
            ],

            init() {
                // IntersectionObserver — trigger saat 30% section terlihat
                const observer = new IntersectionObserver(
                    (entries) => {
                        if (entries[0].isIntersecting && !this.started) {
                            this.visible  = true;
                            this.started  = true;

                            // Mulai semua counter dengan stagger kecil
                            this.counters.forEach((counter, index) => {
                                setTimeout(() => this.animateCounter(counter), index * 150);
                            });

                            observer.disconnect();
                        }
                    },
                    { threshold: 0.30 }
                );
                observer.observe(this.$el);
            },

            /**
             * Animasi count-up dengan easing easeOutCubic
             * @param {object} counter
             */
            animateCounter(counter) {
                const startTime  = performance.now();
                const startValue = 0;
                const endValue   = counter.target;

                const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

                const step = (currentTime) => {
                    const elapsed  = currentTime - startTime;
                    const progress = Math.min(elapsed / counter.duration, 1);
                    const eased    = easeOutCubic(progress);

                    counter.current = Math.round(startValue + (endValue - startValue) * eased);
                    counter.display = counter.current.toLocaleString('id-ID');

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        counter.display = endValue.toLocaleString('id-ID');
                    }
                };

                requestAnimationFrame(step);
            }
        }));
    });
</script>
