<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;//必須、カリキュラムにない
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
        //必須、カリキュラムにない
        Schema::defaultStringLength(191);
        if(\App::environment(['production']) || \App::environment(['develop'])) {
            \URL::forceScheme('https');
        }
    }
}
