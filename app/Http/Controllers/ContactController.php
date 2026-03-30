<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request): RedirectResponse
    {
        // Data otomatis tervalidasi oleh ContactFormRequest
        ContactMessage::create($request->validated());

        // Kirim sinyal sukses ke frontend
        return back()->with('success', 'Pesan Anda telah terkirim! Tim VOLTRA akan segera menghubungi Anda.');
    }
}