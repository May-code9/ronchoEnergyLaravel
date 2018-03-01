<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['body.index', 'body.contact', 'body.about-us',
      'body.energy', 'body.engineering', 'body.ict', 'body.inews', 'body.iproduct',
      'body.news', 'body.products', 'body.project', 'body.request',
      'body.searchNews', 'body.searchProducts', 'body.services'], 'App\Http\ViewComposers\EmailComposer');

        View::composer(['body.index', 'body.contact', 'body.about-us',
      'body.energy', 'body.engineering', 'body.ict', 'body.inews', 'body.iproduct',
      'body.news', 'body.products', 'body.project', 'body.request',
      'body.searchNews', 'body.searchProducts', 'body.services'], 'App\Http\ViewComposers\RequestComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
