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

/**
 * This class represents a relationship between two models
 *
 * @phpstan-import-type mvc_model_parameters from MvcTypes
 * @phpstan-import-type mvc_relation_fields from MvcTypes
 * @phpstan-import-type mvc_relation_options from MvcTypes
 */
class Relation implements \Phalcon\Mvc\Model\RelationInterface
{
    /**
     * @var int
     */
    const ACTION_CASCADE = 2;

    /**
     * @var int
     */
    const ACTION_RESTRICT = 1;

    /**
     * @var int
     */
    const BELONGS_TO = 0;

    /**
     * @var int
     */
    const HAS_MANY = 2;

    /**
     * @var int
     */
    const HAS_MANY_THROUGH = 4;

    /**
     * @var int
     */
    const HAS_ONE = 1;

    /**
     * @var int
     */
    const HAS_ONE_THROUGH = 3;

    /**
     * @var int
     */
    const NO_ACTION = 0;

    /**
     * @var array|string
     */
    protected $fields;

    /**
     * @var array|string
     *
     * @phpstan-var mvc_relation_fields
     */
    protected $intermediateFields;

    /**
     * @var string|null
     */
    protected $intermediateModel = null;

    /**
     * @var array|string
     *
     * @phpstan-var mvc_relation_fields
     */
    protected $intermediateReferencedFields;

    protected array $options = [];

    /**
     * @var array|string
     */
    protected $referencedFields;

    protected string $referencedModel;

    protected int $type;

    /**
     * Phalcon\Mvc\Model\Relation constructor
     *
     * @param int $type
     * @param string $referencedModel
     * @param array|string $fields
     * @param array|string $referencedFields
     * @param array $options *
     * @phpstan-param mvc_relation_options $options
     */
    public function __construct(int $type, string $referencedModel, $fields, $referencedFields, array $options = [])
    {
    }

    /**
     * Returns the fields
     *
     * @return array|string
     *
     * @phpstan-return mvc_relation_fields
     */
    public function getFields()
    {
    }

    /**
     * Returns the foreign key configuration
     *
     * @return array|string
     *
     * @phpstan-return array<string, mixed>|string|bool
     */
    public function getForeignKey()
    {
    }

    /**
     * Gets the intermediate fields for has--through relations
     *
     * @return array|string
     *
     * @phpstan-return mvc_relation_fields
     */
    public function getIntermediateFields()
    {
    }

    /**
     * Gets the intermediate model for has--through relations
     *
     * @return string
     */
    public function getIntermediateModel(): string
    {
    }

    /**
     * Gets the intermediate referenced fields for has--through relations
     *
     * @return array|string
     *
     * @phpstan-return mvc_relation_fields
     */
    public function getIntermediateReferencedFields()
    {
    }

    /**
     * Returns an option by the specified name
     * If the option does not exist null is returned
     *
     * @param string $name
     */
    public function getOption(string $name)
    {
    }

    /**
     * Returns the options
     *
     * @phpstan-return mvc_relation_options
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Returns parameters that must be always used when the related records are obtained
     *
     * @return array
     *
     * @phpstan-return mvc_model_parameters|false
     */
    public function getParams()
    {
    }

    /**
     * Returns the referenced fields
     *
     * @return array|string
     *
     * @phpstan-return mvc_relation_fields
     */
    public function getReferencedFields()
    {
    }

    /**
     * Returns the referenced model
     *
     * @return string
     */
    public function getReferencedModel(): string
    {
    }

    /**
     * Returns the relation type
     *
     * @return int
     */
    public function getType(): int
    {
    }

    /**
     * Check whether the relation act as a foreign key
     *
     * @return bool
     */
    public function isForeignKey(): bool
    {
    }

    /**
     * Check if records returned by getting belongs-to/has-many are implicitly cached during the current request
     *
     * @return bool
     */
    public function isReusable(): bool
    {
    }

    /**
     * Check whether the relation is a 'many-to-many' relation or not
     *
     * @return bool
     */
    public function isThrough(): bool
    {
    }

    /**
     * Sets the intermediate model data for has--through relations
     *
     * @param array|string $intermediateFields
     * @param string $intermediateModel
     * @param array|string $intermediateReferencedFields
     */
    public function setIntermediateRelation($intermediateFields, string $intermediateModel, $intermediateReferencedFields)
    {
    }
}
