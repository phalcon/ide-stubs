<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

use Phalcon\Contracts\Annotations\AnnotationsTypes;

/**
 * Allows to manipulate the annotations reflection in an OO manner
 *
 * ```php
 * use Phalcon\Annotations\Reader;
 * use Phalcon\Annotations\Reflection;
 *
 * // Parse the annotations in a class
 * $reader = new Reader();
 * $parsing = $reader->parse("MyComponent");
 *
 * // Create the reflection
 * $reflection = new Reflection($parsing);
 *
 * // Get the annotations in the class docblock
 * $classAnnotations = $reflection->getClassAnnotations();
 * ```
 *
 * @phpstan-import-type annotations_collection_map from AnnotationsTypes
 * @phpstan-import-type annotations_reflection_data from AnnotationsTypes
 */
class Reflection
{
    /**
     * @var Collection|null
     */
    protected $classAnnotations = null;

    /**
     * @var array
     *
     * @phpstan-var annotations_collection_map
     */
    protected $constantAnnotations = [];

    /**
     * @var array
     *
     * @phpstan-var annotations_collection_map
     */
    protected $propertyAnnotations = [];

    /**
     * @var array
     *
     * @phpstan-var annotations_collection_map
     */
    protected $methodAnnotations = [];

    /**
     * @var array
     *
     * @phpstan-var annotations_reflection_data
     */
    protected $reflectionData = [];

    /**
     * @phpstan-param annotations_reflection_data $reflectionData
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData = [])
    {
    }

    /**
     * Returns the annotations found in the class docblock
     *
     * @return Collection|null
     */
    public function getClassAnnotations(): Collection|null
    {
    }

    /**
     * Returns the annotations found in the constants' docblocks
     *
     * @return Collection[]
     *
     * @phpstan-return annotations_collection_map
     */
    public function getConstantsAnnotations(): array
    {
    }

    /**
     * Returns the annotations found in the properties' docblocks
     *
     * @return Collection[]
     *
     * @phpstan-return annotations_collection_map
     */
    public function getPropertiesAnnotations(): array
    {
    }

    /**
     * Returns the annotations found in the methods' docblocks
     *
     * @return Collection[]
     *
     * @phpstan-return annotations_collection_map
     */
    public function getMethodsAnnotations(): array
    {
    }

    /**
     * Returns the raw parsing intermediate definitions used to construct the
     * reflection
     *
     * @return array
     *
     * @phpstan-return annotations_reflection_data
     */
    public function getReflectionData(): array
    {
    }
}
