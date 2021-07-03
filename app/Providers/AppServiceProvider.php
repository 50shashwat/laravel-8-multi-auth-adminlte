<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('web', function ($user) {
            return Auth::guard('web')->check();
        });
        Gate::define('admin', function ($user) {
            return Auth::guard('admin')->check();
        });
    }
}
