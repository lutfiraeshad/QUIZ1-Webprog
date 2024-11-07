<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Menampilkan view untuk halaman About Us
        return view('about.index');
    }
}
