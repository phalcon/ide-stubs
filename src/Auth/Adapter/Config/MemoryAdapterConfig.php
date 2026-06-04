<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter\Config;

/**
 * @phpstan-type AuthUserRow array{id?: int|string}&array<string, mixed>
 */
class MemoryAdapterConfig extends \Phalcon\Auth\Adapter\Config\AbstractAdapterConfig
{
    /**
     * @var array
     */
    protected $users = [];

    /**
     * @phpstan-param list<AuthUserRow> $users
     * @param array $users
     * @param string|null $model
     */
    public function __construct(array $users = [], ?string $model = null)
    {
    }

    /**
     * @phpstan-return list<AuthUserRow>
     * @return array
     */
    public function getUsers(): array
    {
    }
}
