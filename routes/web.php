<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\LevelsController;
use App\Http\Controllers\Admin\ModeratorController;
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

        Route::resource('levels', LevelsController::class);

        Route::group([
            'prefix' => 'lessons',
            'as' => 'lessons.',
        ], function (){
            Route::get('', [LessonsController::class, 'index'])->name('index');
            Route::get('edit/{lesson}', [LessonsController::class, 'edit'])->name('edit');
            Route::put('update/{lesson}', [LessonsController::class, 'update'])->name('update');
            Route::get('create', [LessonsController::class, 'create'])->name('create');
            Route::post('store', [LessonsController::class, 'store'])->name('store');
            Route::get('{lesson}', [LessonsController::class, 'show'])->name('show');
            Route::delete('destroy/{lesson}', [LessonsController::class, 'destroy'])->name('destroy');
        });

        Route::group([
            'prefix' => 'admins',
            'as' => 'admins.'
        ], function () {
            Route::get('', [AdminController::class, 'admins'])->name('index');
            Route::get('edit/{user}', [AdminController::class, 'adminEdit'])->name('edit');
            Route::put('update/{user}', [AdminController::class, 'adminUpdate'])->name('update');
            Route::get('{user}', [AdminController::class, 'adminsShow'])->name('show');
            Route::delete('{user}', [AdminController::class, 'adminsDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'moderators',
            'as' => 'moderators.'
        ], function () {
            Route::get('', [ModeratorController::class, 'moderators'])->name('index');
            Route::get('create', [ModeratorController::class, 'moderatorCreate'])->name('create');
            Route::post('store', [ModeratorController::class, 'moderatorStore'])->name('store');
            Route::get('edit/{user}', [ModeratorController::class, 'moderatorEdit'])->name('edit');
            Route::put('update/{user}', [ModeratorController::class, 'moderatorUpdate'])->name('update');
            Route::get('{user}', [ModeratorController::class, 'moderatorShow'])->name('show');
            Route::delete('{user}', [ModeratorController::class, 'moderatorDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'teachers',
            'as' => 'teachers.'
        ], function () {
            Route::get('', [AdminController::class, 'teachers'])->name('index');
            Route::get('edit/{teacher}', [AdminController::class, 'teacherEdit'])->name('edit');
            Route::put('update/{teacher}', [AdminController::class, 'teacherUpdate'])->name('update');
            Route::get('create', [AdminController::class, 'teacherCreate'])->name('create');
            Route::post('store', [AdminController::class, 'teacherStore'])->name('store');
            Route::get('{teacher}', [AdminController::class, 'teacherShow'])->name('show');
            Route::delete('{teacher}', [AdminController::class, 'teacherDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'students',
            'as' => 'students.'
        ], function () {
            Route::get('', [AdminController::class, 'students'])->name('index');
            Route::get('edit/{student}', [AdminController::class, 'studentEdit'])->name('edit');
            Route::put('update/{student}', [AdminController::class, 'studentUpdate'])->name('update');
            Route::get('create', [AdminController::class, 'studentCreate'])->name('create');
            Route::post('store', [AdminController::class, 'studentStore'])->name('store');
            Route::get('{student}', [AdminController::class, 'studentShow'])->name('show');
            Route::delete('{student}', [AdminController::class, 'studentDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'reviews',
            'as' => 'reviews.'
        ], function () {
            Route::get('', [AdminController::class, 'reviews'])->name('index');
            Route::get('{reviews}', [AdminController::class, 'reviewsShow'])->name('show');
            Route::get('submit/{reviews}', [AdminController::class, 'reviewsSubmit'])->name('submit');
            Route::delete('{reviews}', [AdminController::class, 'reviewsDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'messages',
            'as' => 'messages.'
        ], function () {
            Route::get('', [AdminController::class, 'messages'])->name('index');
            Route::get('{message}', [AdminController::class, 'messageShow'])->name('show');
            Route::delete('{message}', [AdminController::class, 'messageDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'news',
            'as' => 'news.'
        ], function () {
            Route::get('', [AdminController::class, 'news'])->name('index');
            Route::get('edit/{article}', [AdminController::class, 'newsEdit'])->name('edit');
            Route::put('update/{article}', [AdminController::class, 'newsUpdate'])->name('update');
            Route::get('create', [AdminController::class, 'newsCreate'])->name('create');
            Route::post('store', [AdminController::class, 'newsStore'])->name('store');
            Route::get('{article}', [AdminController::class, 'newsShow'])->name('show');
            Route::delete('{article}', [AdminController::class, 'newsDelete'])->name('delete');
        });

        Route::group([
            'prefix' => 'settings',
            'as' => 'settings.'
        ], function () {
            Route::get('', [AdminController::class, 'settings'])->name('index');
            Route::get('edit/{setting}', [AdminController::class, 'settingsEdit'])->name('edit');
            Route::put('update/{setting}', [AdminController::class, 'settingsUpdate'])->name('update');
            Route::get('{setting}', [AdminController::class, 'settingShow'])->name('show');
        });

    });
});
