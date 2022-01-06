<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Blade;
use Helper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(resource_path('www/views'), 'www');
        $this->loadViewsFrom(resource_path('cms/views'), 'cms');
        $this->loadViewsFrom(resource_path('_/views'), 'global'); // namespaced global views

        $this->loadTranslationsFrom(resource_path('_/lang'), 'global'); // namespaced global translations
        $this->loadJsonTranslationsFrom(resource_path('_/lang')); // Translations in the main json file will override these
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::forceScheme(env('APP_SCHEME'));

        $this->app->instance('path.lang', resource_path(Helper::subdomain() . '/lang'));

        Blade::directive('fas', function ($expression) {
            return Helper::renderFontAwesomeSvg($expression, 'fas');
        });

        Blade::directive('far', function ($expression) {
            return Helper::renderFontAwesomeSvg($expression, 'far');
        });

        Blade::directive('fal', function ($expression) {
            return Helper::renderFontAwesomeSvg($expression, 'fal');
        });

        Blade::directive('fad', function ($expression) {
            return Helper::renderFontAwesomeSvg($expression, 'fad');
        });

        Blade::directive('fab', function ($expression) {
            return Helper::renderFontAwesomeSvg($expression, 'fab');
        });

        /*DB::listen(function ($query) {
            Log::debug($query->sql);
            Log::debug($query->bindings);
        });*/
    }
}
