<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\MetaDataInterface
 *
 * Interface for Phalcon\Mvc\Model\MetaData
 *
 * @phpstan-import-type mvc_model_attributes from MvcTypes
 * @phpstan-import-type mvc_metadata_column_map from MvcTypes
 * @phpstan-import-type mvc_metadata_default_values from MvcTypes
 * @phpstan-import-type mvc_metadata_index from MvcTypes
 * @phpstan-import-type mvc_metadata_model from MvcTypes
 * @phpstan-import-type mvc_metadata_slot from MvcTypes
 * @phpstan-import-type mvc_metadata_types from MvcTypes
 */
interface MetaDataInterface
{
    /**
     * Returns table attributes names (fields)
     *
     * @phpstan-return mvc_model_attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes that must be ignored from the INSERT SQL generation
     *
     * @phpstan-return array<string, mixed>
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes that must be ignored from the UPDATE SQL generation
     *
     * @phpstan-return array<string, mixed>
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes and their bind data types
     *
     * @phpstan-return array<string, mixed>
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getBindTypes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns the column map if any
     *
     * @phpstan-return mvc_metadata_column_map|null
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function getColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null;

    /**
     * Returns attributes and their data types
     *
     * @phpstan-return mvc_metadata_types
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes which types are numerical
     *
     * @phpstan-return array<string, mixed>
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDataTypesNumeric(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes (which have default values) and their default values
     *
     * @phpstan-return mvc_metadata_default_values
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getDefaultValues(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns attributes allow empty strings
     *
     * @phpstan-return array<string, mixed>
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns the name of identity field (if one is present)
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return bool|string|null
     */
    public function getIdentityField(\Phalcon\Mvc\ModelInterface $model): bool|string|null;

    /**
     * Returns an array of fields which are not part of the primary key
     *
     * @phpstan-return mvc_model_attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNonPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns an array of not null attributes
     *
     * @phpstan-return mvc_model_attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getNotNullAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns an array of fields which are part of the primary key
     *
     * @phpstan-return mvc_model_attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array
     */
    public function getPrimaryKeyAttributes(\Phalcon\Mvc\ModelInterface $model): array;

    /**
     * Returns the reverse column map if any
     *
     * @phpstan-return mvc_metadata_column_map|null
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function getReverseColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null;

    /**
     * Return the strategy to obtain the meta-data
     *
     * @return StrategyInterface
     */
    public function getStrategy(): StrategyInterface;

    /**
     * Check if a model has certain attribute
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $attribute
     * @return bool
     */
    public function hasAttribute(\Phalcon\Mvc\ModelInterface $model, string $attribute): bool;

    /**
     * Checks if the internal meta-data container is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Reads meta-data from the adapter
     *
     * @phpstan-return mvc_metadata_index|null
     * @param string $key
     * @return array|null
     */
    public function read(string $key): array|null;

    /**
     * Reads the ordered/reversed column map for certain model
     *
     * @phpstan-return mvc_metadata_index|null
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function readColumnMap(\Phalcon\Mvc\ModelInterface $model): array|null;

    /**
     * Reads column-map information for certain model using a MODEL_ constant
     *
     * @phpstan-return mvc_metadata_slot
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @return array|bool|string|null
     */
    public function readColumnMapIndex(\Phalcon\Mvc\ModelInterface $model, int $index): bool|string|array|null;

    /**
     * Reads meta-data for certain model
     *
     * @phpstan-return mvc_metadata_model|null
     * @param \Phalcon\Mvc\ModelInterface $model
     * @return array|null
     */
    public function readMetaData(\Phalcon\Mvc\ModelInterface $model): array|null;

    /**
     * Reads meta-data for certain model using a MODEL_ constant
     *
     * @phpstan-return mvc_metadata_slot
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @return array|bool|string|null
     */
    public function readMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index): bool|string|array|null;

    /**
     * Resets internal meta-data in order to regenerate it
     */
    public function reset();

    /**
     * Set the attributes that must be ignored from the INSERT SQL generation
     *
     * @phpstan-param array<string, mixed> $attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     */
    public function setAutomaticCreateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes);

    /**
     * Set the attributes that must be ignored from the UPDATE SQL generation
     *
     * @phpstan-param array<string, mixed> $attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     */
    public function setAutomaticUpdateAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes);

    /**
     * Set the attributes that allow empty string values
     *
     * @phpstan-param array<string, mixed> $attributes
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param array $attributes
     * @return void
     */
    public function setEmptyStringAttributes(\Phalcon\Mvc\ModelInterface $model, array $attributes): void;

    /**
     * Set the meta-data extraction strategy
     *
     * @param \Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface $strategy
     */
    public function setStrategy(\Phalcon\Mvc\Model\MetaData\Strategy\StrategyInterface $strategy);

    /**
     * Writes meta-data to the adapter
     *
     * @phpstan-param mvc_metadata_index $data
     * @param string $key
     * @param array $data
     * @return void
     */
    public function write(string $key, array $data): void;

    /**
     * Writes meta-data for certain model using a MODEL_ constant
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param int $index
     * @param mixed $data
     */
    public function writeMetaDataIndex(\Phalcon\Mvc\ModelInterface $model, int $index, $data);
}
