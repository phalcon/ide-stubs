<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator\Adapter;

use Phalcon\Mvc\Model\Query\Builder;
use Phalcon\Paginator\Exception;
use Phalcon\Paginator\Exceptions\InvalidBuilderInstance;
use Phalcon\Paginator\Exceptions\InvalidCursorColumn;
use Phalcon\Paginator\Exceptions\MissingRequiredParameter;
use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\Adapter\QueryBuilderCursor
 *
 * Cursor-based (keyset) pagination using a PHQL query builder as source of
 * data.
 *
 * Unlike offset pagination, this adapter does not use an ever-growing OFFSET.
 * It appends a WHERE condition on a unique, indexed cursor column so that each
 * page is an O(1) index seek regardless of depth.
 *
 * Limitations:
 * - No total count: `getTotalItems()` always returns 0.
 * - No random access: `getLast()` always returns 0. Pages must be traversed
 *   in order by following the cursor value returned in `getNext()`.
 * - The cursor column must be unique and indexed (e.g. a primary key).
 * - Items are returned as an array of associative arrays (via
 *   `Resultset::toArray()`), not as model objects.
 * - `cursorColumn` must match the PHQL-accessible column name exactly
 *   (e.g. `"inv_id"`).
 *
 * ```php
 * use Phalcon\Paginator\Adapter\QueryBuilderCursor;
 *
 * $builder = $this->modelsManager->createBuilder()
 *                 ->columns("inv_id, inv_title")
 *                 ->from(Invoices::class)
 *                 ->orderBy("inv_id");
 *
 * $paginator = new QueryBuilderCursor(
 *     [
 *         "builder"      => $builder,
 *         "limit"        => 20,
 *         "cursorColumn" => "inv_id",
 *         "cursor"       => null,  // first page; pass $page->getNext() for subsequent pages
 *     ]
 * );
 *
 * $page = $paginator->paginate();
 * // $page->getItems()   - array of rows for this page
 * // $page->getNext()    - cursor value to pass for the next page (0 means no more pages)
 * // $page->getCurrent() - cursor value used for this page (0 on first page)
 * ```
 */
class QueryBuilderCursor extends \Phalcon\Paginator\Adapter\AbstractAdapter
{
    /**
     * Paginator's data
     *
     * @var Builder
     */
    protected $builder;

    /**
     * The cursor value for the current page (null = first page)
     *
     * @var mixed
     */
    protected $cursor = null;

    /**
     * The column used as the cursor (must be unique and indexed)
     *
     * @var string
     */
    protected $cursorColumn;

    /**
     * Phalcon\Paginator\Adapter\QueryBuilderCursor
     *
     * @param array $config = [
     *     'limit'        => 10,
     *     'builder'      => null,
     *     'cursorColumn' => 'id',
     *     'cursor'       => null
     * ]
     */
    public function __construct(array $config)
    {
    }

    /**
     * Get the cursor value for the current page (null on first page)
     *
     * @return mixed
     */
    public function getCursor(): mixed
    {
    }

    /**
     * Get the cursor column name
     *
     * @return string
     */
    public function getCursorColumn(): string
    {
    }

    /**
     * Get the current page number
     *
     * Returns the cursor value used for this page cast to int, or 0 for the
     * first page. Use getCursor() to retrieve the raw cursor value.
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
     * Fetches `limit + 1` rows from the builder. If the extra row is present
     * a next page exists; it is discarded and the cursor value of the last
     * included row is stored in the `next` repository property.
     *
     * @return RepositoryInterface
     */
    public function paginate(): RepositoryInterface
    {
    }

    /**
     * Set the cursor value for the next paginate() call
     *
     * Pass the value returned by Repository::getNext() to advance to the
     * next page, or null to restart from the first page.
     *
     * @param mixed $cursor
     * @return static
     */
    public function setCursor($cursor): static
    {
    }

    /**
     * Set query builder object
     *
     * @param \Phalcon\Mvc\Model\Query\Builder $builder
     * @return static
     */
    public function setQueryBuilder(\Phalcon\Mvc\Model\Query\Builder $builder): static
    {
    }
}
