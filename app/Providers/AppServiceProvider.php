<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application Services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
