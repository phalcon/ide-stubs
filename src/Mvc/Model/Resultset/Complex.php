<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Resultset;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Db\ResultInterface;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\Resultset;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Mvc\Model\Row;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Storage\Serializer\SerializerInterface;
use stdClass;

/**
 * Phalcon\Mvc\Model\Resultset\Complex
 *
 * Complex resultsets may include complete objects and scalar values.
 * This class builds every complex row as it is required
 */
class Complex extends Resultset implements \Phalcon\Mvc\Model\ResultsetInterface
{
    /**
     * @var array
     */
    protected $columnTypes;

    /**
     * Unserialised result-set hydrated all rows already. unserialise() sets
     * disableHydration to true
     *
     * @var bool
     */
    protected $disableHydration = false;

    /**
     * Phalcon\Mvc\Model\Resultset\Complex constructor
     *
     * @param array                $columnTypes
     * @param ResultInterface|null $result
     * @param mixed|null           $cache
     */
    public function __construct($columnTypes, \Phalcon\Db\ResultInterface $result = null, $cache = null)
    {
    }

    /**
     * Returns current row in the resultset
     *
     * @return mixed
     */
    final public function current(): mixed
    {
    }

    /**
     * Returns a complete resultset as an array, if the resultset has a big
     * number of rows it could consume more memory than currently it does.
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Serializing a resultset will dump all related rows into a big array,
     * serialize it and return the resulting string
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializing a resultset will allow to only works on the rows present in the saved state
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }
}
