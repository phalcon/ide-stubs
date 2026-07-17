<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Traits\Php;

/**
 * APCu based wrapper methods
 */
trait ApcuTrait
{
    /**
     * @param mixed $key
     * @param int   $step
     *
     * @return bool|int
     *
     * @link https://php.net/manual/en/function.apcu-dec.php
     */
    protected static function phpApcuDec($key, int $step = 1): int|bool
    {
    }

    /**
     * @param mixed $key
     *
     * @return bool|array
     *
     * @link https://php.net/manual/en/function.apcu-delete.php
     */
    protected static function phpApcuDelete($key): bool|array
    {
    }

    /**
     * @param mixed $key
     *
     * @return bool|array
     *
     * @link https://php.net/manual/en/function.apcu-exists.php
     */
    protected static function phpApcuExists($key): bool|array
    {
    }

    /**
     * @param mixed $key
     *
     * @return mixed
     *
     * @link https://php.net/manual/en/function.apcu-fetch.php
     */
    protected static function phpApcuFetch($key): mixed
    {
    }

    /**
     * @param mixed $key
     * @param int   $step
     *
     * @return bool|int
     *
     * @link https://php.net/manual/en/function.apcu-inc.php
     */
    protected static function phpApcuInc($key, int $step = 1): int|bool
    {
    }

    /**
     * @param string $pattern
     *
     * @return \APCUIterator|bool
     *
     * @link https://php.net/manual/en/class.apcuiterator.php
     */
    protected static function phpApcuIterator(string $pattern): \APCUIterator|bool
    {
    }

    /**
     * @param mixed $key
     * @param mixed $payload
     * @param int   $ttl
     *
     * @return bool|array
     *
     * @link https://php.net/manual/en/function.apcu-store.php
     */
    protected static function phpApcuStore($key, $payload, int $ttl = 0): bool|array
    {
    }
}
