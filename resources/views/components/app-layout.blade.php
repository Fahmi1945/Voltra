<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VOLTRA - Empowering the Future</title>

    <!-- Pintu Masuk Tailwind & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-amber-700 font-sans antialiased">

    <!-- Komponen Navbar (Akan kita buat setelah ini) -->
    <x-navbar />

    <!-- Tempat konten halaman landing -->
    <main>
        {{ $slot }}
    </main>

    <!-- Komponen Footer -->
    <x-footer />

</body>

</html>