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

enum ConsumeFromWhere: int
{
    case CONSUME_FROM_LAST_OFFSET = 0;

    /**
     * @deprecated
     */
    case CONSUME_FROM_LAST_OFFSET_AND_FROM_MIN_WHEN_BOOT_FIRST = 1;

    /**
     * @deprecated
     */
    case CONSUME_FROM_MIN_OFFSET = 2;

    /**
     * @deprecated
     */
    case CONSUME_FROM_MAX_OFFSET = 3;

    case CONSUME_FROM_FIRST_OFFSET = 4;
    case CONSUME_FROM_TIMESTAMP = 5;
}
