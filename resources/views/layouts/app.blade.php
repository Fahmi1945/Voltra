{{--
    resources/views/layouts/app.blade.php
    Layout utama Voltra — wrapper ke komponen <x-app-layout>.
    Gunakan layout ini via @extends('layouts.app') atau <x-app-layout>.
--}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description', 'Platform infrastruktur energi masa depan yang cerdas, berkelanjutan, dan terjangkau.')">

    <title>@yield('title', 'VOLTRA') — Empowering the Future</title>

    {{-- Google Font: Instrument Sans (Clean & Modern) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    {{-- Alpine.js — Reactive UI (navbar, accordions, dll.) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{--
        Tailwind v4 dikonfigurasi via @tailwindcss/vite plugin (vite.config.js).
        Token warna Voltra (voltra-linen, voltra-tangerine, dll.) didaftarkan di:
        resources/css/app.css → @theme { --color-voltra-* }
    --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>

{{--
    ┌─────────────────────────────────────────────────────────────┐
    │  DESIGN SYSTEM — VOLTRA                                     │
    │  bg-voltra-linen   → #FAF3E1  (Latar belakang utama)       │
    │  font-sans         → Instrument Sans via @theme Tailwind v4 │
    │  text-voltra-black → #222222  (Teks utama, kontras tinggi)  │
    └─────────────────────────────────────────────────────────────┘
--}}
<body class="bg-voltra-linen font-sans antialiased text-voltra-black min-h-screen flex flex-col">

    {{-- ═══ NAVIGASI ══════════════════════════════════════════════ --}}
    {{--
        Navbar: fixed, glassmorphism saat di-scroll.
        Komponen: resources/views/components/navbar.blade.php
    --}}
    <x-navbar />

    {{-- ═══ KONTEN UTAMA ══════════════════════════════════════════ --}}
    {{--
        pt-16 lg:pt-20   → offset tinggi navbar fixed
        flex-1           → dorong footer ke bawah (sticky footer)

        Transisi antar halaman:
        • CSS View Transitions API (::view-transition-*) di app.css
        • Animasi fade + slide 200–300ms easing smooth
    --}}
    <main class="flex-1 pt-16 lg:pt-20
                 transition-opacity duration-300"
          id="main-content"
          aria-label="Konten halaman">

        @yield('content')

    </main>

    {{-- ═══ FOOTER ════════════════════════════════════════════════ --}}
    {{--
        Footer: bg-voltra-black, teks voltra-linen.
        Komponen: resources/views/components/footer.blade.php
    --}}
    <x-footer />

    @stack('scripts')

</body>

</html>
