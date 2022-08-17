<?php

namespace App\Notifications;

use App\Notifications\Channels\KavenegarChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class KavenegarNotification extends Notification
{
    use Queueable;

    public $code;
    public $template;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($tokens, $template)
    {
        $this->tokens = $tokens;
        $this->template = $template;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [KavenegarChannel::class];
    }

    public function toKavenegar($notifiable)
    {
        return [
            'tokens' => $this->tokens,
            'template' => $this->template
        ];
    }


}
