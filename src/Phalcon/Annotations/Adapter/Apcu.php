<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations\Adapter;

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
    public function __construct(array $options = array())
    {
    }

    /**
     * Reads parsed annotations from APCu
     *
     * @param string $key
     * @return bool|\Phalcon\Annotations\Reflection
     */
    public function read(string $key)
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
