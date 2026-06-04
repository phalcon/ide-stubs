<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Auth;

/**
 * Implemented by user models that can be authenticated.
 */
interface AuthUser
{
    /**
     * Returns the unique identifier for the authenticatable user
     * (e.g. the primary key). Implementations MUST return a non-null
     * scalar; if a record cannot produce one, the implementation should
     * fail at construction time rather than returning null.
     *
     * @return int|string
     */
    public function getAuthIdentifier(): int|string;

    /**
     * Returns the hashed password for the authenticatable user.
     *
     * @return string
     */
    public function getAuthPassword(): string;
}
