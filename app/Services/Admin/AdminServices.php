<?php

namespace App\Services\Admin;

use App\Models\Article;
use App\Models\Message;
use App\Models\Reviews;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

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
            'admins' => User::query()->where('role', '3')->count(),
            'moderators' => User::query()->where('role', '2')->count(),
            'news' => Article::query()->count(),
        ];
    }

    /**
     * @return array
     */
    public function admins(): array
    {
        return [
            'admins' => User::query()->where('role', '3')->paginate(10),
        ];
    }

    public function moderators()
    {
        return [
            'moderators' => User::query()->where('role', '2')->paginate(10),
        ];
    }
}
