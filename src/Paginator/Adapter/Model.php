<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Contracts\Paginator\PaginatorTypes;
use Phalcon\Paginator\Exceptions\MissingRequiredParameter;
use Phalcon\Paginator\RepositoryInterface;

/**
 * This adapter allows to paginate data using a Phalcon\Mvc\Model resultset as a
 * base.
 *
 * ```php
 * use Phalcon\Paginator\Adapter\Model;
 *
 * $paginator = new Model(
 *     [
 *         "model" => Invoices::class,
 *         "limit" => 25,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Invoices::class,
 *         "parameters" => [
 *              "columns" => "inv_id, inv_title"
 *         ],
 *         "limit" => 12,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Invoices::class,
 *         "parameters" => [
 *              "inv_status_flag = :flag:",
 *              "bind" => [
 *                  "flag" => 1
 *              ],
 *              "order" => "inv_title"
 *         ],
 *         "limit" => 16,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Invoices::class,
 *         "parameters" => "(inv_id % 2) = 0",
 *         "limit" => 8,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginator = new Model(
 *     [
 *         "model" => Invoices::class,
 *         "parameters" => [ "(inv_id % 2) = 0" ],
 *         "limit" => 8,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginate = $paginator->paginate();
 * ```
 *
 * @phpstan-import-type paginator_config from PaginatorTypes
 */
class Model extends \Phalcon\Paginator\Adapter\AbstractAdapter
{
    /**
     * Phalcon\Paginator\Adapter\Model constructor
     *
     * @param paginator_config $config = [
     *     'model'  => null,
     *     'limit'  => 10,
     *     'page'   => 1
     * ]
     */
    public function __construct(array $config)
    {
    }

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return RepositoryInterface
     */
    public function paginate(): RepositoryInterface
    {
    }
}
