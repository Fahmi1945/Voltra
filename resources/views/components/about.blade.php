{{-- resources/views/components/about.blade.php --}}
{{-- Blade Anonymous Component: About Us (Misi, Tim Ahli, Nilai Utama) --}}

<section
    id="tentang"
    class="relative bg-voltra-linen py-32 lg:py-48 px-5 overflow-hidden"
    aria-label="Tentang VOLTRA"
>
    <div class="max-w-7xl mx-auto space-y-40 lg:space-y-48">

        {{-- ══════════════════════════════════════════════════════════════
             1. MISI SECTION
             py-32 memberikan ruang napas luas (anti-gravity feel)
        ══════════════════════════════════════════════════════════════════ --}}
        <div class="text-center max-w-5xl mx-auto"
             x-data
             x-intersect.half="$el.classList.add('animate-in')">
             
            <div class="inline-flex items-center gap-2 mb-8 px-4 py-1.5 rounded-full
                        bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                    Misi Kami
                </span>
            </div>

            <h2 class="text-5xl lg:text-6xl xl:text-7xl font-black tracking-tighter text-voltra-black leading-[0.95]">
                Energi <span class="text-voltra-tangerine inline-block [text-shadow:0_0_40px_#FF6D1F33]">Terdesentralisasi</span>,<br>
                Masa Depan yang <span class="italic text-voltra-black/80">Tak Terbatas</span>.
            </h2>

            <p class="mt-10 text-lg lg:text-xl text-voltra-black/60 font-normal leading-relaxed max-w-2xl mx-auto">
                Membangun ekosistem infrastruktur yang menghilangkan tembok antara teknologi kelas atas dan efisiensi lingkungan. Akses energi premium adalah pilar peradaban besok.
            </p>
        </div>


        {{-- ══════════════════════════════════════════════════════════════
             2. TIM AHLI SECTION
             Desain card minimalis bg-voltra-cotton
        ══════════════════════════════════════════════════════════════════ --}}
        <div class="max-w-6xl mx-auto border-t border-voltra-black/5 pt-32 lg:pt-40">
            <div class="text-center mb-20 lg:mb-24">
                <h2 class="text-5xl lg:text-6xl font-black tracking-tight text-voltra-black">
                    Pikiran <span class="text-voltra-tangerine">Brilian</span> di Balik VOLTRA.
                </h2>
                <p class="text-voltra-black/60 mt-6 text-lg max-w-xl mx-auto">
                    Arsitek, sistem analist, dan hardware engineer veteran yang mendedikasikan hidupnya untuk menyongsong era net-zero.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
                {{-- Asep --}}
                <article class="bg-voltra-cotton rounded-[3rem] p-10 lg:p-12 text-center
                                shadow-xl shadow-voltra-black/5 border border-voltra-black/5
                                hover:-translate-y-3 hover:shadow-2xl hover:shadow-voltra-black/10
                                transition-all duration-500">
                    <div class="w-36 h-36 mx-auto mb-8 rounded-full overflow-hidden
                                border border-voltra-tangerine/20 bg-voltra-linen
                                flex items-center justify-center p-1.5 shadow-inner">
                        <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                    flex items-center justify-center">
                            <span class="text-5xl">🧑‍💻</span>
                        </div>
                    </div>
                    <h3 class="text-3xl font-black text-voltra-black mb-1">Asep</h3>
                    <p class="text-sm font-bold uppercase tracking-widest text-voltra-tangerine">Lead Architect</p>
                    <p class="text-sm text-voltra-black/60 mt-5 leading-relaxed">
                        Merancang arsitektur jaringan energi untuk skalabilitas maksimum dan uptime 99.99%.
                    </p>
                </article>

                {{-- Jopan --}}
                <article class="bg-voltra-cotton rounded-[3rem] p-10 lg:p-12 text-center
                                shadow-xl shadow-voltra-black/5 border border-voltra-black/5
                                hover:-translate-y-3 hover:shadow-2xl hover:shadow-voltra-black/10
                                transition-all duration-500 lg:translate-y-12">
                    <div class="w-36 h-36 mx-auto mb-8 rounded-full overflow-hidden
                                border border-voltra-tangerine/20 bg-voltra-linen
                                flex items-center justify-center p-1.5 shadow-inner">
                        <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                    flex items-center justify-center">
                            <span class="text-5xl">🤖</span>
                        </div>
                    </div>
                    <h3 class="text-3xl font-black text-voltra-black mb-1">Jopan</h3>
                    <p class="text-sm font-bold uppercase tracking-widest text-voltra-tangerine">AI Systems</p>
                    <p class="text-sm text-voltra-black/60 mt-5 leading-relaxed">
                        Pakar kecerdasan buatan penggerak algoritma yang mendistribusikan aliran listrik pintar.
                    </p>
                </article>

                {{-- Bambang --}}
                <article class="bg-voltra-cotton rounded-[3rem] p-10 lg:p-12 text-center
                                shadow-xl shadow-voltra-black/5 border border-voltra-black/5
                                hover:-translate-y-3 hover:shadow-2xl hover:shadow-voltra-black/10
                                transition-all duration-500">
                    <div class="w-36 h-36 mx-auto mb-8 rounded-full overflow-hidden
                                border border-voltra-tangerine/20 bg-voltra-linen
                                flex items-center justify-center p-1.5 shadow-inner">
                        <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                    flex items-center justify-center">
                            <span class="text-5xl">⚙️</span>
                        </div>
                    </div>
                    <h3 class="text-3xl font-black text-voltra-black mb-1">Bambang</h3>
                    <p class="text-sm font-bold uppercase tracking-widest text-voltra-tangerine">Hardware Engineer</p>
                    <p class="text-sm text-voltra-black/60 mt-5 leading-relaxed">
                        Desainer infrastruktur fisik kelas industri, merakit setiap Smart Grid dengan presisi tinggi.
                    </p>
                </article>
            </div>
        </div>


        {{-- ══════════════════════════════════════════════════════════════
             3. NILAI UTAMA SECTION
        ══════════════════════════════════════════════════════════════════ --}}
        <div class="bg-voltra-black rounded-[3rem] p-12 lg:p-24 shadow-2xl shadow-voltra-black/20 text-voltra-linen">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black tracking-tight text-white mb-6">
                    Apa yang Memandu <span class="text-voltra-tangerine">Langkah Kami</span>.
                </h2>
                <div class="h-1 w-20 bg-voltra-tangerine/30 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16 divide-y md:divide-y-0 md:divide-x divide-voltra-linen/10">
                
                {{-- Nilai 1 --}}
                <div class="flex flex-col items-center text-center pt-10 md:pt-0 px-6">
                    <div class="w-20 h-20 rounded-[1.5rem] bg-voltra-tangerine/10 border border-voltra-tangerine/20
                                flex items-center justify-center mb-8 shadow-inner hover:scale-110 transition-transform duration-300">
                        {{-- Lucide: Infinity/Rocket/Zap --}}
                        <svg class="w-10 h-10 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 text-white">Inovasi Tanpa Batas</h3>
                    <p class="text-voltra-linen/60 text-base leading-relaxed max-w-sm">
                        Kami selalu mendobrak batasan teknologi konvensional untuk merancang grid rekayasa masa depan dengan standar Apple.
                    </p>
                </div>

                {{-- Nilai 2 --}}
                <div class="flex flex-col items-center text-center pt-10 md:pt-0 px-6">
                    <div class="w-20 h-20 rounded-[1.5rem] bg-voltra-tangerine/10 border border-voltra-tangerine/20
                                flex items-center justify-center mb-8 shadow-inner hover:scale-110 transition-transform duration-300">
                        {{-- Lucide: Leaf/Recycle --}}
                        <svg class="w-10 h-10 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 text-white">Keberlanjutan Organik</h3>
                    <p class="text-voltra-linen/60 text-base leading-relaxed max-w-sm">
                        Menyelaraskan kemajuan operasional grid ekstrem dengan siklus alami lingkungan agar menghasilkan watt paling bersih.
                    </p>
                </div>

                {{-- Nilai 3 --}}
                <div class="flex flex-col items-center text-center pt-10 md:pt-0 px-6">
                    <div class="w-20 h-20 rounded-[1.5rem] bg-voltra-tangerine/10 border border-voltra-tangerine/20
                                flex items-center justify-center mb-8 shadow-inner hover:scale-110 transition-transform duration-300">
                        {{-- Lucide: Globe/Network --}}
                        <svg class="w-10 h-10 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black mb-4 text-white">Akses Global</h3>
                    <p class="text-voltra-linen/60 text-base leading-relaxed max-w-sm">
                        Membawa suplai paling andal ke ruang terpencil sekalipun, karena listrik premium bukan previlese eksklusif.
                    </p>
                </div>

            </div>
        </div>
        
    </div>
</section>
