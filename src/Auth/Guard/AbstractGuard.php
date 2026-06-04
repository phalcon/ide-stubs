<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard;

use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\Guard\Guard;
use Phalcon\Contracts\Auth\Guard\GuardConfig;
use Phalcon\Events\AbstractEventsAware;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 *
 * @template TConfig of GuardConfig
 */
abstract class AbstractGuard extends AbstractEventsAware implements \Phalcon\Contracts\Auth\Guard\Guard
{
    /**
     * @var Adapter
     */
    protected $adapter;

    /**
     * @var GuardConfig
     */
    protected $config;

    /**
     * @var AuthUser | null
     */
    protected $lastUserAttempted = null;

    /**
     * @var AuthUser | null
     */
    protected $user = null;

    /**
     * @phpstan-param TConfig $config
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @param \Phalcon\Contracts\Auth\Guard\GuardConfig $config
     */
    public function __construct(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, \Phalcon\Contracts\Auth\Guard\GuardConfig $config)
    {
    }

    /**
     * Returns the guard configuration object.
     *
     * @phpstan-return TConfig
     * @return GuardConfig
     */
    public function getConfig(): GuardConfig
    {
    }

    /**
     * @return bool
     */
    public function check(): bool
    {
    }

    /**
     * @return Adapter
     */
    public function getAdapter(): Adapter
    {
    }

    /**
     * @return AuthUser|null
     */
    public function getLastUserAttempted(): AuthUser|null
    {
    }

    /**
     * @return bool
     */
    public function guest(): bool
    {
    }

    /**
     * @return bool
     */
    public function hasUser(): bool
    {
    }

    /**
     * @return int|string|null
     */
    public function id(): int|string|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @return static
     */
    public function setAdapter(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter): static
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return static
     */
    public function setUser(\Phalcon\Contracts\Auth\AuthUser $user): static
    {
    }

    /**
     * user should be ?AuthUser
     *
     * @phpstan-param AuthCredentials $credentials
     *
     * @phpstan-assert-if-true !null $user
     * @param mixed $user
     * @param array $credentials
     * @return bool
     */
    protected function hasValidCredentials($user, array $credentials): bool
    {
    }
}
