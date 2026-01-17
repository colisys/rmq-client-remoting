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

class TopicList extends BaseModel implements JsonSerializable
{
    public function __construct(
        public array $topicList,
        public string $brokerAddr
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'topicList' => $this->topicList,
            'brokerAddr' => $this->brokerAddr,
        ];
    }
}
