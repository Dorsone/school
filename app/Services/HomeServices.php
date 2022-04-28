<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Course;
use App\Models\Reviews;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;

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
            'reviews' => Reviews::query()->inRandomOrder()->take(5)->get(),
        ];
    }

    public function storeReview($validated)
    {
        dd($validated);
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
