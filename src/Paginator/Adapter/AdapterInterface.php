<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\AdapterInterface
 *
 * Interface for Phalcon\Paginator adapters
 */
interface AdapterInterface
{
    /**
     * Get current rows limit
     *
     * @return int
     */
    public function getLimit(): int;

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return RepositoryInterface
     */
    public function paginate(): RepositoryInterface;

    /**
     * Set the current page number
     *
     * @param int $page
     */
    public function setCurrentPage(int $page);

    /**
     * Set current rows limit
     *
     * @param int $limit
     */
    public function setLimit(int $limit);
}
