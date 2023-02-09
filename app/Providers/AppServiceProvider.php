<?php

namespace App\Providers;

use App\Observers\PlanoObserve;
use App\Models\Plano;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Plano::observe(PlanoObserve::class);
        Paginator::useBootstrapFive();
    }
}
