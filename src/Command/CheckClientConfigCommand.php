<?php

declare(strict_types=1);
/**
 * Unofficial RocketMQ Client SDK for Hyperf
 *
 * @contact colisys@duck.com
 * @license Apache-2.0
 * @copyright 2025 Colisys
 */

namespace Colisys\RmqClient\Remoting\Command;

use Colisys\RmqClient\Remoting\RemotingCommand;
use Colisys\RmqClient\Remoting\RequestCode;

class CheckClientConfigCommand extends RemotingCommand
{
    public function __construct()
    {
        parent::__construct();
        $this->setCode(RequestCode::CHECK_CLIENT_CONFIG->value);
    }

    public function jsonSerialize(): mixed
    {
        return parent::jsonSerialize();
    }
}
