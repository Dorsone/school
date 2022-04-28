<?php

namespace App\View\Composers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class FooterComposer
{

    /**
     * @var $footer_articles
     */
    protected $footer_articles;

    /**
     *
     */
    public function __construct()
    {
        $this->footer_articles = Cache::rememberForever('articlesFooter', function () {
            return Article::query()->latest()->take(2)->get();
        });
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('footer_articles', $this->footer_articles);
    }
}
