<?php

namespace App\Services;

use App\Models\Reviews;

class AboutServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'reviews' => $reviews = Reviews::query()->inRandomOrder()->take(5)->get(),
        ];
    }
}
