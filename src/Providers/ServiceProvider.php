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

namespace MuCTS\Laravel\SMS\Providers;

use Illuminate\Support\ServiceProvider as Provider;
use MuCTS\SMS\SMS;

class ServiceProvider extends Provider
{
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/../config/sms.php', 'sms'
        );
        $this->app->singleton(SMS::class, function ($app) {
            return new SMS($app->config['sms']);
        });
        $this->app->alias(SMS::class, 'sms');
    }

    public function boot()
    {
        if (!file_exists(config_path('sms.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/../config/sms.php' => config_path('sms.php'),
            ], 'config');
        }
    }

    public function provides()
    {
        return [SMS::class, 'sms'];
    }
}