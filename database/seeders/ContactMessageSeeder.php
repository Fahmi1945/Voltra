<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ContactMessage::create([
            'name' => 'Bambang',
            'email' => 'bambang@example.com',
            'subject' => 'Tanya Kapasitas PLTA',
            'message' => 'Halo VOLTRA, saya ingin tanya kapasitas PLTA di Cirata.',
        ]);
    }
}