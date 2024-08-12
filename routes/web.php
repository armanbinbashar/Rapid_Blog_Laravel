<?php

use App\Http\Controllers\BlogController;
use App\http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// using closure
// Route::get('/', function () {
//     // fetch posts from db
//     // fetch category from db
//     return view('welcome');
// });


// using controller
// to welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');


// to blog page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.show');


// to single blog post
Route::get('/blog/post', [BlogController::class, 'show'])->name('blog.show');


// to about page
Route::get('/rapidpost-about-us', function(){
    return view('about');
})->name('about');


// to contact page
Route::get('/rapidpost-contact-us', [ContactController::class, 'index'])->name('contact.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


