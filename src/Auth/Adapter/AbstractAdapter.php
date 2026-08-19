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
     * Dummy bcrypt hash used to equalize timing on the user-not-found path so
     * a failed lookup costs the same as a real password check (prevents
     * login-timing user enumeration).
     *
     * @var string
     */
    const string DUMMY_HASH = '$2y$10$YMmGMSXz.5U3bjjJ2qx45uElzUrlaBiS8L70VaVnmsKYFJVcam8gW';

    protected \Phalcon\Contracts\Auth\Adapter\AdapterConfig $config;

    protected \Phalcon\Contracts\Encryption\Security\Security $hasher;

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

    /**
     * Runs a throwaway password verification against a fixed dummy hash so the
     * user-not-found path performs the same hash work as a found path. Call it
     * when a credential lookup misses to keep response time constant.
     *
     * @return void
     */
    protected function burnHash(): void
    {
    }
}
