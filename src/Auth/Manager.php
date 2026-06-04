<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth;

use Phalcon\Auth\Access\AccessLocator;
use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\Guard\Guard;
use Phalcon\Contracts\Auth\Guard\GuardStateful;
use Phalcon\Contracts\Auth\Manager as ManagerContract;

/**
 * Composes guards (authentication) and access gates (authorization)
 * behind a single facade. Guard-specific behavior is reached through
 * Manager::guard(); callers narrow with instanceof against the
 * relevant capability interface (GuardStateful, BasicAuth, etc.).
 *
 * @phpstan-import-type AuthCredentials from Adapter
 */
class Manager implements ManagerContract
{
    /**
     * @var AccessLocator
     */
    protected $accessFactory;

    /**
     * @var Access | null
     */
    protected $activeAccess = null;

    /**
     * @var Guard | null
     */
    protected $defaultGuard = null;

    /**
     * @var array<string, Guard>
     */
    protected $guards = [];

    /**
     * @param \Phalcon\Auth\Access\AccessLocator $accessFactory
     */
    public function __construct(\Phalcon\Auth\Access\AccessLocator $accessFactory)
    {
    }

    /**
     * @throws Exception
     * @param string $accessName
     * @return self
     */
    public function access(string $accessName): self
    {
    }

    /**
     * @phpstan-param array<string, class-string<Access>> $accessList
     * @param array $accessList
     * @return self
     */
    public function addAccessList(array $accessList): self
    {
    }

    /**
     * @param string $nameGuard
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @param bool $isDefault
     * @return self
     */
    public function addGuard(string $nameGuard, \Phalcon\Contracts\Auth\Guard\Guard $guard, bool $isDefault = false): self
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     *
     * @throws Exception
     * @param array $credentials
     * @param bool $remember
     * @return bool
     */
    public function attempt(array $credentials = [], bool $remember = false): bool
    {
    }

    /**
     * @return bool
     */
    public function check(): bool
    {
    }

    /**
     * @throws Exception
     * @param string $actions
     * @return self
     */
    public function except(string $actions): self
    {
    }

    /**
     * @return Access|null
     */
    public function getAccess(): Access|null
    {
    }

    /**
     * @return array<string, class-string<Access>>
     */
    public function getAccessList(): array
    {
    }

    /**
     * @return Guard|null
     */
    public function getDefaultGuard(): Guard|null
    {
    }

    /**
     * @return array<string, Guard>
     */
    public function getGuards(): array
    {
    }

    /**
     * @throws Exception
     * @param string|null $name
     * @return Guard
     */
    public function guard(?string $name = null): Guard
    {
    }

    /**
     * @return int|string|null
     */
    public function id(): int|string|null
    {
    }

    /**
     * @return void
     */
    public function logout(): void
    {
    }

    /**
     * @throws Exception
     * @param string $actions
     * @return self
     */
    public function only(string $actions): self
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\Access\Access $access
     * @return self
     */
    public function setAccess(\Phalcon\Contracts\Auth\Access\Access $access): self
    {
    }

    /**
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @return self
     */
    public function setDefaultGuard(\Phalcon\Contracts\Auth\Guard\Guard $guard): self
    {
    }

    /**
     * @return AuthUser|null
     */
    public function user(): AuthUser|null
    {
    }

    /**
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool
    {
    }
}
