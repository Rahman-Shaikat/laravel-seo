<?php

use WallE\LaravelSeo\SeoManager;

if (! function_exists('seo')) {
    function seo(): SeoManager
    {
        return app('seo');
    }
}
