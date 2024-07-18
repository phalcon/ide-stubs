<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

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
 */
class Reflection
{
    /**
     * @var Collection|null
     */
    protected $classAnnotations = null;

    /**
     * @var array
     */
    protected $constantAnnotations = [];

    /**
     * @var array
     */
    protected $propertyAnnotations = [];

    /**
     * @var array
     */
    protected $methodAnnotations = [];

    /**
     * @var array
     */
    protected $reflectionData = [];

    /**
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
     */
    public function getConstantsAnnotations(): array
    {
    }

    /**
     * Returns the annotations found in the properties' docblocks
     *
     * @return Collection[]
     */
    public function getPropertiesAnnotations(): array
    {
    }

    /**
     * Returns the annotations found in the methods' docblocks
     *
     * @return Collection[]
     */
    public function getMethodsAnnotations(): array
    {
    }

    /**
     * Returns the raw parsing intermediate definitions used to construct the
     * reflection
     *
     * @return array
     */
    public function getReflectionData(): array
    {
    }
}
