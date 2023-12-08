<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Home pagina met berichten
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// // Berichten weergeven op het dasboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// web.php
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


// Profiel pagina van eigen user
Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/FAQ', function () {
    return view('FAQ');
})->name('FAQ');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Admin pagina voor het creëren van een post
Route::get('/admin/create', function () {
    return view('admin.create');
})->middleware('admin')->name('admin.create');

// Admin pagina voor het wijzigen of verwijderen van een post
// Route::get('/admin/edit', function () {
//     return view('admin.edit');
// })->middleware('admin')->name('admin.edit');

// individuele posts
Route::get('/admin/edit/{id}', [PostController::class, 'edit'])
    ->middleware('admin')
    ->name('admin.edit');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Opslaan van nieuwe post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Wijzigen van een post
Route::patch('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

// Verwijderen van een post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


require __DIR__.'/auth.php';
