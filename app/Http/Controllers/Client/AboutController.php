<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $reviews = Reviews::query()->inRandomOrder()->take(5)->get();
        return view('client.about-us', compact('reviews'));
    }
}
