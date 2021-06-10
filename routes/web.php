<?php

use App\Http\Controllers\{
    PostController
};

use App\Http\Controllers\{
    ContactController
};

use Illuminate\Support\Facades\Route;


                /* Rotas paginas site*/
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/departamentos', [PostController::class, 'departamentos'])->name('posts.departamentos');

Route::get('/posts/about', [PostController::class, 'about'])->name('posts.about');

Route::get('/posts/contacto', [ContactController::class, 'contacto'])->name('posts.contacto');

Route::get('/posts/congregacoes', [PostController::class, 'congregacoes'])->name('posts.congregacoes');

Route::get('/posts/show', [ContactController::class, 'show'])->name('posts.show');
                /* Rotas funcinais site*/

Route::post('/posts/addcontact', [ContactController::class, 'addcontact'])->name('posts.addcontact');

Route::delete('/posts/{id}', [ContactController::class, 'destroy'])->name('posts.destroy');

Route::get('/posts/edita/{id}', [ContactController::class, 'edita'])->name('posts.edita');

Route::put('/posts/{id}', [ContactController::class, 'update'])->name('posts.update');




Route::get('/', function () {
    return view('welcome');


});
