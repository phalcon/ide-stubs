<?php

namespace Phalcon\Paginator\Adapter;

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
     */
    protected $builder;

    /**
     * Columns for count query if builder has having
     */
    protected $columns;


    /**
     * Phalcon\Paginator\Adapter\QueryBuilder
     *
     * @param array $config
     */
    public function __construct(array $config) {}

    /**
     * Get the current page number
     *
     * @return int
     */
    public function getCurrentPage(): int {}

    /**
     * Get query builder object
     *
     * @return \Phalcon\Mvc\Model\Query\Builder
     */
    public function getQueryBuilder(): Builder {}

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return \Phalcon\Paginator\RepositoryInterface
     */
    public function paginate(): RepositoryInterface {}

    /**
     * Set query builder object
     *
     * @param \Phalcon\Mvc\Model\Query\Builder $builder
     * @return QueryBuilder
     */
    public function setQueryBuilder(\Phalcon\Mvc\Model\Query\Builder $builder): QueryBuilder {}

}
