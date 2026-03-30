<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Rute untuk menampilkan halaman utama
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Rute untuk menangani pengiriman form kontak
// Inilah yang dicari oleh Laravel: rute POST dengan nama 'contact.store'
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');