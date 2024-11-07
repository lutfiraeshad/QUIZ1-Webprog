<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar artikel berdasarkan kategori.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function show(Category $category)
    {
        // Ambil semua postingan yang terkait dengan kategori ini
        $posts = $category->posts;

        // Kembalikan view category.show dengan data category dan posts
        return view('category.show', compact('category', 'posts'));
    }
}