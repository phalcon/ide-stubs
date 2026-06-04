<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter;

use Phalcon\Contracts\Auth\Adapter\Adapter;
use Phalcon\Contracts\Auth\Adapter\AdapterConfig;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Encryption\Security\Security;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 *
 * @template TConfig of AdapterConfig
 */
abstract class AbstractAdapter implements \Phalcon\Contracts\Auth\Adapter\Adapter
{
    /**
     * @var AdapterConfig
     */
    protected $config;

    /**
     * @var Security
     */
    protected $hasher;

    /**
     * @phpstan-param TConfig $config
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param \Phalcon\Contracts\Auth\Adapter\AdapterConfig $config
     */
    public function __construct(\Phalcon\Contracts\Encryption\Security\Security $hasher, \Phalcon\Contracts\Auth\Adapter\AdapterConfig $config)
    {
    }

    /**
     * Returns the adapter configuration object.
     *
     * @phpstan-return TConfig
     * @return AdapterConfig
     */
    public function getConfig(): AdapterConfig
    {
    }

    /**
     * Returns the model class name, if configured.
     *
     * @return string|null
     */
    public function getModel(): string|null
    {
    }

    /**
     * Validates the supplied plaintext password against the user's stored hash.
     * Concrete adapters share this implementation; if your data source needs
     * a different verification strategy, override it.
     *
     * @phpstan-param AuthCredentials $credentials
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(\Phalcon\Contracts\Auth\AuthUser $user, array $credentials): bool
    {
    }
}
