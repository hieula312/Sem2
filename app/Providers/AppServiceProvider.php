<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        view()->composer('admin.layout.header', function ($view){
            if(Auth::check()){
                $user = Auth::user();
                $view->with(['user' => $user]);
            }
        });
        view()->composer('admin.layout.sidebar', function ($view){
            if(Auth::check()){
                $user = Auth::user();
                $view->with(['user' => $user]);
            }
        });
    }
}
