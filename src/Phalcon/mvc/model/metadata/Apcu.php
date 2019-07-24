<?php

namespace Phalcon\Mvc\Model\MetaData;

/**
 * Phalcon\Mvc\Model\MetaData\Apcu
 *
 * Stores model meta-data in the APCu cache. Data will erased if the web server is restarted
 *
 * By default meta-data is stored for 48 hours (172800 seconds)
 *
 * You can query the meta-data by printing apcu_fetch('$PMM$') or apcu_fetch('$PMM$my-app-id')
 *
 * <code>
 * $metaData = new \Phalcon\Mvc\Model\Metadata\Apcu(
 *     [
 *         "prefix"   => "my-app-id",
 *         "lifetime" => 86400,
 *     ]
 * );
 * </code>
 */
class Apcu extends \Phalcon\Mvc\Model\MetaData
{

    protected $_prefix = '';


    protected $_ttl = 172800;


    protected $_metaData = array();


    /**
     * Phalcon\Mvc\Model\MetaData\Apcu constructor
     *
     * @param array $options
     */
    public function __construct($options = null) {}

    /**
     * Reads meta-data from APCu
     *
     * @param string $key
     * @return array|null
     */
    public function read($key) {}

    /**
     * Writes the meta-data to APCu
     *
     * @param string $key
     * @param mixed $data
     */
    public function write($key, $data) {}

}
