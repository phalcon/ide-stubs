<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\MetaData\Strategy;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Di\DiInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface StrategyInterface
{
    /**
     * Read the model's column map, this can't be inferred
     *
     * @todo Not implemented
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Di\DiInterface $container
     * @return array
     */
    public function getColumnMaps(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Di\DiInterface $container): array;

    /**
     * The meta-data is obtained by reading the column descriptions from the database information schema
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param \Phalcon\Di\DiInterface $container
     * @return array
     */
    public function getMetaData(\Phalcon\Mvc\ModelInterface $model, \Phalcon\Di\DiInterface $container): array;
}
