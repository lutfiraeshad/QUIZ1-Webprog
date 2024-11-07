<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan 5 artikel terbaru.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil 5 postingan terbaru
        $posts = Post::latest()->paginate(5);
        
        // Kembalikan view home dengan data posts
        return view('home', compact('posts'));
    }
}