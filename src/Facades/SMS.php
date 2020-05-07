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

namespace MuCTS\LaravelSMS\Facades;


use Illuminate\Support\Facades\Facade;
use MuCTS\SMS\SMS as Accessor;

/**
 * Class SMS
 *
 * @mixin Accessor
 * @package MuCTS\LaravelSMS\Facades
 */
class SMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}