<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth;

use Phalcon\Auth\Exception;
use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\Guard\Guard;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 */
interface Manager
{
    /**
     * @param string $accessName
     * @return self
     */
    public function access(string $accessName): self;

    /**
     * @phpstan-param array<string, class-string<Access>> $accessList
     * @param array $accessList
     * @return self
     */
    public function addAccessList(array $accessList): self;

    /**
     * @param string $nameGuard
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @param bool $isDefault
     * @return self
     */
    public function addGuard(string $nameGuard, \Phalcon\Contracts\Auth\Guard\Guard $guard, bool $isDefault = false): self;

    /**
     * @phpstan-param AuthCredentials $credentials
     *
     * @throws Exception
     * @param array $credentials
     * @param bool $remember
     * @return bool
     */
    public function attempt(array $credentials = [], bool $remember = false): bool;

    /**
     * Whether the default guard reports the current request as authenticated.
     *
     * @return bool
     */
    public function check(): bool;

    /**
     * Restricts the active access gate to skip the listed action names.
     *
     * @param string $actions
     * @return self
     */
    public function except(string $actions): self;

    /**
     * @return Access|null
     */
    public function getAccess(): Access|null;

    /**
     * @phpstan-return array<string, class-string<Access>>
     * @return array
     */
    public function getAccessList(): array;

    /**
     * @return Guard|null
     */
    public function getDefaultGuard(): Guard|null;

    /**
     * @return array<string, Guard>
     */
    public function getGuards(): array;

    /**
     * Returns the named guard, or the default guard when $name is null.
     *
     * @param string|null $name
     * @return Guard
     */
    public function guard(?string $name = null): Guard;

    /**
     * Returns the authenticated user's identifier from the default guard,
     * or null when no authenticated user is present.
     *
     * @return int|string|null
     */
    public function id(): int|string|null;

    /**
     * Logs the current user out via the default guard.
     *
     * @throws Exception
     * @return void
     */
    public function logout(): void;

    /**
     * Restricts the active access gate to apply only to the listed action names.
     *
     * @param string $actions
     * @return self
     */
    public function only(string $actions): self;

    /**
     * @param \Phalcon\Contracts\Auth\Access\Access $access
     * @return self
     */
    public function setAccess(\Phalcon\Contracts\Auth\Access\Access $access): self;

    /**
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @return self
     */
    public function setDefaultGuard(\Phalcon\Contracts\Auth\Guard\Guard $guard): self;

    /**
     * Returns the resolved user from the default guard, or null.
     *
     * @return AuthUser|null
     */
    public function user(): AuthUser|null;

    /**
     * Validates the given credentials against the default guard without
     * logging in.
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool;
}
