<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter;

use Phalcon\Auth\Adapter\Config\ModelAdapterConfig;
use Phalcon\Auth\Exception;
use Phalcon\Auth\Exceptions\DoesNotImplement;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Auth\Adapter\RememberAdapter;
use Phalcon\Contracts\Auth\AuthRemember;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\RememberToken;
use Phalcon\Contracts\Encryption\Security\Security;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon Model-backed adapter.
 *
 * @phpstan-import-type AuthCredentials from \Phalcon\Contracts\Auth\Adapter\Adapter
 *
 * @extends AbstractAdapter<ModelAdapterConfig>
 */
class Model extends \Phalcon\Auth\Adapter\AbstractAdapter implements \Phalcon\Contracts\Auth\Adapter\RememberAdapter
{
    /**
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param \Phalcon\Auth\Adapter\Config\ModelAdapterConfig $config
     */
    public function __construct(\Phalcon\Contracts\Encryption\Security\Security $hasher, \Phalcon\Auth\Adapter\Config\ModelAdapterConfig $config)
    {
    }

    /**
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param array $options
     * @return static
     */
    public static function fromOptions(\Phalcon\Contracts\Encryption\Security\Security $hasher, array $options): static
    {
    }

    /**
     * Create and persist a new remember token for the user.
     *
     * @throws Exception
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return RememberToken
     */
    public function createRememberToken(\Phalcon\Contracts\Auth\AuthUser $user): RememberToken
    {
    }

    /**
     * Find a user matching the given credentials (excluding 'password' key).
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return AuthUser|null
     */
    public function retrieveByCredentials(array $credentials): AuthUser|null
    {
    }

    /**
     * @param mixed $id
     * @return AuthUser|null
     */
    public function retrieveById($id): AuthUser|null
    {
    }

    /**
     * Retrieve a user by the remember-me cookie payload.
     *
     * @param mixed $id
     * @param string $token
     * @param string|null $userAgent
     * @return AuthUser|null
     */
    public function retrieveByToken($id, string $token, ?string $userAgent = null): AuthUser|null
    {
    }
}
