<?php

use App\Http\Controllers\PostController; 
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User; 
use App\Models\Post; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
//rutas creadas para la conexion de datos directamente desde la base de datos (transfiere): (actividad realizada el lunes 08/06. )
Route::get('/ejemplo', function(){

    $user_id = Auth::user()->id;
    $user = User::with('post')->find($user_id);

    $user->posts()->create([
        'titulo' => 'Post 1',
        'contenido' => 'Contenido 1'
    ]);
    return $user;
    
})->name('jemplo');

//Creacion de rutas para la conexion de los distintos sitios, vista y modelo. 
Route::get('/posts/index', [PostController::class, 'index'])->name('post.index'); 
Route::get('/post/create', [PostController::class, 'index'])->name('post.create');






Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
 
});

require __DIR__.'/auth.php';

 // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');