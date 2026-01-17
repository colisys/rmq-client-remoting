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

use Colisys\RmqClient\Shared\Helper\Set;
use JsonSerializable;

class SubscriptionData implements JsonSerializable
{
    public Set $tagSet;

    public Set $codeSet;

    public function __construct(
        public string $topic,
        public string $subString,
        array $tagSet,
        array $codeSet,
        public int $subVersion = 0,
        public string $expressionType,
        public bool $classFilterMode = false,
    ) {
        $this->tagSet = new Set($tagSet);
        $this->codeSet = new Set($codeSet);
    }

    public function jsonSerialize(): array
    {
        return [
            'topic' => $this->topic,
            'subString' => $this->subString,
            'tagSet' => $this->tagSet->toArray(),
            'codeSet' => $this->codeSet->toArray(),
            'subVersion' => $this->subVersion,
            'expressionType' => $this->expressionType,
            'classFilterMode' => $this->classFilterMode,
        ];
    }
}
