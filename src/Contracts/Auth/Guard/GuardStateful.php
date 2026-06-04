<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth\Guard;

use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\AuthUser;

/**
 * Implemented by guards backed by persistent state (sessions/cookies).
 *
 * @phpstan-import-type AuthCredentials from Adapter
 */
interface GuardStateful
{
    /**
     * Attempts to authenticate the user with the given credentials and, on
     * success, persists the resulting state on the guard.
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @param bool $remember
     * @return bool
     */
    public function attempt(array $credentials = [], bool $remember = false): bool;

    /**
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @param bool $remember
     * @return void
     */
    public function login(\Phalcon\Contracts\Auth\AuthUser $user, bool $remember = false): void;

    /**
     * Logs in the user identified by $id. Returns the resolved user on
     * success or false when no user matches the id.
     *
     * @param mixed $id
     * @param bool $remember
     * @return false|AuthUser
     */
    public function loginById($id, bool $remember = false): AuthUser|false;

    /**
     * @return void
     */
    public function logout(): void;

    /**
     * @return bool
     */
    public function viaRemember(): bool;
}
