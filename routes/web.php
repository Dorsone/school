<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Session;

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


Route::get('', [HomeController::class, 'index']);

Route::get('about-us', function () {
    return view('client.about-us');
});

Route::get('teachers', function () {
    return view('client.teachers');
});

Route::get('courses', function () {
    return view('client.courses');
});

Route::get('blog', function () {
    return view('client.blog');
});

Route::get('blog/{blog}', function () {
    return view('client.blog-single');
});

Route::get('contact', function () {
    return view('client.contact');
});

Route::get('lang/{lang}', [HomeController::class, 'lang'])->name('lang');
