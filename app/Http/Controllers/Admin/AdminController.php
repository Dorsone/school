<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function admins()
    {
        return view('admin.admins');
    }

    public function moderators()
    {
        return view('admin.moderators');
    }

    public function teachers()
    {
        return view('admin.teachers');
    }

    public function students()
    {
        return view('admin.students');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function messages()
    {
        return view('admin.messages');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
