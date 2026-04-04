{{-- resources/views/components/navbar.blade.php --}}
{{-- Blade Anonymous Component: Navbar --}}

<header
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
    :class="scrolled ? 'shadow-sm shadow-voltra-black/5' : 'shadow-none'"
    class="sticky top-0 z-50 w-full
           bg-voltra-linen/80 backdrop-blur-md
           border-b border-voltra-black/5
           transition-shadow duration-300"
    role="banner"
>
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- ── Logo ──────────────────────────────────────────── --}}
            <a href="{{ url('/') }}"
               class="flex items-center gap-2.5 shrink-0
                      hover:opacity-80 active:opacity-60
                      transition-opacity duration-200"
               aria-label="Logo VOLTRA Infrastructure">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo VOLTRA Infrastructure"
                    class="h-8 lg:h-10 w-auto object-contain"
                    draggable="false"
                    loading="eager"
                >
                <span class="text-voltra-black font-black text-xl tracking-tight leading-none">
                    VOLTRA
                </span>
            </a>

            {{-- ── Desktop Menu ──────────────────────────────────── --}}
            <nav aria-label="Menu utama" class="hidden md:flex items-center gap-1">
                @foreach ([
                    [url('/about'), 'Tentang Kami'],
                    [request()->is('/') ? '#layanan' : url('/#layanan'), 'Layanan'],
                    [request()->is('/') ? '#statistik' : url('/#statistik'), 'Statistik'],
                    [request()->is('/') ? '#testimoni' : url('/#testimoni'), 'Testimoni'],
                    [request()->is('/') ? '#contact-section' : url('/#contact-section'), 'Kontak'],
                ] as [$href, $label])
                    <a href="{{ $href }}"
                       class="relative px-4 py-2 rounded-full text-sm font-medium text-voltra-black/70
                              hover:text-voltra-black hover:bg-voltra-black/5
                              transition-all duration-200
                              after:absolute after:bottom-1 after:left-4 after:right-4 after:h-[2px]
                              after:rounded-full after:bg-voltra-tangerine
                              after:scale-x-0 hover:after:scale-x-100
                              after:transition-transform after:duration-300 after:origin-left">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>

            {{-- ── CTA + Hamburger ──────────────────────────────── --}}
            <div class="flex items-center gap-3">

                {{-- CTA Button --}}
                <a href="#mulai"
                   class="hidden md:inline-flex items-center px-5 py-2 rounded-full
                          bg-voltra-tangerine text-white text-sm font-semibold
                          hover:bg-voltra-tangerine/85 hover:scale-[1.04]
                          active:scale-95
                          shadow-md shadow-voltra-tangerine/25
                          transition-all duration-200">
                    Mulai
                </a>

                {{-- Hamburger (mobile only) --}}
                <button
                    @click="open = !open"
                    :aria-expanded="open"
                    aria-controls="mobile-menu"
                    aria-label="Buka/tutup menu"
                    class="md:hidden w-9 h-9 flex flex-col items-center justify-center gap-[5px]
                           rounded-full hover:bg-voltra-black/5
                           transition-colors duration-200 focus-visible:outline-none
                           focus-visible:ring-2 focus-visible:ring-voltra-tangerine"
                >
                    <span
                        :class="open ? 'rotate-45 translate-y-[7px]' : ''"
                        class="block w-[18px] h-[1.5px] bg-voltra-black rounded-full transition-transform duration-300">
                    </span>
                    <span
                        :class="open ? 'opacity-0 scale-x-0' : ''"
                        class="block w-[18px] h-[1.5px] bg-voltra-black rounded-full transition-all duration-200">
                    </span>
                    <span
                        :class="open ? '-rotate-45 -translate-y-[7px]' : ''"
                        class="block w-[18px] h-[1.5px] bg-voltra-black rounded-full transition-transform duration-300">
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{-- ── Mobile Menu ───────────────────────────────────────────── --}}
    <div
        id="mobile-menu"
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-3"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-3"
        class="md:hidden border-t border-voltra-black/5
               bg-voltra-linen/95 backdrop-blur-md"
        role="navigation"
        aria-label="Menu mobile"
    >
        <ul class="max-w-7xl mx-auto px-5 py-4 flex flex-col gap-1">
            @foreach ([
                [url('/about'), 'Tentang Kami'],
                [request()->is('/') ? '#layanan' : url('/#layanan'), 'Layanan'],
                [request()->is('/') ? '#statistik' : url('/#statistik'), 'Statistik'],
                [request()->is('/') ? '#testimoni' : url('/#testimoni'), 'Testimoni'],
                [request()->is('/') ? '#contact-section' : url('/#contact-section'), 'Kontak'],
            ] as [$href, $label])
                <li>
                    <a href="{{ $href }}"
                       @click="open = false"
                       class="flex items-center px-4 py-3 rounded-2xl text-sm font-medium
                              text-voltra-black/75 hover:text-voltra-black
                              hover:bg-voltra-black/5
                              transition-all duration-200">
                        {{ $label }}
                    </a>
                </li>
            @endforeach

            {{-- CTA Mobile --}}
            <li class="pt-2 pb-1">
                <a href="#mulai"
                   @click="open = false"
                   class="flex items-center justify-center w-full px-5 py-3 rounded-full
                          bg-voltra-tangerine text-white text-sm font-semibold
                          hover:bg-voltra-tangerine/85 active:scale-95
                          shadow-md shadow-voltra-tangerine/25
                          transition-all duration-200">
                    Mulai
                </a>
            </li>
        </ul>
    </div>
</header>
