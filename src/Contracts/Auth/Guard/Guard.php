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
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Di\DiInterface;

/**
 * @phpstan-import-type AuthCredentials from Adapter
 */
interface Guard
{
    /**
     * Build a guard from an adapter, the application container, and a flat
     * options map. Used by ManagerFactory to wire guards from the
     * application config; each implementation resolves the framework
     * services it needs from the container.
     *
     * The container is Container-first: pass a Phalcon\Container\Container.
     * The legacy Phalcon\Di\Di is also supported with provisions - its
     * service definitions must be pre-registered (no autowiring).
     *
     * @param Collection|DiInterface $container
     * @param array<string, mixed>   $options
     * @param \Phalcon\Contracts\Auth\Adapter\Adapter $adapter
     * @return static
     */
    public static function fromOptions(\Phalcon\Contracts\Auth\Adapter\Adapter $adapter, $container, array $options): static;

    /**
     * Whether the current request is authenticated.
     *
     * @return bool
     */
    public function check(): bool;

    /**
     * Returns the last user the guard tried to authenticate during this
     * request, regardless of success.
     *
     * @return AuthUser|null
     */
    public function getLastUserAttempted(): AuthUser|null;

    /**
     * Whether the current request is unauthenticated.
     *
     * @return bool
     */
    public function guest(): bool;

    /**
     * Whether the guard currently holds a resolved user.
     *
     * @return bool
     */
    public function hasUser(): bool;

    /**
     * Returns the authenticated user's identifier, or null when no
     * authenticated user is present.
     *
     * @return int|string|null
     */
    public function id(): int|string|null;

    /**
     * Sets the current user explicitly. Returns $this for fluent chaining.
     *
     * @param \Phalcon\Contracts\Auth\AuthUser $user
     * @return static
     */
    public function setUser(\Phalcon\Contracts\Auth\AuthUser $user): static;

    /**
     * Returns the resolved user for the current request, or null.
     *
     * @return AuthUser|null
     */
    public function user(): AuthUser|null;

    /**
     * Validates the given credentials without logging in.
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool;
}
