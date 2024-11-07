<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::get('/detail/{post}', [PostController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/popular', [PostController::class, 'popular']);
