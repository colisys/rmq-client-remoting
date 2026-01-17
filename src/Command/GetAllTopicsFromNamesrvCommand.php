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
use Colisys\RmqClient\Remoting\RemotingCommandType;
use Colisys\RmqClient\Remoting\RequestCode;

class GetAllTopicsFromNamesrvCommand extends RemotingCommand
{
    public function __construct()
    {
        parent::__construct();
        $this->setCode(RequestCode::GET_ALL_TOPIC_LIST_FROM_NAMESERVER->value);
    }

    public static function createResponseCommand(string $rawStream): static
    {
        $obj = new static();
        $obj->setRemotingCommandType(RemotingCommandType::RESPONSE_COMMAND);
        $obj->decode($rawStream);
        return $obj;
    }

    public static function createRequestCommand(): static
    {
        $obj = new static();
        $obj->setRemotingCommandType(RemotingCommandType::REQUEST_COMMAND);
        return $obj;
    }

    public function jsonSerialize(): array
    {
        if ($this->getRemotingCommandType() == RemotingCommandType::RESPONSE_COMMAND) {
            return $this->getBody();
        }
        return [];
    }
}
