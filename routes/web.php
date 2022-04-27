<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;

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


Route::get('', [HomeController::class, 'index'])->name('index');
Route::get('lang/{lang}', [HomeController::class, 'lang'])->name('lang');

Route::group([
    'prefix' => 'about-us',
    'as' => 'about-us.'
], function () {
    Route::get('', [AboutController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => 'teachers',
    'as' => 'teachers.'
], function () {
    Route::get('', [TeacherController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => 'courses',
    'as' => 'courses.'
], function () {
    Route::get('', [CourseController::class, 'index'])->name('index');
    Route::get('{course}', [CourseController::class, 'show'])->name('show');
});

Route::group([
    'prefix' => 'blog',
    'as' => 'blog.'
], function () {
    Route::get('', [BlogController::class, 'index'])->name('index');
    Route::get('{article}', [BlogController::class, 'show'])->name('show');
});

Route::group([
    'prefix' => 'contact',
    'as' => 'contact.'
], function () {
    Route::get('', [ContactController::class, 'index'])->name('index');
});
