<?php

use App\Http\Controllers\{
    PostController
};

use Illuminate\Support\Facades\Route;

Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

Route::get('/posts/creat', [PostController::class, 'creat'])->name('posts.creat');

Route::get('/posts/departamentos', [PostController::class, 'departamentos'])->name('posts.departamentos');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
/*
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
*/
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


Route::get('/', function () {
    return view('welcome');
});
