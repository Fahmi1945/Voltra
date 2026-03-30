<x-app-layout>
    <!-- Test apakah Tailwind sudah jalan -->
    <section class="min-h-screen flex items-center justify-center bg-voltra-blue">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white mb-4">VOLTRA IS LIVE</h1>
            <p class="text-white/80">Tailwind CSS & Vite sudah terkoneksi dengan sempurna.</p>
            <form action="{{ route('contact.store') }}" method="POST" class="mt-10 p-5 bg-white rounded shadow">
                @csrf
                <input type="text" name="name" placeholder="Nama" class="border p-2">
                <input type="email" name="email" placeholder="Email" class="border p-2">
                <input type="text" name="subject" placeholder="Subjek" class="border p-2">
                <textarea name="message" placeholder="Pesan" class="border p-2"></textarea>
                <button type="submit" class="bg-blue-500 text-white p-2">Kirim Test</button>
            </form>
        </div>
    </section>
</x-app-layout>