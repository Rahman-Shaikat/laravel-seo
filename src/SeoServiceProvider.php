<?php

namespace WallE\LaravelSeo;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/seo.php' => config_path('seo.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'seo');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/seo.php', 'seo');

        $this->app->singleton('seo', function () {
            return new SeoManager();
        });
    }
}

