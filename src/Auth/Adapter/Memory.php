<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter;

use Phalcon\Auth\Adapter\Config\MemoryAdapterConfig;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Encryption\Security\Security;

/**
 * In-memory adapter — useful for tests and small read-only user lists.
 *
 * @phpstan-import-type AuthUserRow from AbstractArrayAdapter
 *
 * @extends AbstractArrayAdapter<MemoryAdapterConfig>
 */
class Memory extends \Phalcon\Auth\Adapter\AbstractArrayAdapter
{
    /**
     * Map of id => user row for O(1) retrieveById lookup.
     *
     * @phpstan-var array<int|string, AuthUserRow>
     * @var array
     */
    private $idStore = [];

    /**
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param \Phalcon\Auth\Adapter\Config\MemoryAdapterConfig $config
     */
    public function __construct(\Phalcon\Contracts\Encryption\Security\Security $hasher, \Phalcon\Auth\Adapter\Config\MemoryAdapterConfig $config)
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
     * Overridden for O(1) lookup via the id index built in the constructor.
     *
     * @param mixed $id
     * @return AuthUser|null
     */
    public function retrieveById($id): AuthUser|null
    {
    }

    /**
     * @phpstan-return list<AuthUserRow>
     * @return array
     */
    protected function loadUsers(): array
    {
    }
}
