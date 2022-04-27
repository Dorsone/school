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
        $footer_articles = [$articles->items()[0], $articles->items()[1]];
        return view('client.blog', compact('articles', 'footer_articles'));
    }

    public function show(Article $article)
    {
        $popular = Article::query()->inRandomOrder()->take(3)->get();
        $footer_articles = Article::query()->latest('created_at')->take(2)->get();
        return view('client.blog-single', compact('popular', 'footer_articles', 'article'));
    }
}
