<?php

namespace App\Services\Admin;

use App\Models\Message;
use App\Models\Reviews;
use App\Models\Student;
use App\Models\Teacher;

class AdminServices
{
    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'reviews' => Reviews::count(),
            'teachers' => Teacher::count(),
            'students' => Student::count(),
            'messages' => Message::count(),
        ];
    }
}
