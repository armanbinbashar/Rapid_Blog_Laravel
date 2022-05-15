<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


// using controller
//home page
Route::get('/', [WelcomeController::class, 'index']);


//blog page
Route::get('/blog', [BlogController::class, 'index']);

//single blog post
Route::get('/blog/single-blog-post', [BlogController::class, 'show']);

//about page
Route::get('/about', function () {
    return view('about');
});

//contact page
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
