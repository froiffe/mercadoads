<?php

namespace App\Providers;

use App\Solution;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        view()->share('formatsHeader', Solution::orderBy('position', 'ASC')->get());
        Blade::component('landings.components.slider', 'slide');
    }
}
