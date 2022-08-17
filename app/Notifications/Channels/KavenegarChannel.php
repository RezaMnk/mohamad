<?php

namespace App\Notifications\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Kavenegar;

class KavenegarChannel
{
    public function send($notifiable, Notification $notification)
    {
        try{

            if (!method_exists($notification, 'toKavenegar'))
                throw new Exception('toKavenegar not found');

            $data = $notification->toKavenegar($notifiable);

            $receptor = $notifiable->phone;
            $template = $data['template'];
            $tokens = $data['tokens'];

            /*
             * Send null for tokens not defined in the template
             */
            $result = Kavenegar::VerifyLookup($receptor, $tokens[0], $tokens[1] ?? null, $tokens[2] ?? null, $template, $type = null);
            if ($result)
            {
                //
            }
            dump($tokens);
        }
        catch(ApiException $e){
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            throw $e;
        }
        catch(HttpException $e){
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            throw $e;
        }
    }
}
