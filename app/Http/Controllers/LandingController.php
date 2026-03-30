<?php

namespace App\Http\Controllers;

// Pastikan baris ini ada jika tidak dalam satu folder yang sama (tapi di sini biasanya otomatis)
use Illuminate\Routing\Controller as BaseController; 

class LandingController extends Controller // Dia memanggil Controller.php yang baru kita buat
{
    public function index()
    {
        return view('pages.landing');
    }
}