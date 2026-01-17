<?php

declare(strict_types=1);
/**
 * Unofficial RocketMQ Client SDK for Hyperf
 *
 * @contact colisys@duck.com
 * @license Apache-2.0
 * @copyright 2025 Colisys
 */

namespace Colisys\RmqClient\Remoting\Model;

use JsonSerializable;

class ProducerData extends BaseModel implements JsonSerializable
{
    public function __construct(
        public string $groupName
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'groupName' => $this->groupName,
        ];
    }
}
