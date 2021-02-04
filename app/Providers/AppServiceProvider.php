<?php

namespace App\Providers;

use App\Models\Shop;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        try{
            $shopGlobal = Shop::all();
        }catch (\Exception $exception)
        {

        }

        \View::share('shopGlobal', $shopGlobal ?? []);
    }
}
