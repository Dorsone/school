<?php

namespace App\View\Composers;

use App\Models\Level;
use Illuminate\View\View;

class RequestQuoteComposer
{

    /**
     * @var $levels
     */
    protected $levels;

    /**
     *
     */
    public function __construct()
    {
        $this->levels = Level::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('levels', $this->levels);
    }
}
