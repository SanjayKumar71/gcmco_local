<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
       $siteSettings  = \App\Models\SiteSetting::find(1);
       $campaigns     = \App\Models\Campaign::get();
       View::share('siteSettings',
           array(
               'siteSettings'=>$siteSettings,
               'campaigns'=>$campaigns
           ));

        Schema::defaultStringLength(191);
    }
}
