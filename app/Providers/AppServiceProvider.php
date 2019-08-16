<?php

namespace App\Providers;

use App\Products;
use App\Slide;
use App\WholeProducts;
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
        view()->composer('layout.slide', function ($view){
            $slides = Slide::where('active', 1)->orderBy('created_at', 'desc')->orderBy('priority', 'desc')->get();
            if(!$slides->isEmpty()){
                $view->with(['slides' => $slides]);
            }
        });
        view()->composer('layout.menubar', function ($view){
            $wholeProducts = WholeProducts::where('active', 1)->get();
            $view->with(['wholeProducts' => $wholeProducts]);
        });

        view()->composer('layout.header', function ($view){
            if(\request()->session()->has('cart')){
                $cart = \request()->session()->get('cart');
                $view->with(['cart' => $cart]);
            }
        });

        view()->composer('pages.cart', function ($view){
            if(\request()->session()->has('cart')){
                $cart = \request()->session()->get('cart');
                $view->with(['cart' => $cart]);
            }
        });

        view()->composer('pages.checkout', function ($view){
            if(\request()->session()->has('cart')){
                $cart = \request()->session()->get('cart');
                $view->with(['cart' => $cart]);
            }
        });

        view()->composer('homepage', function ($view){
            $wholeProducts = WholeProducts::where('active', 1)->get();
            $productArr = [];
            $count = 0;
            foreach($wholeProducts as $wholeProduct){
                foreach($wholeProduct->TypeProducts as $typeProduct){
                    $x = Products::where('id_type', $typeProduct->id);
                    $productArr[$count].array_push($x);
                }
                $count++;
            }
            print_r($x);
            die();
            $view->with(['wholeProducts' => $wholeProducts]);
        });
    }
}
