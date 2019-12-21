<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Cache\Adapter\AdapterInterface as CacheAdapterInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\MetaData\Strategy\Introspection;
use Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\MetaData
 *
 * Because Phalcon\Mvc\Model requires meta-data like field names, data types,
 * primary keys, etc. This component collect them and store for further
 * querying by Phalcon\Mvc\Model. Phalcon\Mvc\Model\MetaData can also use
 * adapters to store temporarily or permanently the meta-data.
 *
 * A standard Phalcon\Mvc\Model\MetaData can be used to query model attributes:
 *
 * ```php
 * $metaData = new \Phalcon\Mvc\Model\MetaData\Memory();
 *
 * $attributes = $metaData->getAttributes(
 *     new Robots()
 * );
 *
 * print_r($attributes);
 * ```
 */
abstract class MetaData implements InjectionAwareInterface, MetaDataInterface
{

    const MODELS_ATTRIBUTES = 0;


    const MODELS_AUTOMATIC_DEFAULT_INSERT = 10;


    const MODELS_AUTOMATIC_DEFAULT_UPDATE = 11;


    const MODELS_COLUMN_MAP = 0;


    const MODELS_DATE_AT = 6;


    const MODELS_DATE_IN = 7;


    const MODELS_DATA_TYPES = 4;


    const MODELS_DATA_TYPES_BIND = 9;


    const MODELS_DATA_TYPES_NUMERIC = 5;


    const MODELS_DEFAULT_VALUES = 12;


    const MODELS_EMPTY_STRING_VALUES = 13;


    const MODELS_IDENTITY_COLUMN = 8;


    const MODELS_NON_PRIMARY_KEY = 2;


    const MODELS_NOT_NULL = 3;


    const MODELS_PRIMARY_KEY = 1;


    const MODELS_REVERSE_COLUMN_MAP = 1;

    /**
     * @var CacheAdapterInterface
     */
    protected $adapter;


    protected $columnMap;


    protected $container;


    protected $metaData = array();


    protected $strategy;


    /**
     * Returns table attributes names (fields)
     *
     * ```php
     * print_r(
     *     $metaData->getAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes that must be ignored from the INSERT SQL generation
     *
     * ```php
     * print_r(
     *     $metaData->getAutomaticCreateAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getAutomaticCreateAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes that must be ignored from the UPDATE SQL generation
     *
     * ```php
     * print_r(
     *     $metaData->getAutomaticUpdateAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getAutomaticUpdateAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes and their bind data types
     *
     * ```php
     * print_r(
     *     $metaData->getBindTypes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getBindTypes(ModelInterface $model): array
    {
    }

    /**
     * Returns the column map if any
     *
     * ```php
     * print_r(
     *     $metaData->getColumnMap(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getColumnMap(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes (which have default values) and their default values
     *
     * ```php
     * print_r(
     *     $metaData->getDefaultValues(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getDefaultValues(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes and their data types
     *
     * ```php
     * print_r(
     *     $metaData->getDataTypes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getDataTypes(ModelInterface $model): array
    {
    }

    /**
     * Returns attributes which types are numerical
     *
     * ```php
     * print_r(
     *     $metaData->getDataTypesNumeric(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getDataTypesNumeric(ModelInterface $model): array
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Returns attributes allow empty strings
     *
     * ```php
     * print_r(
     *     $metaData->getEmptyStringAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getEmptyStringAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns the name of identity field (if one is present)
     *
     * ```php
     * print_r(
     *     $metaData->getIdentityField(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return string|null
     */
    public function getIdentityField(ModelInterface $model): ?string
    {
    }

    /**
     * Returns an array of fields which are not part of the primary key
     *
     * ```php
     * print_r(
     *     $metaData->getNonPrimaryKeyAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getNonPrimaryKeyAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns an array of not null attributes
     *
     * ```php
     * print_r(
     *     $metaData->getNotNullAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getNotNullAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns an array of fields which are part of the primary key
     *
     * ```php
     * print_r(
     *     $metaData->getPrimaryKeyAttributes(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getPrimaryKeyAttributes(ModelInterface $model): array
    {
    }

    /**
     * Returns the reverse column map if any
     *
     * ```php
     * print_r(
     *     $metaData->getReverseColumnMap(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    public function getReverseColumnMap(ModelInterface $model): array
    {
    }

    /**
     * Return the strategy to obtain the meta-data
     *
     * @return StrategyInterface
     */
    public function getStrategy(): StrategyInterface
    {
    }

