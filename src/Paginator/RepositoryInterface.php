<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\RepositoryInterface
 *
 * Interface for the repository of current state
 * Phalcon\Paginator\AdapterInterface::paginate()
 */
interface RepositoryInterface
{
    const PROPERTY_CURRENT_PAGE = 'current';

    const PROPERTY_FIRST_PAGE = 'first';

    const PROPERTY_ITEMS = 'items';

    const PROPERTY_LAST_PAGE = 'last';

    const PROPERTY_LIMIT = 'limit';

    const PROPERTY_NEXT_PAGE = 'next';

    const PROPERTY_PREVIOUS_PAGE = 'previous';

    const PROPERTY_TOTAL_ITEMS = 'total_items';


    /**
     * Gets the aliases for properties repository
     *
     * @return array
     */
    public function getAliases(): array;

    /**
     * Gets number of the current page
     *
     * @return int
     */
    public function getCurrent(): int;

    /**
     * Gets number of the first page
     *
     * @return int
     */
    public function getFirst(): int;

    /**
     * Gets the items on the current page
     *
     * @return mixed
     */
    public function getItems(): mixed;

    /**
     * Gets number of the last page
     *
     * @return int
     */
    public function getLast(): int;

    /**
     * Gets current rows limit
     *
     * @return int
     */
    public function getLimit(): int;

    /**
     * Gets number of the next page
     *
     * @return int
     */
    public function getNext(): int;

    /**
     * Gets number of the previous page
     *
     * @return int
     */
    public function getPrevious(): int;

    /**
     * Gets the total number of items
     *
     * @return int
     */
    public function getTotalItems(): int;

    /**
     * Sets the aliases for properties repository
     *
     * @param array $aliases
     * @return RepositoryInterface
     */
    public function setAliases(array $aliases): RepositoryInterface;

    /**
     * Sets values for properties of the repository
     *
     * @param array $properties
     * @return RepositoryInterface
     */
    public function setProperties(array $properties): RepositoryInterface;
}
