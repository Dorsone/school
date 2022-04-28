<?php

namespace App\Providers;

use App\View\Composers\FooterComposer;
use App\View\Composers\HomeBodyComposer;
use App\View\Composers\NavbarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('components.navbar', NavbarComposer::class);
        View::composer('components.footer', FooterComposer::class);
        View::composer('components.home-experience', HomeBodyComposer::class);
    }
}
