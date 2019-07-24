<?php

namespace Phalcon\Paginator;

/**
 * Phalcon\Paginator\Repository
 *
 * Repository of current state Phalcon\Paginator\AdapterInterface::getPaginate()
 */
class Repository implements RepositoryInterface
{
	protected $_properties = [];
	protected $_aliases = [];

	/**
	 * {@inheritdoc}
	 */
	public function setProperties(array $properties) : RepositoryInterface
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function setAliases(array $aliases) : RepositoryInterface
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getAliases() : array
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getItems()	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getTotalItems() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLimit() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getFirst() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getPrevious() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCurrent() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getNext() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLast() : int
	{
	}

	/**
	 * {@inheritdoc}
	 */
	public function __get(string $property)
	{
	}

	/**
	 * Gets value of property by name
	 */
	protected function getProperty(string $property, $defaultValue = null)	{
	}

	/**
	 * Resolve legacy alias for compatibility with version 2.0.x
	 */
	protected function getRealNameProperty(string $property) : string
	{
	}
}
