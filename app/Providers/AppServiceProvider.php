<?php

namespace App\Providers;

use App\Models\posyandu;
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
        View::composer('auth.register', function ($view) {
            $pos = posyandu::orderBy('nama_posyandu', 'ASC')->get();
            $view->with('pos', $pos);
        });
    }
}
