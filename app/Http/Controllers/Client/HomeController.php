<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Article;
use App\Models\Course;
use App\Models\Reviews;
use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $teachers = Teacher::query()->inRandomOrder()->take(4)->get();
        $courses = Course::query()->latest('created_at')->take(4)->get();
        $articles = Article::query()->latest('created_at')->take(3)->get();
        $reviews = Reviews::query()->inRandomOrder()->take(5)->get();
        $footer_articles = $articles->take(2);
        $experiences = Setting::where('section', 'experience')->get();
        return view('client.index', compact('teachers', 'courses', 'articles', 'reviews', 'footer_articles', 'experiences'));
    }

    public function storeReview(ReviewRequest $reviewRequest)
    {
        dd($reviewRequest->validated());
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
