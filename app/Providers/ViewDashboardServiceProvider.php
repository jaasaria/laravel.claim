<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewDashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer('back.pages.dashboard',function($view){

            // $countPurchases  =  TrPurchases::count();
            // $countSales  =  TrSales::count();
            // $countStockIn  =  TrStockIn::count();
            // $countStockOut  =  TrStockOut::count();
            
            // $view->with(['countPurchases'=>$countPurchases,'countSales'=>$countSales,'countStockIn'=>$countStockIn,'countStockOut'=>$countStockOut]);

        });


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
