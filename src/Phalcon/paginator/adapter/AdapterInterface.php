<?php

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
     * @return \Phalcon\Paginator\RepositoryInterface
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
