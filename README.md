# Laravel SMS
> SMS for Laravel 7,based on [mucts/sms](https://github.com/mucts/sms)

## Install

~~~shell
composer require mucts/laravel-sms
~~~

## Usage

- Created Notification
~~~php
<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use MuCTS\Laravel\SMS\Channels\Channel as SMSChannel;
use MuCTS\Laravel\SMS\Interfaces\Notification as SMSNotification;
use MuCTS\SMS\Interfaces\Message as MessageInterface;
use MuCTS\Laravel\SMS\Messages\Message;
class VerificationCode extends Notification implements SMSNotification
{
    use Queueable;

    public function via($notifiable)
    {
        return [SMSChannel::class];
    }

    public function toSMS($notifiable):MessageInterface
    {
        return (new Message())
            ->setContent('您的验证码为: 6379')
            ->setTemplate('SMS_001')
            ->setData(['code' => 6379]);
    }
}
~~~

- Create user model

~~~php
<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MuCTS\SMS\Mobile;

class User extends Authenticatable
{
    use Notifiable;
 
    public function routeNotificationForSMS($notification)
    {
        return new Mobile($this->mobile, $this->area_code);
    }
}
~~~

- Send SMS
~~~php
<?php
// user Notifiable Trait
$user->notify(new VerificationCode());
// use Notification Facade
Notification::send($user, new VerificationCode());
// Send notifications to unregistered users or users with unbound mobile numbers.
Notification::route(
    SMSChannel::class,
    new Mobile(13333333333, 86)
)->notify(new VerificationCode());
~~~

## Facade
~~~php
<?php

use SMS;

SMS::send('13333333333','短信')

~~~

## License
   MIT




