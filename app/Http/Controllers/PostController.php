<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Menampilkan detail artikel.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\View\View
     */
    public function show(Post $post)
    {
        // Kembalikan view dengan data post yang dipilih
        return view('post.show', compact('post'));
    }

    /**
     * Menampilkan artikel populer berdasarkan views (misalnya).
     *
     * @return \Illuminate\View\View
     */
    public function popular()
    {
        // Ambil 3 postingan dengan jumlah views terbanyak
        $posts = Post::orderByDesc('views')->take(3)->get();

        // Kembalikan view dengan data posts
        return view('popular', compact('posts'));
    }
}