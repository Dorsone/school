<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Course;
use App\Models\Reviews;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;

class HomeServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'teachers' => Teacher::query()->inRandomOrder()->take(4)->get(),
            'courses' => Course::query()->latest('created_at')->take(4)->get(),
            'articles' => Article::query()->latest('created_at')->take(3)->get(),
            'reviews' => Reviews::query()->inRandomOrder()->where('status', 1)->take(5)->get(),
        ];
    }

    /**
     * @param $validated
     * @return RedirectResponse
     */
    public function storeReview($validated): RedirectResponse
    {
        Reviews::query()->create($validated);
        return back();
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
