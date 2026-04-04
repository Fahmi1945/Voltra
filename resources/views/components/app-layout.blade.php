{{-- resources/views/components/app-layout.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $description ?? 'Platform infrastruktur energi masa depan yang cerdas, berkelanjutan, dan terjangkau.' }}">

    <title>{{ $title ?? 'VOLTRA' }} — Empowering the Future</title>

    {{-- Google Font: Instrument Sans --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    {{-- Alpine.js (untuk interaktivitas navbar) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Tailwind v4 + App JS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{--
    body: bg-voltra-linen  → background utama (#FAF3E1)
    font-sans              → Instrument Sans dari @theme Tailwind v4
    antialiased            → subpixel rendering yang halus
    text-voltra-black      → warna teks default
--}}
<body class="bg-voltra-linen font-sans antialiased text-voltra-black min-h-screen flex flex-col">

    {{-- ─── NAV ─────────────────────────────────────────────────── --}}
    <x-navbar />

    {{-- ─── MAIN CONTENT ───────────────────────────────────────── --}}
    {{--
        pt-16 lg:pt-20 → kompensasi tinggi navbar fixed (h-16 / h-20)
        flex-1         → agar footer selalu terdorong ke bawah
    --}}
    <main class="flex-1 pt-16 lg:pt-20" id="main-content">
        {{ $slot }}
    </main>

    {{-- ─── FOOTER ─────────────────────────────────────────────── --}}
    <x-footer />

</body>

</html>