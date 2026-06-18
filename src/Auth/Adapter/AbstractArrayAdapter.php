<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter;

use Phalcon\Auth\AuthUser;
use Phalcon\Auth\Exceptions\DoesNotImplement;
use Phalcon\Contracts\Auth\Adapter\AdapterConfig;
use Phalcon\Contracts\Auth\AuthUser as AuthUserContract;

/**
 * Common base for adapters whose user records come from an in-memory list
 * (Memory and Stream). Subclasses provide the row source via loadUsers();
 * everything else - credentials matching, hydration, the empty-credentials
 * guard, and a default linear retrieveById - is shared here.
 *
 * @phpstan-import-type AuthCredentials from \Phalcon\Contracts\Auth\Adapter\Adapter
 * @phpstan-type AuthUserRow array{id?: int|string}&array<string, mixed>
 *
 * @template TConfig of AdapterConfig
 * @extends AbstractAdapter<TConfig>
 */
abstract class AbstractArrayAdapter extends \Phalcon\Auth\Adapter\AbstractAdapter
{
    /**
     * Walks the user list and returns the first row whose non-'password'
     * keys all match strictly. Returns null when no row matches or when
     * $credentials carries no identifying field at all (only 'password',
     * or empty) - protects callers from the silent "first row wins" footgun.
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return AuthUserContract|null
     */
    public function retrieveByCredentials(array $credentials): AuthUserContract|null
    {
    }

    /**
     * Default linear-scan implementation. Memory overrides this for an O(1)
     * id-keyed lookup; Stream uses this as-is.
     *
     * @param mixed $id
     * @return AuthUserContract|null
     */
    public function retrieveById($id): AuthUserContract|null
    {
    }

    /**
     * Tests whether a credentials payload carries at least one identifying
     * field (i.e. anything other than 'password'). An empty payload - or a
     * payload that only contains 'password' - is treated as "no lookup".
     *
     * @phpstan-param AuthCredentials $credentials
     * @param array $credentials
     * @return bool
     */
    protected function hasIdentifyingField(array $credentials): bool
    {
    }

    /**
     * Hydrates a raw user row into either the configured model class or a
     * Phalcon\Auth\AuthUser value object.
     *
     * @phpstan-param AuthUserRow $row
     *
     * @throws DoesNotImplement
     * @param array $row
     * @return AuthUserContract
     */
    protected function hydrate(array $row): AuthUserContract
    {
    }

    /**
     * Returns the source list of user rows. Concrete subclasses decide
     * where they come from (config array, JSON file, etc.).
     *
     * @phpstan-return list<AuthUserRow>
     * @return array
     */
    abstract protected function loadUsers(): array;

    /**
     * Strict per-key match of a row against credentials, skipping 'password'.
     *
     * @phpstan-param AuthUserRow     $row
     * @phpstan-param AuthCredentials $credentials
     * @param array $row
     * @param array $credentials
     * @return bool
     */
    protected function matchesRow(array $row, array $credentials): bool
    {
    }
}
