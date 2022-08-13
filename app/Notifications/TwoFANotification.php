<?php

namespace App\Notifications;

use App\Notifications\Channels\KavenegarChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFANotification extends Notification
{
    use Queueable;

    public $code;
    public $phone;

    private string $template = 'verify';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code, $phone)
    {
        $this->code = $code;
        $this->phone = $phone;
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
            'code' => $this->code,
            'phone' => $this->phone,
            'template' => $this->template
        ];
    }


}
