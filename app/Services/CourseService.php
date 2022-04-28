<?php

namespace App\Services;

use App\Models\Course;

class CourseService
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'courses' => Course::query()->paginate(6),
        ];
    }

    /**
     * @param $course
     * @return array
     */
    public function show($course): array
    {
        return [
            'course' => $course,
        ];
    }
}
