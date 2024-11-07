<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'posts';

    // Menentukan field yang dapat diisi secara mass-assignment
    protected $fillable = ['title', 'content', 'category_id', 'author_id'];

    // Relasi dengan model Category (Setiap post milik satu kategori)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan model Writer (Setiap post ditulis oleh satu writer)
    public function writer()
    {
        return $this->belongsTo(Writer::class, 'author_id');
    }
}