<x-app-layout>
    <section class="min-h-screen flex flex-col items-center justify-center bg-voltra-linen relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-2 bg-voltra-tangerine"></div>

        <div class="text-center p-10 z-10">
            <h1 class="text-7xl font-black text-voltra-black mb-6 tracking-tighter">
                VOLTRA <span class="text-voltra-tangerine italic">IS LIVE</span>
            </h1>
            <p class="text-xl text-voltra-black/80 font-medium max-w-2xl mx-auto leading-relaxed">
                Teknologi infrastruktur energi masa depan dengan estetika premium dan performa tanpa batas.
            </p>
            <a href="#contact-section"
                class="mt-10 inline-block bg-voltra-black text-voltra-linen px-10 py-4 rounded-full font-bold hover:bg-voltra-tangerine transition-all duration-300 shadow-xl">
                Hubungi Kami
            </a>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-32 bg-voltra-tangerine flex items-center justify-center">
            <div class="text-center">
                <div class="text-6xl font-black text-voltra-black">V</div>
                <div class="text-xl font-bold text-voltra-black tracking-widest mt-1">VOLTRA</div>
            </div>
        </div>
    </section>

    <section id="contact-section" class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black text-voltra-black tracking-tight">Mulai <span
                        class="text-voltra-tangerine">Koneksi.</span></h2>
                <p class="text-voltra-black/60 mt-4 font-medium text-lg">Kirimkan pesan Anda, tim ahli VOLTRA akan
                    segera merespon.</p>
            </div>

            @if(session('success'))
            <div
                class="bg-voltra-tangerine text-voltrablack p-6 rounded-2xl mb-10 font-bold shadow-2xl shadow-voltra-tangerine/20 animate-pulse text-center">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST"
                class="space-y-8 bg-voltra-linen p-10 rounded-[2.5rem] shadow-sm">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col space-y-2">
                        <label class="font-bold text-voltra-black ml-1">Nama Lengkap</label>
                        <input type="text" name="name" required placeholder="Contoh: Bambang"
                            class="bg-white border-none rounded-2xl p-4 focus:ring-4 focus:ring-voltra-tangerine/30 transition shadow-sm">
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label class="font-bold text-voltra-black ml-1">Email Aktif</label>
                        <input type="email" name="email" required placeholder="name@example.com"
                            class="bg-white border-none rounded-2xl p-4 focus:ring-4 focus:ring-voltra-tangerine/30 transition shadow-sm">
                    </div>
                </div>

                <div class="flex flex-col space-y-2">
                    <label class="font-bold text-voltra-black ml-1">Subjek</label>
                    <input type="text" name="subject" required placeholder="Apa yang ingin Anda tanyakan?"
                        class="bg-white border-none rounded-2xl p-4 focus:ring-4 focus:ring-voltra-tangerine/30 transition shadow-sm">
                </div>

                <div class="flex flex-col space-y-2">
                    <label class="font-bold text-voltra-black ml-1">Pesan</label>
                    <textarea name="message" rows="5" required placeholder="Tuliskan detail kebutuhan Anda di sini..."
                        class="bg-white border-none rounded-2xl p-4 focus:ring-4 focus:ring-voltra-tangerine/30 transition shadow-sm"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-voltra-tangerine text-voltrablack font-black py-5 rounded-2xl text-xl hover:scale-[1.02] active:scale-95 transition-all shadow-xl shadow-voltra-tangerine/30 uppercase tracking-widest">
                    Kirim Pesan Sekarang
                </button>
            </form>
        </div>
    </section>
</x-app-layout>