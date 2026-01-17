<?php

declare(strict_types=1);
/**
 * Third-party RocketMQ Client SDK for Hyperf
 *
 * @contact colisys@duck.com
 * @license MIT
 * @copyright 2025 Colisys
 */

namespace Colisys\RmqClient\Remoting;

enum SerializeType: int
{
    case JSON = 0;
    case ROCKETMQ = 1;
}
