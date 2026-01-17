<?php

namespace Colisys\RmqClient\Remoting\Contract;

use Colisys\Rocketmq\Helper\Result;

interface ClientInterface
{
    public function __construct(
        string $host,
        int $port,
        int $timeout = 0,
        int $flag = 0
    );

    public function send(string $data, int $timeout = 0): Result;

    public function recv(int $timeout = 0): Result;

    public function use(\Closure $callback);
}