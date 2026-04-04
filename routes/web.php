<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Rute untuk menampilkan halaman utama
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Rute untuk halaman Tentang Kami
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Rute untuk menangani pengiriman form kontak
// Inilah yang dicari oleh Laravel: rute POST dengan nama 'contact.store'
// Batasi maksimal 5 pesan per menit dari 1 alamat IP
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');

// ─── Admin Routes (dilindungi oleh SimpleAdminAuth) ──────────
// Akses: /admin/messages?key=VOLTRA-ADMIN-2026
use App\Http\Controllers\AdminMessageController;

Route::prefix('admin')
    ->middleware('admin')
    ->group(function () {
        // Daftar semua pesan kontak
        Route::get('/messages', [AdminMessageController::class, 'index'])
            ->name('admin.messages');

        // Tandai sebagai sudah dibaca
        Route::patch('/messages/{message}/read', [AdminMessageController::class, 'markAsRead'])
            ->name('admin.messages.read');

        // Tandai sebagai belum dibaca
        Route::patch('/messages/{message}/unread', [AdminMessageController::class, 'markAsUnread'])
            ->name('admin.messages.unread');

        // Hapus pesan
        Route::delete('/messages/{message}', [AdminMessageController::class, 'destroy'])
            ->name('admin.messages.destroy');
    });