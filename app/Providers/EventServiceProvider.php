<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('Alexusmai\LaravelFileManager\Events\FilesUploaded',
            function ($event) {
//                Log::info('FilesUploaded:', [
//                    $event->disk(),
//                    $event->path(),
//                    $event->files(),
//                    $event->overwrite(),
//                ]);
                foreach ($event->files() as $file) {
                    $supported = ['jpg', 'jpeg', 'gif', 'webp'];
                    if (!in_array($file['extension'], $supported))
                        return;

                    if ($file['extension'] == 'jpeg')
                        $file['extension'] = 'jpg';

                    $image = Image::make(Storage::disk('products')->path($file['path']));
                    $thumb = $image->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    Storage::disk($event->disk())->put('thumbs'. $file['path'], $thumb->encode($file['extension'], 75));
                }
            }
        );
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