    /**
     * Check if a model has certain attribute
     *
     * ```php
     * var_dump(
     *     $metaData->hasAttribute(
     *         new Robots(),
     *         "name"
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param string $attribute
     * @return bool
     */
    public function hasAttribute(ModelInterface $model, string $attribute): bool
    {
    }

    /**
     * Checks if the internal meta-data container is empty
     *
     * ```php
     * var_dump(
     *     $metaData->isEmpty()
     * );
     * ```
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Reads metadata from the adapter
     *
     * @param string $key
     * @return array|null
     */
    public function read(string $key): ?array
    {
    }

    /**
     * Reads the ordered/reversed column map for certain model
     *
     * ```php
     * print_r(
     *     $metaData->readColumnMap(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array|null
     */
    final public function readColumnMap(ModelInterface $model): ?array
    {
    }

    /**
     * Reads column-map information for certain model using a MODEL_ constant
     *
     * ```php
     * print_r(
     *     $metaData->readColumnMapIndex(
     *         new Robots(),
     *         MetaData::MODELS_REVERSE_COLUMN_MAP
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param int $index
     */
    final public function readColumnMapIndex(ModelInterface $model, int $index)
    {
    }

    /**
     * Reads the complete meta-data for certain model
     *
     * ```php
     * print_r(
     *     $metaData->readMetaData(
     *         new Robots()
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @return array
     */
    final public function readMetaData(ModelInterface $model): array
    {
    }

    /**
     * Reads meta-data for certain model
     *
     * ```php
     * print_r(
     *     $metaData->readMetaDataIndex(
     *         new Robots(),
     *         0
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param int $index
     */
    final public function readMetaDataIndex(ModelInterface $model, int $index)
    {
    }

    /**
     * Resets internal meta-data in order to regenerate it
     *
     * ```php
     * $metaData->reset();
     * ```
     *
     * @return void
     */
    public function reset()
    {
    }

    /**
     * Set the attributes that must be ignored from the INSERT SQL generation
     *
     * ```php
     * $metaData->setAutomaticCreateAttributes(
     *     new Robots(),
     *     [
     *         "created_at" => true,
     *     ]
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setAutomaticCreateAttributes(ModelInterface $model, array $attributes)
    {
    }

    /**
     * Set the attributes that must be ignored from the UPDATE SQL generation
     *
     * ```php
     * $metaData->setAutomaticUpdateAttributes(
     *     new Robots(),
     *     [
     *         "modified_at" => true,
     *     ]
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setAutomaticUpdateAttributes(ModelInterface $model, array $attributes)
    {
    }

    /**
     * Set the attributes that allow empty string values
     *
     * ```php
     * $metaData->setEmptyStringAttributes(
     *     new Robots(),
     *     [
     *         "name" => true,
     *     ]
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setEmptyStringAttributes(ModelInterface $model, array $attributes)
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param DiInterface $container
     * @return void
     */
    public function setDI(DiInterface $container)
    {
    }

    /**
     * Set the meta-data extraction strategy
     *
     * @param StrategyInterface $strategy
     * @return void
     */
    public function setStrategy(StrategyInterface $strategy)
    {
    }

    /**
     * Writes the metadata to adapter
     *
     * @param string $key
     * @param array $data
     * @return void
     */
    public function write(string $key, array $data)
    {
    }

    /**
     * Writes meta-data for certain model using a MODEL_ constant
     *
     * ```php
     * print_r(
     *     $metaData->writeColumnMapIndex(
     *         new Robots(),
     *         MetaData::MODELS_REVERSE_COLUMN_MAP,
     *         [
     *             "leName" => "name",
     *         ]
     *     )
     * );
     * ```
     *
     * @param ModelInterface $model
     * @param int $index
     * @param mixed $data
     * @return void
     */
    final public function writeMetaDataIndex(ModelInterface $model, int $index, $data)
    {
    }

    /**
     * Initialize the metadata for certain table
     *
     * @param ModelInterface $model
     * @param mixed $key
     * @param mixed $table
     * @param mixed $schema
     */
    final protected function initialize(ModelInterface $model, $key, $table, $schema)
    {
    }

    /**
     * Throws an exception when the metadata cannot be written
     *
     * @param mixed $option
     * @return void
     */
    private function throwWriteException($option)
    {
    }
}
