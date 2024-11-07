<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Menentukan nama tabel
    protected $table = 'categories';

    // Menentukan field yang dapat diisi secara mass-assignment
    protected $fillable = ['name'];

    // Relasi dengan model Post (satu kategori bisa memiliki banyak post)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}