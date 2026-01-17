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

class HeartbeatCommand extends RemotingCommand
{
    public function __construct()
    {
        parent::__construct();
        $this->setCode(RequestCode::HEART_BEAT->value);
    }

    public static function createResponseCommand(string $rawString): static
    {
        $obj = new static();
        $obj->setRemotingCommandType(RemotingCommandType::RESPONSE_COMMAND);
        $obj->decode($rawString);
        return $obj;
    }

    public static function createRequestCommand(): static
    {
        $obj = new static();
        $obj->setRemotingCommandType(RemotingCommandType::REQUEST_COMMAND);
        return $obj;
    }

    public function encodeBody(): string
    {
        return '';
    }

    public static function decodeAfter(self $command)
    {
        $command->setCode(RequestCode::SEND_MESSAGE->value);
        return $command;
    }

    public function jsonSerialize(): mixed
    {
        return parent::jsonSerialize();
    }
}
