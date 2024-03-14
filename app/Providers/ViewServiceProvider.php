<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Customer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.frontend_layout', function ($view) {
            $slug = request()->route('slug');
            $customer = Customer::where('slug', $slug)->first();
            $view->with('customer', $customer);
        });
    }
}
