<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::query()->paginate(6);
        return view('client.blog', compact('articles'));
    }

    public function show(Article $article)
    {
        $popular = Article::query()->inRandomOrder()->take(3)->get();
        $latest = Article::query()->latest('created_at')->take(2)->get();
        return view('client.blog-single', compact('popular', 'latest', 'article'));
    }
}
