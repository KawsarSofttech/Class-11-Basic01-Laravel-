<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('age','25');

//        View::composer('*',function($view){
//            $view->with('age','25');
//        });

//        View::composer('congrats',function($view){
//            $view->with('age','25');
//        });

        View::composer(['profile','congrats'],function($view){
            $view->with('age','25');
        });
    }
}
