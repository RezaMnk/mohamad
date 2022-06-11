<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('recaptcha', function () {
            return "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
        <div class=\"g-recaptcha\" data-sitekey=\"{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}\"></div>";
        });

        Blade::directive('user', function ($user) {
            $user = User::findOrFail($user);

            return <<<USER
<div class="card border mb-0">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <div class="icon-block icon-block-sm bg-info icon-block-floating mr-2">
                    <i class="fa fa-user"></i>
                </div>
            </div>
            <span class="font-size-13">$user->name</span>
            <h2 class="mb-0 ml-auto font-weight-bold text-info primary-font line-height-30">$user->id</h2>
        </div>
        <div class="progress" style="height: 5px">
            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
USER;
        });
    }
}
