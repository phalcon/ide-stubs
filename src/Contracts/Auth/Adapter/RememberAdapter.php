<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth\Adapter;

use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\RememberToken;

/**
 * Capability extension implemented by adapters that support remember-me.
 */
interface RememberAdapter extends \Phalcon\Contracts\Auth\Adapter\Adapter
{
    /**
     * Create and persist a new remember token for the user.
     *
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return RememberToken
     */
    public function createRememberToken(\Phalcon\Contracts\Auth\AuthUser $user): RememberToken;

    /**
     * Retrieve a user by the remember-me cookie payload.
     *
     * @param mixed $id
     * @param string $token
     * @param string|null $userAgent
     * @return AuthUser|null
     */
    public function retrieveByToken($id, string $token, ?string $userAgent = null): AuthUser|null;
}
