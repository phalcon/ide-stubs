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
use Phalcon\Auth\Exceptions\InvalidCredentialKey;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Auth\Adapter\RememberAdapter;
use Phalcon\Contracts\Auth\AuthRemember;
use Phalcon\Contracts\Auth\AuthTypes;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\RememberToken;
use Phalcon\Contracts\Encryption\Security\Security;
use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon Model-backed adapter.
 *
 * @phpstan-import-type auth_credentials from AuthTypes
 * @phpstan-import-type mvc_model_find_parameters from MvcTypes
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
     * @phpstan-param auth_credentials $credentials
     * @param array $credentials
     * @return AuthUser|null
     */
    public function retrieveByCredentials(array $credentials): AuthUser|null
    {
    }

    /**
     * @param int|string $id
     * @return AuthUser|null
     */
    public function retrieveById($id): AuthUser|null
    {
    }

    /**
     * Retrieve a user by the remember-me cookie payload.
     *
     * @param int|string $id
     * @param string $token
     * @param string|null $userAgent
     * @return AuthUser|null
     */
    public function retrieveByToken($id, string $token, ?string $userAgent = null): AuthUser|null
    {
    }

    /**
     * Runs findFirst() with the given parameters and normalizes the result to
     * an ?AuthUser: a missing record yields null, a record that is not an
     * AuthUser throws.
     *
     * @phpstan-param mvc_model_find_parameters $parameters
     *
     * @throws DoesNotImplement
     * @param array $parameters
     * @return AuthUser|null
     */
    private function findFirstAsAuthUser(array $parameters): AuthUser|null
    {
    }
}
