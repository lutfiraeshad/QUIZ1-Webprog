<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterController extends Controller
{
    // Method index untuk menampilkan halaman writer
    public function index()
    {
        // Logic untuk mengambil data writer atau menampilkan halaman writer
        return view('writers.index'); // Pastikan view ini ada
    }
}
