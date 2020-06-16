<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\shopingcartcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use DB;
use Auth;
use View;
use Session;

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
        // view()->composer('mainpage*',function($view){

            // if(Auth::user())
            // {
                // $categorymain = (new HomeController)->all();

                // $cart = (new shopingcartcontroller)->cart();

                // dd($cart);
                //aa rite j variable banavi ne function call karvanu 6 ne aa categorymain variable global declare thai jase
                //taru cart vadu controller open kaR

                // View::share(['cart'=>$cart]);
                // $view->withcart($cart);
            // }
        // });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        schema::defaultStringLength(191);
        view::composer('mainpage*',function($view){

        $cart = (new shopingcartcontroller)->cart();
        $view->withcart($cart);
    });
    }
}
