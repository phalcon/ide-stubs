<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

use Countable;
use Iterator;

/**
 * Represents a collection of annotations. This class allows to traverse a group
 * of annotations easily
 *
 * ```php
 * // Traverse annotations
 * foreach ($classAnnotations as $annotation) {
 *     echo "Name=", $annotation->getName(), PHP_EOL;
 * }
 *
 * // Check if the annotations has a specific
 * var_dump($classAnnotations->has("Cacheable"));
 *
 * // Get an specific annotation in the collection
 * $annotation = $classAnnotations->get("Cacheable");
 * ```
 */
class Collection implements \Iterator, \Countable
{
    /**
     * @var array
     */
    protected $annotations;

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * Phalcon\Annotations\Collection constructor
     *
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData = [])
    {
    }

    /**
     * Returns the number of annotations in the collection
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns the current annotation in the iterator
     *
     * @return mixed
     */
    public function current(): mixed
    {
    }

    /**
     * Returns the first annotation that match a name
     *
     * @param string $name
     * @return Annotation
     */
    public function get(string $name): Annotation
    {
    }

    /**
     * Returns all the annotations that match a name
     *
     * @param string $name
     * @return array|Annotation[]
     */
    public function getAll(string $name): array
    {
    }

    /**
     * Returns the internal annotations as an array
     *
     * @return array|Annotation[]
     */
    public function getAnnotations(): array
    {
    }

    /**
     * Check if an annotation exists in a collection
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     *
     * @return void
     */
    public function next(): void
    {
    }

    /**
     * Rewinds the internal iterator
     *
     * @return void
     */
    public function rewind(): void
    {
    }

    /**
     * Check if the current annotation in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
}
