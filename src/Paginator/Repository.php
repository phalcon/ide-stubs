<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Paginator;

use JsonSerializable;
use Phalcon\Contracts\Paginator\PaginatorTypes;

/**
 * Repository of current state Phalcon\Paginator\AdapterInterface::paginate()
 *
 * @phpstan-import-type paginator_aliases from PaginatorTypes
 * @phpstan-import-type paginator_properties from PaginatorTypes
 */
class Repository implements \Phalcon\Paginator\RepositoryInterface, \JsonSerializable
{
    /**
     * @var paginator_aliases
     */
    protected array $aliases = [];

    /**
     * @var paginator_properties
     */
    protected array $properties = [];

    /**
     * @param string $property
     * @return mixed|null
     */
    public function __get(string $property): mixed
    {
    }

    /**
     * @return paginator_aliases
     */
    public function getAliases(): array
    {
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
    }

    /**
     * @return int
     */
    public function getFirst(): int
    {
    }

    /**
     * @return mixed
     */
    public function getItems(): mixed
    {
    }

    /**
     * @return int
     */
    public function getLast(): int
    {
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
    }

    /**
     * @return int
     */
    public function getNext(): int
    {
    }

    /**
     * @return int
     */
    public function getPrevious(): int
    {
    }

    /**
     * @return int
     */
    public function getTotalItems(): int
    {
    }

    /**
     * @return paginator_properties
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * @param paginator_aliases $aliases
     * @return RepositoryInterface
     */
    public function setAliases(array $aliases): RepositoryInterface
    {
    }

    /**
     * @param paginator_properties $properties
     * @return RepositoryInterface
     */
    public function setProperties(array $properties): RepositoryInterface
    {
    }

    /**
     * Gets value of property by name
     *
     * The repository is filled by the adapters, which store an int under every
     * property that has an int default, so callers passing one are handed an
     * int back.
     *
     * @phpstan-return ($defaultValue is int ? int : mixed)
     * @param string $property
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getProperty(string $property, $defaultValue = null): mixed
    {
    }

    /**
     * Resolve alias property name
     *
     * @param string $property
     * @return string
     */
    protected function getRealNameProperty(string $property): string
    {
    }
}
