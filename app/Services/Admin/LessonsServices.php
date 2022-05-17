<?php

namespace App\Services\Admin;

use App\Models\Course;
use App\Services\SpatieMediaService;

class LessonsServices
{

    /**
     * @return string[]
     */
    public function index(): array
    {
        return [
            'lessons' => Course::query()->paginate(10),
        ];
    }

    public function store($validated)
    {
        $lesson = Course::query()->create($validated);

        app(SpatieMediaService::class)->uploadImageFormRequest($lesson, $validated['image']);

        return $lesson;
    }

}
