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

/**
 * Phalcon\Paginator\Repository
 *
 * Repository of current state Phalcon\Paginator\AdapterInterface::paginate()
 */
class Repository implements \Phalcon\Paginator\RepositoryInterface, \JsonSerializable
{
    /**
     * @var array
     */
    protected $aliases = [];

    /**
     * @var array
     */
    protected $properties = [];

    /**
     * {@inheritdoc}
     *
     * @param string $property
     * @return mixed|null
     */
    public function __get(string $property): mixed
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getAliases(): array
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getCurrent(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getFirst(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getItems(): mixed
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getLast(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getLimit(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getNext(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getPrevious(): int
    {
    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getTotalItems(): int
    {
    }

    /**
     * See [jsonSerialize](https://php.net/manual/en/jsonserializable.jsonserialize.php)
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param array $aliases
     * @return RepositoryInterface
     */
    public function setAliases(array $aliases): RepositoryInterface
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param array $properties
     * @return RepositoryInterface
     */
    public function setProperties(array $properties): RepositoryInterface
    {
    }

    /**
     * Gets value of property by name
     *
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
