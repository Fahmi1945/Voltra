<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Tentukan apakah pengguna diizinkan untuk membuat permintaan ini.
     */
    public function authorize(): bool
    {
        // Diatur ke 'true' agar semua pengunjung landing page bisa mengirim pesan
        return true;
    }

    /**
     * Dapatkan aturan validasi yang berlaku untuk permintaan tersebut.
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'nullable|string|max:30',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|min:10',
        ];
    }

    /**
     * Kustomisasi pesan error dalam Bahasa Indonesia (Opsional).
     */
    public function messages(): array
    {
        return [
            'name.required'    => 'Nama wajib diisi.',
            'name.max'         => 'Nama maksimal 100 karakter.',
            'email.required'   => 'Alamat email wajib diisi.',
            'email.email'      => 'Format email tidak valid.',
            'subject.required' => 'Subjek pesan tidak boleh kosong.',
            'message.required' => 'Isi pesan wajib diisi.',
            'message.min'      => 'Pesan minimal berisi 10 karakter.',
        ];
    }
}