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
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use MuCTS\LaravelSMS\Facades\SMS;
use MuCTS\LaravelSMS\Interfaces\Notification;

class Channel
{
    /**
     * Send the sms notification.
     *
     * @param Notifiable|AnonymousNotifiable $notifiable
     * @param Notification $notification
     * @throws Exception
     */
    public function send($notifiable, Notification $notification): void
    {
        $to = null;
        $message = $notification->toSMS($notifiable);
        if (!$message) {
            return;
        }
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor($message->getDriver(), $notification);
        } elseif (method_exists($notifiable, $method = 'routeNotificationFor' . Str::studly($message->getDriver()))) {
            $to = $notifiable->{$method}($notification);
        } elseif ($notifiable instanceof AnonymousNotifiable) {
            $to = $notifiable->routes[__CLASS__];
        }
        if (!$to) {
            return;
        }
        try {
            SMS::send($to, $message);
        } catch (Exception $exception) {
            $message->error($exception->getMessage(), $exception->getCode(), $exception->getPrevious());
        }
    }
}