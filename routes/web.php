<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FAQCategoryController;
use App\Http\Controllers\FAQitemController;
use App\Http\Controllers\AdminController;


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


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


// Profiel pagina van eigen user
Route::get('/user', function () {
    return view('user');
})->name('user');

//FAQ pagina
Route::get('/FAQ', [FAQitemController::class, 'ShowFAQ'] )->name('FAQ');



//contact pagina
Route::get('/contact', function () {
    return view('contact');
})->name('contact');



//contact pagina
Route::get('/about', function () {
    return view('about');
})->name('about');



//Admin Hoofdpagina
Route::get('/admin', function () {
    return view('admin.home');
})->middleware('admin')->name('admin.home');

//Admin inbox pagina
Route::get('/admin/inbox', [MailController::class, 'inbox'])->name('admin.inbox');

//Admin inbox pagina bericht verwijderen
Route::delete('/inbox/{id}', [MailController::class, 'delete'])->name('inbox.delete');


// Admin pagina voor het creëren van een post
Route::get('/admin/create', function () {
    return view('admin.create');
})->middleware('admin')->name('admin.create');


// Admin pagina voor wijzigen van individuele posts
Route::get('/admin/edit/{id}', [PostController::class, 'edit'])->middleware('admin')->name('admin.edit');




// Admin pagina voor het creëren van FAQ questions en categorieeën
Route::get('/admin/create_question', [FAQCategoryController::class, 'showForm'])->middleware('admin')->name('admin.create_faq');

Route::post('/admin/create_faq', [FAQCategoryController::class, 'store'])->name('admin.store_faq_category');

Route::delete('/admin/faq/category/{id}', [FAQCategoryController::class, 'destroy'])->middleware('admin')->name('admin.delete_faq_category');



// Admin pagina voor het opslaan van FAQ questions en categorieeën
Route::post('admin/faq', [FAQItemController::class, 'store'])->middleware('admin')->name('faq.store');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/faq/{faqItem}/edit', [FAQItemController::class, 'edit'])->name('faq.edit');
});

Route::patch('/faq/{faqItem}', [FAQItemController::class, 'update'])->name('faq.update');

Route::delete('/faq/{faqItem}', [FAQItemController::class, 'destroy'])->name('faq.destroy');



//promoten
Route::get('/admin/promote', [AdminController::class, 'showPromotionForm'])->middleware('admin')->name('admin.promote');

Route::post('/admin/promote', [AdminController::class, 'submitPromotionForm'])->middleware('admin')->name('admin.promote.submit');









// Updaten van profielen
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

// Weergeven van een bepaalde user zijn profiel
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');


Route::post('/contact', [MailController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
