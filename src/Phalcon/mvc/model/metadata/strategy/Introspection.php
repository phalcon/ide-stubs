<?php

namespace Phalcon\Mvc\Model\MetaData\Strategy;

use Phalcon\Di\DiInterface;
use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Db\Column;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Mvc\Model\MetaData;
use Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface;

/**
 * Phalcon\Mvc\Model\MetaData\Strategy\Introspection
 *
 * Queries the table meta-data in order to introspect the model's metadata
 */
class Introspection implements \Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface
{

    /**
     * Read the model's column map, this can't be inferred
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Di\DiInterface $container
     * @return array
     */
    final public function getColumnMaps(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Di\DiInterface $container): array
    {
    }

    /**
     * The meta-data is obtained by reading the column descriptions from the database information schema
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Di\DiInterface $container
     * @return array
     */
    final public function getMetaData(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Di\DiInterface $container): array
    {
    }

}
