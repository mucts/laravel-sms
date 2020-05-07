<?php
/**
 * This file is part of the mucts.com.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020 MuCTS.com All Rights Reserved.
 */

namespace MuCTS\LaravelSMS\Channels;


use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\AnonymousNotifiable;
use MuCTS\LaravelSMS\Facades\SMS;
use MuCTS\LaravelSMS\Interfaces\Notification;

class Channel
{
    /**
     * Send the sms notification.
     *
     * @param $notifiable
     * @param Notification $notification
     * @throws Exception
     */
    public function send($notifiable, Notification $notification):void
    {
        if ($notifiable instanceof Model) {
            $to = $notifiable->routeNotificationForEasySms($notification);
        } elseif ($notifiable instanceof AnonymousNotifiable) {
            $to = $notifiable->routes[__CLASS__];
        }
        $message = $notification->toSMS($notifiable);
        SMS::send($to, $message);
    }
}