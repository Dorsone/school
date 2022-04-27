<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;
use App\Models\Reviews;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teachers = Teacher::query()->inRandomOrder()->take(4)->get();
        $courses = Course::query()->latest('created_at')->take(4)->get();
        $articles = Article::query()->latest('created_at')->take(3)->get();
        $reviews = Reviews::query()->inRandomOrder()->take(5)->get();

        return view('client.index', compact('teachers', 'courses', 'articles', 'reviews'));
    }

    /**
     * @param $lang
     * @return RedirectResponse
     */
    public function lang($lang): RedirectResponse
    {
        $lang = in_array($lang, ['uz', 'ru', 'en']) ? $lang : 'uz';
        session()->put(['lang' => $lang]);
        return back();
    }
}
