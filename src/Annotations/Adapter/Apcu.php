<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations\Adapter;

use Phalcon\Annotations\Reflection;

/**
 * Stores the parsed annotations in APCu. This adapter is suitable for production
 *
 * ```php
 * use Phalcon\Annotations\Adapter\Apcu;
 *
 * $annotations = new Apcu();
 * ```
 */
class Apcu extends \Phalcon\Annotations\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @var int
     */
    protected $ttl = 172800;

    /**
     * @param array $options = [
     *     'prefix' => 'phalcon'
     *     'lifetime' => 3600
     * ]
     *
     * Phalcon\Annotations\Adapter\Apcu constructor
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Reads parsed annotations from APCu
     *
     * @param string $key
     * @return bool|Reflection
     */
    public function read(string $key): Reflection|bool
    {
    }

    /**
     * Writes parsed annotations to APCu
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     * @return bool
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data): bool
    {
    }
}
