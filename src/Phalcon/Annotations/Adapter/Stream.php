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
 * Stores the parsed annotations in files. This adapter is suitable for production
 *
 * ```php
 * use Phalcon\Annotations\Adapter\Stream;
 *
 * $annotations = new Stream(
 *     [
 *         "annotationsDir" => "app/cache/annotations/",
 *     ]
 * );
 * ```
 */
class Stream extends \Phalcon\Annotations\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $annotationsDir = './';


    /**
     * @param array $options = [
     *     'annotationsDir' => 'phalconDir'
     * ]
     *
     * Phalcon\Annotations\Adapter\Stream constructor
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Reads parsed annotations from files
     *
     * @param string $key
     * @return mixed
     */
    public function read(string $key)
    {
    }

    /**
     * Writes parsed annotations to files
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     * @return void
     */
    public function write(string $key, \Phalcon\Annotations\Reflection $data)
    {
    }
}
