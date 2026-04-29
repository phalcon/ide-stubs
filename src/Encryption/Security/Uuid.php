<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security;

use Phalcon\Encryption\Security\Uuid\Version1;
use Phalcon\Encryption\Security\Uuid\Version3;
use Phalcon\Encryption\Security\Uuid\Version4;
use Phalcon\Encryption\Security\Uuid\Version5;
use Phalcon\Encryption\Security\Uuid\Version6;
use Phalcon\Encryption\Security\Uuid\Version7;

/**
 * Factory that generates UUIDs of versions 1 through 7.
 *
 * Each call creates a new immutable version object. Cast to string for the
 * UUID value; use the returned object for additional methods such as
 * getDateTime() or getNode().
 *
 * @method Version1 v1()
 * @method Version3 v3(string $namespaceName, string $name)
 * @method Version4 v4()
 * @method Version5 v5(string $namespaceName, string $name)
 * @method Version6 v6()
 * @method Version7 v7()
 */
class Uuid
{
    /**
     * Generates a version 1 (time-based) UUID.
     *
     * @return Version1
     */
    public function v1(): Version1
    {
    }

    /**
     * Generates a version 3 (name-based MD5) UUID.
     *
     * @param string $namespaceName
     * @param string $name
     * @return Version3
     */
    public function v3(string $namespaceName, string $name): Version3
    {
    }

    /**
     * Generates a version 4 (random) UUID.
     *
     * @return Version4
     */
    public function v4(): Version4
    {
    }

    /**
     * Generates a version 5 (name-based SHA-1) UUID.
     *
     * @param string $namespaceName
     * @param string $name
     * @return Version5
     */
    public function v5(string $namespaceName, string $name): Version5
    {
    }

    /**
     * Generates a version 6 (reordered time-based) UUID.
     *
     * @return Version6
     */
    public function v6(): Version6
    {
    }

    /**
     * Generates a version 7 (Unix timestamp) UUID.
     *
     * @return Version7
     */
    public function v7(): Version7
    {
    }
}
