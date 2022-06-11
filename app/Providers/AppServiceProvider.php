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

        Blade::directive('ckeditor', function ($textareaId) {
            return <<<USER
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace($textareaId);
</script>
USER;
        });
    }
}
