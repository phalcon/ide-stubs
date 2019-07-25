<?php

namespace Phalcon\Paginator\Adapter;

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
    public function __construct(array $config) {}

    /**
     * Get current rows limit
     *
     * @return int
     */
    public function getLimit(): int {}

    /**
     * Set the current page number
     *
     * @param int $page
     * @return Adapter
     */
    public function setCurrentPage(int $page): Adapter {}

    /**
     * Set current rows limit
     *
     * @param int $limitRows
     * @return Adapter
     */
    public function setLimit(int $limitRows): Adapter {}

    /**
     * Sets current repository for pagination
     *
     * @param \Phalcon\Paginator\RepositoryInterface $repository
     * @return Adapter
     */
    public function setRepository(\Phalcon\Paginator\RepositoryInterface $repository): Adapter {}

    /**
     * Gets current repository for pagination
     *
     * @param array $properties
     * @return \Phalcon\Paginator\RepositoryInterface
     */
    protected function getRepository(array $properties = null): RepositoryInterface {}

}
