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

            $receptor = $data['phone'];
            $token = $data['code'];

            /*
             * Send null for tokens not defined in the template
             */
            $token2 = null;
            $token3 = null;

            $template = $data['template'];

            $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type = null);
            if($result){
                foreach($result as $r){
                    echo "messageid = $r->messageid";
                    echo "message = $r->message";
                    echo "status = $r->status";
                    echo "statustext = $r->statustext";
                    echo "sender = $r->sender";
                    echo "receptor = $r->receptor";
                    echo "date = $r->date";
                    echo "cost = $r->cost";
                }
            }
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
