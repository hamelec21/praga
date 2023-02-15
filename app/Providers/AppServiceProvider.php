<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        //
        Carbon::setLocale('es');
       // Carbon::setUTF(true);
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_TIME,'es_CL.UTF-8');
    }
}
