<?php

namespace App\Services;

use App\Models\Teacher;

class TeacherServices
{

    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'teachers' => Teacher::query()->paginate(8),
        ];
    }

}
