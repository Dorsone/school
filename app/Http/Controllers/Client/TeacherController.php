<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::query()->paginate(6);
        $footer_articles = Article::query()->latest('created_at')->take(2)->get();
        return view('client.teachers', compact('teachers', 'footer_articles'));
    }
}
