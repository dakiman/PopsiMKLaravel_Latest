<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer(["*"], function($view) {
            if(request()->cookie('locale')!=null) {
                app()->setLocale(request()->cookie('locale'));
            }
        });
        view()->composer(['admin.category-*'], function($view){
            $view->with('view', 'category');
        });
        view()->composer(['admin.item-*'], function($view){
            $view->with('view', 'item');
        });
        view()->composer(['admin.news-*'], function($view){
            $view->with('view', 'news');
        });
        view()->composer(['admin.gallery-*'], function($view){
            $view->with('view', 'gallery');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
