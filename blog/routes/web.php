<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('posts/', [PostController::class, 'store']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts/{id}/edit', [PostController::class, 'edit']);

Route::put('/posts/{id}', [PostController::class, 'update']);

Route::get('/posts/{id}/delete', [PostController::class, 'destroy']);

