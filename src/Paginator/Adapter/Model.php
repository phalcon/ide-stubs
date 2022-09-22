<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\ResultsetInterface;
use Phalcon\Paginator\Exception;
use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\Adapter\Model
 *
 * This adapter allows to paginate data using a Phalcon\Mvc\Model resultset as a
 * base.
 *
 * ```php
 * use Phalcon\Paginator\Adapter\Model;
 *
 * $paginator = new Model(
 *     [
 *         "model" => Robots::class,
 *         "limit" => 25,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Robots::class,
 *         "parameters" => [
 *              "columns" => "id, name"
 *         ],
 *         "limit" => 12,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Robots::class,
 *         "parameters" => [
 *              "type = :type:",
 *              "bind" => [
 *                  "type" => "mechanical"
 *              ],
 *              "order" => "name"
 *         ],
 *         "limit" => 16,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Robots::class,
 *         "parameters" => "(id % 2) = 0",
 *         "limit" => 8,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Robots::class,
 *         "parameters" => [ "(id % 2) = 0" ],
 *         "limit" => 8,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginate = $paginator->paginate();
 * ```
 */
class Model extends \Phalcon\Paginator\Adapter\AbstractAdapter
{
    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return RepositoryInterface
     */
    public function paginate(): RepositoryInterface
    {
    }
}
