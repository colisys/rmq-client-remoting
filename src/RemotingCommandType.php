<?php

declare(strict_types=1);
/**
 * Unofficial RocketMQ Client SDK for Hyperf
 *
 * @contact colisys@duck.com
 * @license Apache-2.0
 * @copyright 2025 Colisys
 */

namespace Colisys\RmqClient\Remoting;

enum RemotingCommandType: int
{
    case REQUEST_COMMAND = 0;
    case RESPONSE_COMMAND = 1;
}
