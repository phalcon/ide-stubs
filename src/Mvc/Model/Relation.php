<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\Relation
 *
 * This class represents a relationship between two models
 */
class Relation implements \Phalcon\Mvc\Model\RelationInterface
{
    const ACTION_CASCADE = 2;

    const ACTION_RESTRICT = 1;

    const BELONGS_TO = 0;

    const HAS_MANY = 2;

    const HAS_MANY_THROUGH = 4;

    const HAS_ONE = 1;

    const HAS_ONE_THROUGH = 3;

    const NO_ACTION = 0;

    /**
     * @var array|string
     */
    protected $fields;

    /**
     * @var array|string
     */
    protected $intermediateFields;

    /**
     * @var string|null
     */
    protected $intermediateModel = null;

    /**
     * @var array|string
     */
    protected $intermediateReferencedFields;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array|string
     */
    protected $referencedFields;

    /**
     * @var string
     */
    protected $referencedModel;

    /**
     * @var int
     */
    protected $type;

    /**
     * Phalcon\Mvc\Model\Relation constructor
     *
     * @param int $type
     * @param string $referencedModel
     * @param array|string $fields
     * @param array|string $referencedFields
     * @param array $options
     */
    public function __construct(int $type, string $referencedModel, $fields, $referencedFields, array $options = [])
    {
    }

    /**
     * Returns the fields
     *
     * @return array|string
     */
    public function getFields()
    {
    }

    /**
     * Returns the foreign key configuration
     *
     * @return array|string
     */
    public function getForeignKey()
    {
    }

    /**
     * Gets the intermediate fields for has--through relations
     *
     * @return array|string
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
     */
    public function getIntermediateReferencedFields()
    {
    }

    /**
     * Returns an option by the specified name
     * If the option doesn't exist null is returned
     *
     * @param string $name
     */
    public function getOption(string $name)
    {
    }

    /**
     * Returns the options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Returns parameters that must be always used when the related records are obtained
     *
     * @return array
     */
    public function getParams()
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
     * Returns the referenced fields
     *
     * @return array|string
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
     * Check whether the relation act as a foreign key
     *
     * @return bool
     */
    public function isForeignKey(): bool
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
     * Check if records returned by getting belongs-to/has-many are implicitly cached during the current request
     *
     * @return bool
     */
    public function isReusable(): bool
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
