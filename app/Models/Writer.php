<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'writers';

    // Menentukan field yang dapat diisi secara mass-assignment
    protected $fillable = ['name', 'expertise', 'profile_picture'];

    // Relasi dengan model Post (Setiap writer bisa menulis banyak post)
    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}