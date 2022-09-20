<?php

namespace App\Providers;

use App\Helpers\Cart\ZarinService;
use Illuminate\Support\ServiceProvider;

class ZarinServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('zarin', function () {
            return new ZarinService();
        });
    }
}
