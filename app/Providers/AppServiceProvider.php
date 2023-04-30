<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        //Tâm An: 12/4/23
        // Bootstrap cho phân trang
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
