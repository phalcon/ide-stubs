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
 * Phalcon\Paginator\Adapter\AbstractAdapter
 */
abstract class AbstractAdapter implements \Phalcon\Paginator\Adapter\AdapterInterface
{
    /**
     * Configuration of paginator
     */
    protected $config;

    /**
     * Number of rows to show in the paginator. By default is null
     */
    protected $limitRows = null;

    /**
     * Current page in paginate
     */
    protected $page = null;

    /**
     * Repository for pagination
     *
     * @var RepositoryInterface
     */
    protected $repository;


    /**
     * Phalcon\Paginator\Adapter\AbstractAdapter constructor
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
    }

    /**
     * Get current rows limit
     *
     * @return int
     */
    public function getLimit(): int
    {
    }

    /**
     * Set the current page number
     *
     * @param int $page
     * @return AdapterInterface
     */
    public function setCurrentPage(int $page): AdapterInterface
    {
    }

    /**
     * Set current rows limit
     *
     * @param int $limitRows
     * @return AdapterInterface
     */
    public function setLimit(int $limitRows): AdapterInterface
    {
    }

    /**
     * Sets current repository for pagination
     *
     * @param \Phalcon\Paginator\RepositoryInterface $repository
     * @return AdapterInterface
     */
    public function setRepository(\Phalcon\Paginator\RepositoryInterface $repository): AdapterInterface
    {
    }

    /**
     * Gets current repository for pagination
     *
     * @param array $properties
     * @return RepositoryInterface
     */
    protected function getRepository(array $properties = null): RepositoryInterface
    {
    }
}
