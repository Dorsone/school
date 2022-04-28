<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::query()->paginate(6);
        return view('client.courses', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('client.courses-single', compact('course'));
    }
}
