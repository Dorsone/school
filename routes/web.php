<?php

use App\Http\Controllers\Admin\AdminController;
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



Auth::routes(['register' => false, 'reset' => false]);
Route::get('', [HomeController::class, 'index'])->name('index');
Route::post('store/review', [HomeController::class, 'storeReview'])->name('store.review');
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
    Route::post('store/message', [ContactController::class, 'storeMessage'])->name('store.message');
});

Route::middleware('auth')->group(function () {
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.'
    ], function () {
        Route::get('', [AdminController::class, 'index'])->name('index');

        Route::group([
            'prefix' => 'admins',
            'as' => 'admins.'
        ], function () {
            Route::get('', [AdminController::class, 'admins'])->name('index');
            Route::get('{user}', [AdminController::class, 'adminsShow'])->name('show');
        });

        Route::group([
            'prefix' => 'moderators',
            'as' => 'moderators.'
        ], function () {
            Route::get('', [AdminController::class, 'moderators'])->name('index');
            Route::get('{user}', [AdminController::class, 'moderatorShow'])->name('show');
        });

        Route::group([
            'prefix' => 'teachers',
            'as' => 'teachers.'
        ], function () {
            Route::get('', [AdminController::class, 'teachers'])->name('index');
            Route::get('{teacher}', [AdminController::class, 'teacherShow'])->name('show');
        });

        Route::group([
            'prefix' => 'students',
            'as' => 'students.'
        ], function () {
            Route::get('', [AdminController::class, 'students'])->name('index');
            Route::get('{student}', [AdminController::class, 'studentShow'])->name('show');
        });

        Route::group([
            'prefix' => 'reviews',
            'as' => 'reviews.'
        ], function () {
            Route::get('', [AdminController::class, 'reviews'])->name('index');
            Route::get('{reviews}', [AdminController::class, 'reviewsShow'])->name('show');
        });

        Route::group([
            'prefix' => 'messages',
            'as' => 'messages.'
        ], function () {
            Route::get('', [AdminController::class, 'messages'])->name('index');
            Route::get('{message}', [AdminController::class, 'messageShow'])->name('show');
        });

        Route::group([
            'prefix' => 'news',
            'as' => 'news.'
        ], function () {
            Route::get('', [AdminController::class, 'news'])->name('index');
            Route::get('{article}', [AdminController::class, 'newsShow'])->name('show');
        });

        Route::group([
            'prefix' => 'settings',
            'as' => 'settings.'
        ], function () {
            Route::get('', [AdminController::class, 'settings'])->name('index');
        });

    });
});
