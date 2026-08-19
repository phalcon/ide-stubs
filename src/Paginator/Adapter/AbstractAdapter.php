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
use Phalcon\Paginator\Exception;
use Phalcon\Paginator\Exceptions\InvalidLimit;
use Phalcon\Paginator\Exceptions\MissingRequiredParameter;
use Phalcon\Paginator\Repository;
use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\Adapter\AbstractAdapter
 *
 * @phpstan-import-type paginator_config from PaginatorTypes
 * @phpstan-import-type paginator_properties from PaginatorTypes
 */
abstract class AbstractAdapter implements \Phalcon\Paginator\Adapter\AdapterInterface
{
    /**
     * Configuration of paginator
     */
    protected array $config;

    /**
     * Number of rows to show in the paginator. By default is null
     *
     * @var int|null
     */
    protected $limitRows = null;

    /**
     * Current page in paginate
     *
     * @var int|null
     */
    protected $page = null;

    /**
     * Repository for pagination
     */
    protected \Phalcon\Paginator\RepositoryInterface $repository;

    /**
     * Constructor
     *
     * @param paginator_config $config
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
     * @param int $limit
     * @return AdapterInterface
     */
    public function setLimit(int $limit): AdapterInterface
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
     * @param paginator_properties|null $properties
     * @return RepositoryInterface
     */
    protected function getRepository(?array $properties = null): RepositoryInterface
    {
    }
}
