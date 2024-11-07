<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::create([
            'category_id' => 1,
            'title' => 'Human and Computer Interaction',
            'content' => 'Content about HCI...',
            'author' => 'Dr. John Doe',
            'published_at' => now(),
        ]);
    }
}
