<?php

namespace Phalcon\Annotations\Adapter;

/**
 * Phalcon\Annotations\Adapter\Apcu
 *
 * Stores the parsed annotations in APCu. This adapter is suitable for production
 *
 * <code>
 * use Phalcon\Annotations\Adapter\Apcu;
 *
 * $annotations = new Apcu();
 * </code>
 */
class Apcu extends \Phalcon\Annotations\Adapter
{

    protected $_prefix = '';


    protected $_ttl = 172800;


    /**
     * Phalcon\Annotations\Adapter\Apcu constructor
     *
     * @param array $options
     */
    public function __construct($options = null) {}

    /**
     * Reads parsed annotations from APCu
     *
     * @param string $key
     * @return bool|\Phalcon\Annotations\Reflection
     */
    public function read($key) {}

    /**
     * Writes parsed annotations to APCu
     *
     * @param string $key
     * @param \Phalcon\Annotations\Reflection $data
     */
    public function write($key, \Phalcon\Annotations\Reflection $data) {}

}
