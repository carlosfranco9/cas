<?php

namespace App\Providers;

use App\Http\Controllers\SSOServiceController;
use App\Services\SSOTickerLocker;
use Illuminate\Support\ServiceProvider;
use Leo108\CAS\Contracts\Interactions\UserLogin;
use Leo108\CAS\Contracts\TicketLocker;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserLogin::class, SSOServiceController::class);
        $this->app->bind(TicketLocker::class, SSOTickerLocker::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
