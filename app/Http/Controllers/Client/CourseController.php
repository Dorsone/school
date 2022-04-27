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
        $footer_articles = Article::query()->latest('created_at')->take(2)->get();
        return view('client.courses', compact('courses', 'footer_articles'));
    }
}
