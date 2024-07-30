<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ::view('/ruta', 'vista').name('nombre')
// ::view() Para solo vistas, responden a GET y HEAD
// ::get()
// ::put()
// ...
// ::any() Todo
// ::match(['get','put', ...])

Route::view('/', 'welcome')->name('home');

// 7 rutas de un crud
/* Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); */

// php artisan route:list --path=blog
// Nombre del recurso, controlador [ 'names' => 'Nuevo Nombre del recurso', 'parameters' => [ 'Nombre del parametro viejo' => 'nuevo nombre' ] ]
Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => [
        'blog' => 'post'
    ]
]);

Route::view('/nosotros', 'about')->name('nosotros') /*->middleware('auth') */;
Route::view('/contacto', 'contact')->name('contacto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','password.confirm')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
