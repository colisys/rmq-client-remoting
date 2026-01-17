<?php

declare(strict_types=1);
/**
 * Unofficial RocketMQ Client SDK for Hyperf
 *
 * @contact colisys@duck.com
 * @license Apache-2.0
 * @copyright 2025 Colisys
 */

namespace Colisys\RmqClient\Remoting\Contract;

enum ConsumeType: string
{
    case CONSUME_ACTIVELY = 'PULL';
    case CONSUME_PASSIVELY = 'PUSH';
    case CONSUME_POP = 'POP';
}
