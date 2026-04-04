<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminMessageController extends Controller
{
    /**
     * Tampilkan semua pesan kontak — terbaru di atas.
     * Menggunakan Eloquent → aman dari SQL Injection.
     */
    public function index(): View
    {
        $messages = ContactMessage::query()
            ->latest()              // ORDER BY created_at DESC
            ->paginate(15);         // 15 per halaman

        // Hitung statistik header
        $totalMessages = ContactMessage::count();
        $unreadCount   = ContactMessage::where('is_read', false)->count();

        return view('pages.admin.messages', compact(
            'messages',
            'totalMessages',
            'unreadCount',
        ));
    }

    /**
     * Tandai satu pesan sebagai sudah dibaca.
     * Route model binding → aman, otomatis 404 jika tidak ditemukan.
     */
    public function markAsRead(ContactMessage $message): RedirectResponse
    {
        $message->update(['is_read' => true]);

        return back()->with('success', 'Pesan dari "' . $message->name . '" ditandai sudah dibaca.');
    }

    /**
     * Tandai satu pesan sebagai belum dibaca.
     */
    public function markAsUnread(ContactMessage $message): RedirectResponse
    {
        $message->update(['is_read' => false]);

        return back()->with('success', 'Pesan dari "' . $message->name . '" ditandai belum dibaca.');
    }

    /**
     * Hapus satu pesan (soft-delete bisa ditambahkan nanti).
     */
    public function destroy(ContactMessage $message): RedirectResponse
    {
        $name = $message->name;
        $message->delete();

        return back()->with('success', 'Pesan dari "' . $name . '" berhasil dihapus.');
    }
}
