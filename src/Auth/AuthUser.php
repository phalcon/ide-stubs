<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth;

use Phalcon\Auth\Exceptions\DataMustContainIdKey;
use Phalcon\Contracts\Auth\AuthUser as AuthUserContract;

/**
 * Lightweight value object returned by array-backed adapters (Memory, Stream)
 * when no application model class is configured.
 */
class AuthUser implements AuthUserContract
{
    /**
     * @phpstan-var array<string, mixed>
     * @var array
     */
    protected $data;

    /**
     * @param array<string, mixed> $data
     *
     * @throws Exception when $data does not contain a scalar 'id' key.
     */
    public function __construct(array $data)
    {
    }

    /**
     * @return int|string
     */
    public function getAuthIdentifier(): int|string
    {
    }

    /**
     * @return string
     */
    public function getAuthPassword(): string
    {
    }

    /**
     * Returns the underlying data array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
    }
}
