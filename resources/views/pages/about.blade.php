<x-app-layout>
    @section('title', 'Tentang Kami')

    <div class="bg-voltra-linen min-h-screen pt-32 pb-24 lg:pt-40 lg:pb-32 px-5 overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-32">

            {{-- ══════════════════════════════════════════════════════════════
                 1. MISI SECTION
            ══════════════════════════════════════════════════════════════════ --}}
            <section aria-label="Misi VOLTRA" class="text-center max-w-5xl mx-auto">
                <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full
                            bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                    <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                    <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                        Misi Kami
                    </span>
                </div>

                <h1 class="text-5xl lg:text-6xl xl:text-[4.5rem] font-black tracking-tighter text-voltra-black leading-[0.95]">
                    Energi <span class="text-voltra-tangerine inline-block [text-shadow:0_0_40px_#FF6D1F33]">Terdesentralisasi</span>,<br>
                    Masa Depan yang <span class="italic text-voltra-black/80">Tak Terbatas</span>.
                </h1>

                <p class="mt-8 text-lg lg:text-xl text-voltra-black/60 font-normal leading-relaxed max-w-2xl mx-auto">
                    Kami percaya bahwa akses terhadap energi bersih bukanlah hak istimewa, melainkan fondasi bagi peradaban yang maju. VOLTRA berdedikasi membangun infrastruktur masa depan yang mengutamakan harmoni antara teknologi dan alam.
                </p>
            </section>

            {{-- ══════════════════════════════════════════════════════════════
                 2. TIM AHLI SECTION
            ══════════════════════════════════════════════════════════════════ --}}
            <section aria-label="Tim Ahli">
                <div class="text-center mb-16">
                    <h2 class="text-4xl lg:text-5xl font-black tracking-tight text-voltra-black">
                        Pikiran <span class="text-voltra-tangerine">Brilian</span> di Balik VOLTRA.
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    {{-- Asep --}}
                    <article class="bg-voltra-cotton rounded-[2.5rem] p-8 lg:p-10 text-center
                                    shadow-xl shadow-voltra-black/5 hover:-translate-y-2
                                    transition-transform duration-300">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden
                                    border border-voltra-tangerine/20 bg-voltra-linen
                                    flex items-center justify-center p-1">
                            {{-- Placeholder image --}}
                            <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                        flex items-center justify-center">
                                <span class="text-4xl">🧑‍💻</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-voltra-black mb-1">Asep</h3>
                        <p class="text-sm font-semibold uppercase tracking-wider text-voltra-tangerine">Lead Architect</p>
                        <p class="text-sm text-voltra-black/60 mt-4 leading-relaxed">
                            Merancang arsitektur jaringan energi VOLTRA untuk skalabilitas maksimum dan uptime tanpa kompromi.
                        </p>
                    </article>

                    {{-- Jopan --}}
                    <article class="bg-voltra-cotton rounded-[2.5rem] p-8 lg:p-10 text-center
                                    shadow-xl shadow-voltra-black/5 hover:-translate-y-2
                                    transition-transform duration-300 lg:translate-y-8">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden
                                    border border-voltra-tangerine/20 bg-voltra-linen
                                    flex items-center justify-center p-1">
                            <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                        flex items-center justify-center">
                                <span class="text-4xl">🤖</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-voltra-black mb-1">Jopan</h3>
                        <p class="text-sm font-semibold uppercase tracking-wider text-voltra-tangerine">AI Systems</p>
                        <p class="text-sm text-voltra-black/60 mt-4 leading-relaxed">
                            Pakar kecerdasan buatan penggerak algoritma cerdas yang memprediksi dan mendistribusikan aliran listrik.
                        </p>
                    </article>

                    {{-- Bambang --}}
                    <article class="bg-voltra-cotton rounded-[2.5rem] p-8 lg:p-10 text-center
                                    shadow-xl shadow-voltra-black/5 hover:-translate-y-2
                                    transition-transform duration-300">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden
                                    border border-voltra-tangerine/20 bg-voltra-linen
                                    flex items-center justify-center p-1">
                            <div class="w-full h-full rounded-full bg-voltra-black/5 object-cover
                                        flex items-center justify-center">
                                <span class="text-4xl">⚙️</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-voltra-black mb-1">Bambang</h3>
                        <p class="text-sm font-semibold uppercase tracking-wider text-voltra-tangerine">Hardware Engineer</p>
                        <p class="text-sm text-voltra-black/60 mt-4 leading-relaxed">
                            Desainer infrastruktur fisik kelas industri yang merakit setiap komponen Smart Grid dengan presisi tinggi.
                        </p>
                    </article>
                </div>
            </section>

            {{-- ══════════════════════════════════════════════════════════════
                 3. NILAI UTAMA SECTION
            ══════════════════════════════════════════════════════════════════ --}}
            <section aria-label="Nilai Utama VOLTRA" class="bg-voltra-black text-voltra-linen rounded-[3rem] p-10 lg:p-16
                                                            shadow-2xl shadow-voltra-black/20">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full
                                bg-voltra-linen/10 border border-voltra-linen/20">
                        <span class="text-white text-xs font-semibold tracking-wider uppercase">Nilai Panduan</span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-black tracking-tight text-white">
                        Apa yang Memandu <span class="text-voltra-tangerine">Langkah Kami</span>.
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 divide-y md:divide-y-0 md:divide-x divide-voltra-linen/10">
                    {{-- Nilai 1 --}}
                    <div class="flex flex-col items-center text-center pt-8 md:pt-0 px-4">
                        <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/20 flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Inovasi Tanpa Batas</h3>
                        <p class="text-voltra-linen/60 text-sm leading-relaxed">
                            Kami selalu mendobrak batasan teknologi untuk merancang grid masa depan yang belum pernah ada sebelumnya.
                        </p>
                    </div>

                    {{-- Nilai 2 --}}
                    <div class="flex flex-col items-center text-center pt-8 md:pt-0 px-4">
                        <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/20 flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Keberlanjutan Organik</h3>
                        <p class="text-voltra-linen/60 text-sm leading-relaxed">
                            Operasional kami selaras dengan siklus alami lingkungan, memastikan setiap watt diproduksi secara bertanggung jawab.
                        </p>
                    </div>

                    {{-- Nilai 3 --}}
                    <div class="flex flex-col items-center text-center pt-8 md:pt-0 px-4">
                        <div class="w-14 h-14 rounded-2xl bg-voltra-tangerine/20 flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-voltra-tangerine" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Akses Global</h3>
                        <p class="text-voltra-linen/60 text-sm leading-relaxed">
                            Membawa energi andal ke semua lapisan masyarakat karena kami percaya listrik adalah nyala dari harapan bersama.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-app-layout>
