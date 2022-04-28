<?php

namespace App\View\Composers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeBodyComposer
{

    /**
     * @var $experiences
     */
    protected $experiences;

    /**
     *
     */
    public function __construct()
    {
        $this->experiences = Cache::rememberForever('experience', function () {
            return Setting::query()->where('section', 'experience')->get();
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
        $view->with('experiences', $this->experiences);
    }
}
