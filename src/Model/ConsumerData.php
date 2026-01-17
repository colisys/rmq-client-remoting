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

use Colisys\RmqClient\Remoting\Contract\ConsumeFromWhere;
use Colisys\RmqClient\Remoting\Contract\ConsumeType;
use Colisys\RmqClient\Remoting\Contract\MessageModel;
use Colisys\RmqClient\Shared\Helper\Set;
use JsonSerializable;

class ConsumerData extends BaseModel implements JsonSerializable
{
    public ConsumeType $consumeType;

    public MessageModel $messageModel;

    public ConsumeFromWhere $consumeFromWhere;

    public Set $subscriptionDataSet;

    public function __construct(
        public string $groupName,
        int|string $consumeType,
        int|string $messageModel,
        int|string $consumeFromWhere,
        $subscriptionDataSet,
        public bool $unitMode,
    ) {
        $this->consumeType = ConsumeType::from($consumeType);
        $this->messageModel = MessageModel::from($messageModel);
        $this->consumeFromWhere = ConsumeFromWhere::from($consumeFromWhere);
        $this->subscriptionDataSet = (new Set($subscriptionDataSet));
    }

    public function jsonSerialize(): mixed
    {
        return [
            'groupName' => $this->groupName,
            'consumeType' => $this->consumeType->value,
            'messageModel' => $this->messageModel->value,
            'consumeFromWhere' => $this->consumeFromWhere->value,
            'subscriptionDataSet' => $this->subscriptionDataSet,
            'unitMode' => $this->unitMode,
        ];
    }
}
