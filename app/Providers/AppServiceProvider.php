<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('front-end.layouts.header', function ($view) {
            if (Session('cart')) {
                $old_cart = Session::get('cart');
                $cart = new Cart($old_cart);
            }
            // \dd(Session::get('cart'));
            $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->product_cart ?? null,
                'total_quality' => $cart->total_quality ?? 0, 'total_price' => $cart->total_price ?? 0]);
        });
    }
}
