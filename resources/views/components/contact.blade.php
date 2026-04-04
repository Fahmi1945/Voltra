{{-- resources/views/components/contact.blade.php --}}
{{-- Blade Anonymous Component: Contact Form Section --}}

<section id="kontak" class="relative py-24 lg:py-32 overflow-hidden" aria-label="Formulir Kontak">

    {{-- Glow latar --}}
    <div class="pointer-events-none absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
                w-[800px] h-[600px] rounded-full
                bg-[radial-gradient(ellipse_at_center,_#FF6D1F0D_0%,_transparent_70%)]
                blur-3xl" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 lg:px-8">

        {{-- ── Section Header ─────────────────────────────────── --}}
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2.5 mb-5
                        px-4 py-1.5 rounded-full
                        bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                <span class="text-voltra-tangerine text-xs font-semibold tracking-wider uppercase">
                    Kontak
                </span>
            </div>
            <h2 class="text-5xl lg:text-6xl font-black tracking-tighter text-voltra-black leading-[0.95] mb-5">
                Mari Berbicara
            </h2>
            <p class="text-lg text-voltra-black/60 leading-relaxed">
                Ada pertanyaan atau ingin berkolaborasi? Kirimkan pesan Anda dan
                tim VOLTRA akan merespons dalam 1×24 jam.
            </p>
        </div>

        {{-- ── Grid: Form + Info ──────────────────────────────── --}}
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 items-start max-w-5xl mx-auto">

            {{-- ══ Info Panel (kiri) ═══════════════════════════════ --}}
            <aside class="lg:col-span-2 flex flex-col gap-6" aria-label="Informasi Kontak">

                {{-- Info Cards --}}
                @foreach ([
                    [
                        'label' => 'Alamat',
                        'value' => 'Sudirman Business District, Jakarta Pusat, Indonesia',
                        'icon'  => 'M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-9 7.5a.75.75 0 0 1-.75-.75v-.5C5.25 14.284 8.026 12 12 12s6.75 2.283 6.75 5.25v.5a.75.75 0 0 1-.75.75H6z M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25z',
                    ],
                    [
                        'label' => 'Email',
                        'value' => 'hello@voltra.id',
                        'icon'  => 'M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75',
                    ],
                    [
                        'label' => 'Telepon',
                        'value' => '+62 21 555 0000',
                        'icon'  => 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6z',
                    ],
                ] as $info)
                    <div class="flex items-start gap-4 p-5 rounded-[2rem] bg-voltra-cotton/50
                                border border-voltra-black/5">
                        <span class="flex-shrink-0 w-10 h-10 rounded-2xl bg-voltra-tangerine/10
                                      flex items-center justify-center">
                            <svg class="w-5 h-5 text-voltra-tangerine" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $info['icon'] }}"/>
                            </svg>
                        </span>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-voltra-black/40 mb-1">
                                {{ $info['label'] }}
                            </p>
                            <p class="text-sm font-medium text-voltra-black leading-snug">
                                {{ $info['value'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

                {{-- Jam Operasional --}}
                <div class="p-5 rounded-[2rem] bg-voltra-tangerine text-white">
                    <p class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-1">
                        Jam Operasional
                    </p>
                    <p class="text-sm font-semibold">Senin – Jumat</p>
                    <p class="text-2xl font-black tracking-tight mt-0.5">09.00 – 18.00 WIB</p>
                </div>
            </aside>

            {{-- ══ Form Panel (kanan) ═══════════════════════════════ --}}
            <div class="lg:col-span-3">

                {{-- ── Banner Sukses ─────────────────────────────── --}}
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
                        class="flex items-start gap-4 p-5 mb-6 rounded-[2rem]
                               bg-voltra-tangerine text-white
                               shadow-xl shadow-voltra-tangerine/30"
                        role="alert"
                        aria-live="polite"
                    >
                        {{-- Checkmark icon --}}
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-white/20
                                      flex items-center justify-center mt-0.5" aria-hidden="true">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </span>
                        <div class="flex-1">
                            <p class="font-bold text-sm mb-0.5">Pesan Terkirim!</p>
                            <p class="text-white/85 text-sm leading-snug">{{ session('success') }}</p>
                        </div>
                        {{-- Dismiss button --}}
                        <button @click="show = false"
                                class="flex-shrink-0 w-7 h-7 rounded-full hover:bg-white/20
                                       flex items-center justify-center transition-colors duration-150"
                                aria-label="Tutup notifikasi">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                @endif

                {{-- ── Form ──────────────────────────────────────── --}}
                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="flex flex-col gap-5"
                    novalidate
                    aria-label="Formulir pesan"
                >
                    @csrf

                    {{-- Baris: Nama + Email --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        {{-- Nama --}}
                        <div class="flex flex-col gap-1.5">
                            <label for="name" class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                                Nama Lengkap <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                            </label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Budi Santoso"
                                autocomplete="name"
                                class="w-full px-5 py-3.5 rounded-[2rem]
                                       bg-voltra-cotton/40 border border-voltra-black/8
                                       text-sm text-voltra-black placeholder:text-voltra-black/30
                                       focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/50
                                       focus:border-voltra-tangerine
                                       hover:border-voltra-black/15
                                       transition-all duration-200
                                       @error('name') border-red-400 bg-red-50/50 @enderror"
                                aria-describedby="name-error"
                                aria-required="true"
                            >
                            @error('name')
                                <p id="name-error" class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1" role="alert">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                                Alamat Email <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                            </label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="budi@email.com"
                                autocomplete="email"
                                class="w-full px-5 py-3.5 rounded-[2rem]
                                       bg-voltra-cotton/40 border border-voltra-black/8
                                       text-sm text-voltra-black placeholder:text-voltra-black/30
                                       focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/50
                                       focus:border-voltra-tangerine
                                       hover:border-voltra-black/15
                                       transition-all duration-200
                                       @error('email') border-red-400 bg-red-50/50 @enderror"
                                aria-describedby="email-error"
                                aria-required="true"
                            >
                            @error('email')
                                <p id="email-error" class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1" role="alert">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Baris: No. Telepon + Subjek --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        {{-- Telepon (opsional) --}}
                        <div class="flex flex-col gap-1.5">
                            <label for="phone" class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                                No. Telepon
                                <span class="normal-case font-normal tracking-normal text-voltra-black/30">(opsional)</span>
                            </label>
                            <input
                                id="phone"
                                type="tel"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+62 812 3456 7890"
                                autocomplete="tel"
                                class="w-full px-5 py-3.5 rounded-[2rem]
                                       bg-voltra-cotton/40 border border-voltra-black/8
                                       text-sm text-voltra-black placeholder:text-voltra-black/30
                                       focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/50
                                       focus:border-voltra-tangerine
                                       hover:border-voltra-black/15
                                       transition-all duration-200
                                       @error('phone') border-red-400 bg-red-50/50 @enderror"
                                aria-describedby="phone-error"
                            >
                            @error('phone')
                                <p id="phone-error" class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1" role="alert">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Subjek --}}
                        <div class="flex flex-col gap-1.5">
                            <label for="subject" class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                                Subjek <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                            </label>
                            <input
                                id="subject"
                                type="text"
                                name="subject"
                                value="{{ old('subject') }}"
                                placeholder="Kerjasama / Pertanyaan / ..."
                                class="w-full px-5 py-3.5 rounded-[2rem]
                                       bg-voltra-cotton/40 border border-voltra-black/8
                                       text-sm text-voltra-black placeholder:text-voltra-black/30
                                       focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/50
                                       focus:border-voltra-tangerine
                                       hover:border-voltra-black/15
                                       transition-all duration-200
                                       @error('subject') border-red-400 bg-red-50/50 @enderror"
                                aria-describedby="subject-error"
                                aria-required="true"
                            >
                            @error('subject')
                                <p id="subject-error" class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1" role="alert">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- Pesan --}}
                    <div class="flex flex-col gap-1.5">
                        <label for="message" class="text-xs font-semibold uppercase tracking-wider text-voltra-black/50">
                            Pesan <span class="text-voltra-tangerine" aria-hidden="true">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Tuliskan pesan Anda di sini..."
                            class="w-full px-5 py-4 rounded-[2rem]
                                   bg-voltra-cotton/40 border border-voltra-black/8
                                   text-sm text-voltra-black placeholder:text-voltra-black/30
                                   focus:outline-none focus:ring-2 focus:ring-voltra-tangerine/50
                                   focus:border-voltra-tangerine
                                   hover:border-voltra-black/15
                                   resize-none transition-all duration-200
                                   @error('message') border-red-400 bg-red-50/50 @enderror"
                            aria-describedby="message-error"
                            aria-required="true"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p id="message-error" class="flex items-center gap-1.5 text-xs text-red-500 font-medium px-1" role="alert">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="flex items-center justify-between gap-4 pt-1">
                        <p class="text-xs text-voltra-black/40 leading-relaxed">
                            Dengan mengirim pesan, Anda menyetujui
                            <a href="#" class="underline underline-offset-2 hover:text-voltra-black transition-colors duration-150">
                                Kebijakan Privasi
                            </a> kami.
                        </p>

                        <button
                            type="submit"
                            class="group flex-shrink-0 inline-flex items-center gap-2.5
                                   px-7 py-3.5 rounded-full
                                   bg-voltra-tangerine text-white font-semibold text-sm
                                   shadow-2xl shadow-voltra-tangerine/40
                                   hover:shadow-[0_20px_60px_-8px_#FF6D1F66]
                                   hover:bg-voltra-tangerine/90
                                   hover:scale-[1.04] active:scale-95
                                   transition-all duration-300
                                   focus-visible:outline-none focus-visible:ring-2
                                   focus-visible:ring-voltra-tangerine focus-visible:ring-offset-2"
                        >
                            Kirim Pesan
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-200"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
