<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Services\BlogServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    /**
     * @var BlogServices
     */
    protected $blogServices;

    /**
     * @param BlogServices $blogServices
     */
    public function __construct(BlogServices $blogServices)
    {
        $this->blogServices = $blogServices;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->blogServices->index();
        return view('client.blog', $data);
    }

    /**
     * @param Article $article
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        $data = $this->blogServices->show($article);
        return view('client.blog-single', $data);
    }
}
