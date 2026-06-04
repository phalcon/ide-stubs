<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard;

use InvalidArgumentException;
use Phalcon\Support\Helper\Json\Decode;

/**
 * Value object representing the contents of a remember-me cookie.
 *
 * @phpstan-type RememberPayload array{id?: int|string, token?: string, user_agent?: string}
 */
final class UserRemember
{
    /**
     * @var int|string|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * Accepts either the raw JSON cookie value (string) or the already
     * decoded associative array. Malformed input degrades to an empty
     * payload so callers can read getters without null-guarding.
     *
     * @param string|array<string, mixed> $payload
     */
    public function __construct($payload)
    {
    }

    /**
     * @return int|string|null
     */
    public function getId(): int|string|null
    {
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
    }
}
