<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Reviews;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $reviews = Reviews::query()->inRandomOrder()->take(5)->get();
        return view('client.about-us', compact('reviews'));
    }
}
