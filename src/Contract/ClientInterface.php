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

use Closure;
use Colisys\RmqClient\Shared\Helper\Result;

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

    public function use(Closure $callback);
}
