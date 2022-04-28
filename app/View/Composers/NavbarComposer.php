<?php

namespace App\View\Composers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class NavbarComposer
{

    /**
     * @var $contacts
     */
    protected $contacts;

    /**
     *
     */
    public function __construct()
    {
        $this->contacts = Cache::rememberForever('contacts', function () {
            return Setting::query()->where('section', 'contacts')->get();
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
        $view->with('contacts', $this->contacts);
    }
}
