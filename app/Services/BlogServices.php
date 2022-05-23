<?php

namespace App\Services;

use App\Models\Article;

class BlogServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'articles' => Article::query()->with('user')->paginate(6),
        ];
    }

    /**
     * @param $article
     * @return array
     */
    public function show($article): array
    {
        return [
            'populars' => Article::query()->inRandomOrder()->take(3)->get(),
            'article' => $article,
        ];
    }

}
