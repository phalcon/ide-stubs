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
abstract class MetaData implements \Phalcon\Di\InjectionAwareInterface, \Phalcon\Mvc\Model\MetaDataInterface
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
     * @var CacheAdapterInterface|null
     */
    protected $adapter = null;

    /**
     * @var array
     */
    protected $columnMap = [];

    /**
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * @var array
     */
    protected $metaData = [];

    /**
     * @var StrategyInterface|null
     */
    protected $strategy = null;

    /**
     * Return the internal cache adapter
     *
     * @return CacheAdapterInterface|null
     */
    public function getAdapter(): CacheAdapterInterface|null
    {
    }

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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getBindTypes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function getColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDefaultValues(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypesNumeric(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return string|null
     */
    public function getIdentityField(\Phalcon\Mvc\ModelInterface $model): string|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNonPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNotNullAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function getReverseColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $attribute
     * @return bool
     */
    public function hasAttribute(\Phalcon\Mvc\ModelInterface $model, string $attribute): bool
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
    public function read(string $key): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    final public function readColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @return array|null
     */
    final public function readColumnMapIndex(\Phalcon\Mvc\ModelInterface $model, int $index): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    final public function readMetaData(\Phalcon\Mvc\ModelInterface $model): array|null
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @return array|null
     */
    final public function readMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index): array|null
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
    public function reset(): void
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes): void
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes): void
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes): void
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Set the meta-data extraction strategy
     *
     * @param \Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface $strategy
     * @return void
     */
    public function setStrategy(\Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface $strategy): void
    {
    }

    /**
     * Writes the metadata to adapter
     *
     * @param string $key
     * @param array $data
     * @return void
     */
    public function write(string $key, array $data): void
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
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @param mixed $data
     * @return void
     */
    final public function writeMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index, $data): void
    {
    }

    /**
     * Initialize old behaviour for compatability
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $key
     * @param mixed $table
     * @param mixed $schema
     */
    final protected function initialize(\Phalcon\Mvc\ModelInterface $model, $key, $table, $schema)
    {
    }

    /**
     * Initialize the metadata for certain table
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $key
     * @return bool
     */
    final protected function initializeMetaData(\Phalcon\Mvc\ModelInterface $model, $key): bool
    {
    }

    /**
     * Initialize ColumnMap for a certain table
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param mixed $key
     * @return bool
     */
    final protected function initializeColumnMap(\Phalcon\Mvc\ModelInterface $model, $key): bool
    {
    }

    /**
     * Throws an exception when the metadata cannot be written
     *
     * @param mixed $option
     * @return void
     */
    private function throwWriteException($option): void
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null): mixed
    {
    }

    /**
     * Returns a MetaData Unique key for meta-data is created using className
     *
     * @return string
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    final public function getMetaDataUniqueKey(\Phalcon\Mvc\ModelInterface $model): string|null
    {
    }

    /**
     * Returns a ColumnMap Unique key for meta-data is created using className
     *
     * @return string
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    final public function getColumnMapUniqueKey(\Phalcon\Mvc\ModelInterface $model): string|null
    {
    }
}
