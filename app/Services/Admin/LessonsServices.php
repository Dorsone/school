<?php

namespace App\Services\Admin;

use App\Models\Course;

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

}
