<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    // Tentukan kolom mana saja yang boleh diisi
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_read', // Penting jika nanti ada dashboard admin
    ];
}