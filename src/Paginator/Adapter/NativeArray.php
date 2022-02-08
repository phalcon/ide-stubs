<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Paginator\Exception;
use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\Adapter\NativeArray
 *
 * Pagination using a PHP array as source of data
 *
 * ```php
 * use Phalcon\Paginator\Adapter\NativeArray;
 *
 * $paginator = new NativeArray(
 *     [
 *         "data"  => [
 *             ["id" => 1, "name" => "Artichoke"],
 *             ["id" => 2, "name" => "Carrots"],
 *             ["id" => 3, "name" => "Beet"],
 *             ["id" => 4, "name" => "Lettuce"],
 *             ["id" => 5, "name" => ""],
 *         ],
 *         "limit" => 2,
 *         "page"  => $currentPage,
 *     ]
 * );
 * ```
 */
class NativeArray extends \Phalcon\Paginator\Adapter\AbstractAdapter
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
