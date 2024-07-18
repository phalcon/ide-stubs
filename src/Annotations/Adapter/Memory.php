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
 * Stores the parsed annotations in memory. This adapter is the suitable
 * development/testing
 */
class Memory extends \Phalcon\Annotations\Adapter\AbstractAdapter
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * Reads parsed annotations from memory
     *
     * @param string $key
     * @return bool|Reflection
     */
    public function read(string $key): Reflection|bool
    {
    }

    /**
     * Writes parsed annotations to memory
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     * @return void
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data): void
    {
    }
}
