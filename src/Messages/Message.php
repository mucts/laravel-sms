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

namespace MuCTS\LaravelSMS\Messages;


use Exception;
use MuCTS\SMS\Message as MessageAlias;
use Throwable;

class Message extends MessageAlias
{
    /** @var string */
    public const DEFAULT_DRIVER = 'SMS';
    /** @var string */
    protected $driver;

    public function setDriver($driver)
    {
        $this->driver = $driver;
        return $this;
    }

    public function getDriver(): string
    {
        return $this->driver ?? self::DEFAULT_DRIVER;
    }

    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     * @return $this
     * @throws Exception
     */
    public function error(string $message = "", int $code = 0, Throwable $previous = null): self
    {
        throw new Exception($message = "", $code = 0, $previous);
    }
}