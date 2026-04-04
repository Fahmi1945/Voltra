{{-- resources/views/components/testimonials.blade.php --}}
{{-- Blade Anonymous Component: Testimoni --}}

<section
    id="testimoni"
    class="relative bg-voltra-linen py-24 lg:py-32 px-5 overflow-hidden"
    aria-label="Testimoni Klien dan Partner"
>
    <div class="max-w-7xl mx-auto">

        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div class="inline-flex items-center gap-2 mb-5 px-4 py-1.5 rounded-full
                        bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                    Kepercayaan Mitra
                </span>
            </div>
            <h2 class="text-4xl lg:text-5xl xl:text-6xl font-black tracking-tighter text-voltra-black leading-[0.95]">
                Suara dari <span class="text-voltra-tangerine">Garis Depan.</span>
            </h2>
            <p class="mt-5 text-lg text-voltra-black/60 max-w-2xl mx-auto leading-relaxed">
                Ribuan megawatt dan ratusan perusahaan telah membuktikan keandalan
                infrastruktur cerdas VOLTRA untuk kebutuhan energi modern.
            </p>
        </div>

        {{-- Grid Testimoni --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 max-w-6xl mx-auto">

            {{-- ── Data Testimoni ── --}}
            @php
                $testimonials = [
                    [
                        'name' => 'Adrian K.',
                        'role' => 'CEO Tech DataCenter',
                        'quote' => 'Uptime fasilitas kami meningkat signifikan sejak beralih ke grid desentralisasi VOLTRA. Distribusi AI mereka bekerja bagaikan keajaiban, mencegah downtime yang tak terlihat oleh kasat mata.',
                    ],
                    [
                        'name' => 'Dr. Elena Rostiva',
                        'role' => 'Sustainability Expert',
                        'quote' => 'Salah satu kendala terbesar energi terbarukan adalah skalabilitas penyimpanan. Fasilitas BESS yang ditawarkan VOLTRA meruntuhkan penghalang tersebut dengan harmonisasi teknologi paripurna.',
                    ],
                    [
                        'name' => 'Mahendra P.',
                        'role' => 'Government Official',
                        'quote' => 'Integrasi VOLTRA ke dalam jaringan tata kota kami mempercepat agenda net-zero emisi dengan biaya operasional yang sangat efisien. Teknologi ini merupakan pondasi Smart City kami.',
                    ],
                    [
                        'name' => 'Sarah Wijaya',
                        'role' => 'Direktur Operasional Manufaktur',
                        'quote' => 'Latensi pengaliran sub-detik mereka menjamin instrumen industri kritis kami tidak pernah kehilangan presisi. Kami kini tidak bisa membayangkan operasional tanpa mereka.',
                    ],
                ];
            @endphp

            @foreach($testimonials as $testimoni)
                {{-- Card Testimoni
                     bg-voltra-cotton/50 + backdrop-blur-xl
                     rounded-[2.5rem]
                     Apple-esque soft shadows --}}
                <article class="relative bg-voltra-cotton/50 backdrop-blur-xl rounded-[2.5rem]
                                p-8 lg:p-10 border border-voltra-tangerine/5
                                shadow-lg shadow-voltra-black/5
                                hover:-translate-y-1 hover:shadow-xl hover:shadow-voltra-black/10
                                transition-all duration-300">

                    {{-- Ikon Kutipan (Lucide: Quote) --}}
                    <div class="absolute top-8 right-8 text-voltra-tangerine/30 pointer-events-none" aria-hidden="true">
                        <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                            <path d="M10 11h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h3v8l-2 5h-3l2-5zm11 0h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h3v8l-2 5h-3l2-5z"/>
                        </svg>
                    </div>

                    {{-- Konten Kutipan --}}
                    <div class="relative z-10 flex flex-col h-full">
                        <blockquote class="mb-8 mt-2">
                            <p class="text-xl lg:text-2xl font-medium italic leading-relaxed text-voltra-black/80">
                                "{{ $testimoni['quote'] }}"
                            </p>
                        </blockquote>

                        {{-- Metadata Author --}}
                        <div class="mt-auto flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-voltra-linen flex-shrink-0
                                        border border-voltra-tangerine/20 flex items-center justify-center">
                                <span class="font-black text-voltra-tangerine/70 text-lg uppercase">
                                    {{ substr($testimoni['name'], 0, 1) }}
                                </span>
                            </div>
                            <div>
                                <p class="font-black text-voltra-tangerine text-lg tracking-tight">
                                    {{ $testimoni['name'] }}
                                </p>
                                <p class="text-sm font-medium text-voltra-black/50 uppercase tracking-widest mt-0.5">
                                    {{ $testimoni['role'] }}
                                </p>
                            </div>
                        </div>
                    </div>

                </article>
            @endforeach

        </div>
    </div>
</section>
