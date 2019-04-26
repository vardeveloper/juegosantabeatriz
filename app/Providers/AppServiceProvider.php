<?php

namespace App\Providers;

use App\Banner;
use App\CustomerLogo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Models\Category;

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

        $logos = CustomerLogo::all();
        View::share('logos', $logos);

        $categories = Category::orderBy('order', 'asc')->get();
        View::share('headerCategories', $categories);
    }
}
