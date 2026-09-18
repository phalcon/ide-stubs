<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter\Config;

use Phalcon\Contracts\Auth\AuthTypes;

/**
 * @phpstan-import-type auth_user_row from AuthTypes
 */
class MemoryAdapterConfig extends \Phalcon\Auth\Adapter\Config\AbstractAdapterConfig
{
    protected array $users = [];

    /**
     * @phpstan-param list<auth_user_row> $users
     * @param array $users
     * @param string|null $model
     */
    public function __construct(array $users = [], ?string $model = null)
    {
    }

    /**
     * @phpstan-return list<auth_user_row>
     * @return array
     */
    public function getUsers(): array
    {
    }
}
