<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $footer_articles = Article::query()->latest()->take(2)->get();
        return view('client.contact', compact('footer_articles'));
    }
}