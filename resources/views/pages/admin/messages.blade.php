{{-- resources/views/pages/admin/messages.blade.php --}}
{{-- Admin Panel: Pesan Kontak --}}

<x-app-layout>
    <section class="min-h-screen bg-voltra-linen py-10 lg:py-16 px-5">
        <div class="max-w-7xl mx-auto">

            {{-- ── Header ─────────────────────────────────────────── --}}
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                <div>
                    <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 rounded-full
                                bg-voltra-tangerine/10 border border-voltra-tangerine/20">
                        <span class="w-2 h-2 rounded-full bg-voltra-tangerine" aria-hidden="true"></span>
                        <span class="text-voltra-tangerine text-[10px] font-bold tracking-wider uppercase">
                            Admin Panel
                        </span>
                    </div>
                    <h1 class="text-4xl lg:text-5xl font-black tracking-tighter text-voltra-black leading-tight">
                        Pesan Masuk
                    </h1>
                    <p class="text-voltra-black/50 text-sm mt-2">
                        Kelola semua pesan dari formulir kontak VOLTRA.
                    </p>
                </div>

                {{-- Stat pills --}}
                <div class="flex items-center gap-3">
                    <div class="px-4 py-2.5 rounded-2xl bg-voltra-cotton flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-voltra-black/30" aria-hidden="true"></span>
                        <span class="text-xs font-bold text-voltra-black tabular-nums">{{ $totalMessages }}</span>
                        <span class="text-xs text-voltra-black/50">Total</span>
                    </div>
                    <div class="px-4 py-2.5 rounded-2xl bg-voltra-tangerine/10 flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-voltra-tangerine animate-pulse" aria-hidden="true"></span>
                        <span class="text-xs font-bold text-voltra-tangerine tabular-nums">{{ $unreadCount }}</span>
                        <span class="text-xs text-voltra-tangerine/70">Belum Dibaca</span>
                    </div>
                    <a href="{{ url('/') }}"
                       class="px-4 py-2.5 rounded-2xl bg-voltra-black text-voltra-linen text-xs font-semibold
                              hover:bg-voltra-black/85 transition-colors duration-200">
                        ← Kembali
                    </a>
                </div>
            </div>

            {{-- ── Banner Sukses ──────────────────────────────────── --}}
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
                    class="flex items-center gap-3 p-4 mb-8 rounded-2xl
                           bg-voltra-tangerine text-white
                           shadow-lg shadow-voltra-tangerine/20"
                    role="alert"
                >
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                    </svg>
                    <p class="text-sm font-medium flex-1">{{ session('success') }}</p>
                    <button @click="show = false" class="w-6 h-6 rounded-lg hover:bg-white/20 flex items-center justify-center" aria-label="Tutup">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            @endif

            {{-- ── Tabel — Desktop ────────────────────────────────── --}}
            @if ($messages->isEmpty())
                <div class="text-center py-24 rounded-[2rem] bg-voltra-cotton">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-voltra-black/5 flex items-center justify-center">
                        <svg class="w-7 h-7 text-voltra-black/20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z"/>
                        </svg>
                    </div>
                    <p class="text-voltra-black/40 font-medium">Belum ada pesan masuk.</p>
                </div>
            @else
                <div class="rounded-[2rem] overflow-hidden shadow-xl shadow-voltra-black/5">

                    {{-- Table wrapper — horizontal scroll on mobile --}}
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">

                            {{-- Thead: voltra-black --}}
                            <thead>
                                <tr class="bg-voltra-black text-voltra-linen/70">
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest">Status</th>
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest">Pengirim</th>
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest hidden md:table-cell">Subjek</th>
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest hidden lg:table-cell">Pesan</th>
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest hidden sm:table-cell">Waktu</th>
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-widest text-right">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($messages as $msg)
                                    <tr class="border-b border-voltra-black/5
                                               {{ $msg->is_read ? 'bg-voltra-linen' : 'bg-voltra-cotton' }}
                                               hover:bg-voltra-cotton/80 transition-colors duration-150"
                                        id="message-{{ $msg->id }}"
                                    >
                                        {{-- Status dot --}}
                                        <td class="px-6 py-4">
                                            @if ($msg->is_read)
                                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full
                                                              bg-voltra-black/5 text-[10px] font-semibold text-voltra-black/40
                                                              uppercase tracking-wider">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-voltra-black/20"></span>
                                                    Dibaca
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full
                                                              bg-voltra-tangerine/15 text-[10px] font-bold text-voltra-tangerine
                                                              uppercase tracking-wider">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-voltra-tangerine animate-pulse"></span>
                                                    Baru
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Pengirim --}}
                                        <td class="px-6 py-4">
                                            <p class="text-sm font-bold text-voltra-black tracking-tight leading-tight">
                                                {{ $msg->name }}
                                            </p>
                                            <p class="text-xs text-voltra-black/40 mt-0.5 break-all">
                                                {{ $msg->email }}
                                            </p>
                                            @if ($msg->phone)
                                                <p class="text-[10px] text-voltra-black/30 mt-0.5">
                                                    {{ $msg->phone }}
                                                </p>
                                            @endif
                                        </td>

                                        {{-- Subjek --}}
                                        <td class="px-6 py-4 hidden md:table-cell">
                                            <p class="text-sm font-medium text-voltra-black max-w-[200px] truncate">
                                                {{ $msg->subject }}
                                            </p>
                                        </td>

                                        {{-- Pesan (terpotong) --}}
                                        <td class="px-6 py-4 hidden lg:table-cell">
                                            <p class="text-xs text-voltra-black/55 leading-relaxed
                                                       max-w-[280px] line-clamp-2">
                                                {{ $msg->message }}
                                            </p>
                                        </td>

                                        {{-- Waktu --}}
                                        <td class="px-6 py-4 hidden sm:table-cell">
                                            <p class="text-xs text-voltra-black/40 tabular-nums whitespace-nowrap">
                                                {{ $msg->created_at->translatedFormat('d M Y') }}
                                            </p>
                                            <p class="text-[10px] text-voltra-black/25 mt-0.5 tabular-nums">
                                                {{ $msg->created_at->translatedFormat('H:i') }} WIB
                                            </p>
                                        </td>

                                        {{-- Aksi --}}
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end gap-2">

                                                {{-- Mark Read / Unread --}}
                                                @if ($msg->is_read)
                                                    <form action="{{ route('admin.messages.unread', $msg) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                                title="Tandai belum dibaca"
                                                                class="w-8 h-8 rounded-xl bg-voltra-black/5
                                                                       hover:bg-voltra-tangerine/15
                                                                       flex items-center justify-center
                                                                       transition-colors duration-200">
                                                            <svg class="w-4 h-4 text-voltra-black/30 hover:text-voltra-tangerine" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.messages.read', $msg) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                                title="Tandai sudah dibaca"
                                                                class="w-8 h-8 rounded-xl
                                                                       bg-voltra-tangerine/15 hover:bg-voltra-tangerine/25
                                                                       flex items-center justify-center
                                                                       transition-colors duration-200">
                                                            <svg class="w-4 h-4 text-voltra-tangerine" fill="none"
                                                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M4.5 12.75l6 6 9-13.5"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif

                                                {{-- Delete --}}
                                                <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST"
                                                      onsubmit="return confirm('Hapus pesan dari {{ $msg->name }}?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            title="Hapus pesan"
                                                            class="w-8 h-8 rounded-xl bg-voltra-black/5
                                                                   hover:bg-red-50 flex items-center justify-center
                                                                   transition-colors duration-200 group">
                                                        <svg class="w-4 h-4 text-voltra-black/25 group-hover:text-red-500
                                                                     transition-colors duration-200"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Expanded message detail (mobile) --}}
                                    <tr class="md:hidden border-b border-voltra-black/5
                                               {{ $msg->is_read ? 'bg-voltra-linen' : 'bg-voltra-cotton' }}"
                                        x-data="{ expanded: false }">
                                        <td colspan="6" class="px-6 pb-3">
                                            <button @click="expanded = !expanded"
                                                    class="text-xs font-medium text-voltra-tangerine hover:underline">
                                                <span x-text="expanded ? 'Sembunyikan' : 'Lihat detail'"></span>
                                            </button>
                                            <div x-show="expanded" x-collapse class="mt-2 space-y-1">
                                                <p class="text-xs text-voltra-black/50">
                                                    <strong>Subjek:</strong> {{ $msg->subject }}
                                                </p>
                                                <p class="text-xs text-voltra-black/50 leading-relaxed">
                                                    {{ $msg->message }}
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Pagination --}}
                @if ($messages->hasPages())
                    <div class="mt-8 flex justify-center">
                        <div class="[&_.pagination]:flex [&_.pagination]:items-center [&_.pagination]:gap-1
                                    [&_.page-link]:px-3.5 [&_.page-link]:py-2 [&_.page-link]:rounded-xl
                                    [&_.page-link]:text-xs [&_.page-link]:font-medium
                                    [&_.page-link]:text-voltra-black/50 [&_.page-link]:bg-voltra-cotton
                                    [&_.page-link]:transition-colors [&_.page-link]:duration-200
                                    [&_.page-link:hover]:bg-voltra-tangerine/15 [&_.page-link:hover]:text-voltra-tangerine
                                    [&_.active_.page-link]:bg-voltra-tangerine [&_.active_.page-link]:text-white
                                    [&_.disabled_.page-link]:opacity-30">
                            {{ $messages->links() }}
                        </div>
                    </div>
                @endif
            @endif

        </div>
    </section>
</x-app-layout>
