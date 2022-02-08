<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Db\Enum;
use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Paginator\RepositoryInterface;
use Phalcon\Paginator\Exception;

/**
 * Phalcon\Paginator\Adapter\QueryBuilder
 *
 * Pagination using a PHQL query builder as source of data
 *
 * ```php
 * use Phalcon\Paginator\Adapter\QueryBuilder;
 *
 * $builder = $this->modelsManager->createBuilder()
 *                 ->columns("id, name")
 *                 ->from(Robots::class)
 *                 ->orderBy("name");
 *
 * $paginator = new QueryBuilder(
 *     [
 *         "builder" => $builder,
 *         "limit"   => 20,
 *         "page"    => 1,
 *     ]
 * );
 * ```
 */
class QueryBuilder extends \Phalcon\Paginator\Adapter\AbstractAdapter
{
    /**
     * Paginator's data
     *
     * @var Builder
     */
    protected $builder;

    /**
     * Columns for count query if builder has having
     *
     * @var array|string
     */
    protected $columns;

    /**
     * Phalcon\Paginator\Adapter\QueryBuilder
     *
     * @param array $config = [
     *     'limit' => 10,
     *     'builder' => null,
     *     'columns' => ''
     * ]
     */
    public function __construct(array $config)
    {
    }

    /**
     * Get the current page number
     *
     * @return int
     */
    public function getCurrentPage(): int
    {
    }

    /**
     * Get query builder object
     *
     * @return Builder
     */
    public function getQueryBuilder(): Builder
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

    /**
     * Set query builder object
     *
     * @param \Phalcon\Mvc\Model\Query\Builder $builder
     * @return QueryBuilder
     */
    public function setQueryBuilder(\Phalcon\Mvc\Model\Query\Builder $builder): QueryBuilder
    {
    }
}
