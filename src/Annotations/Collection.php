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
use Phalcon\Annotations\Exceptions\AnnotationNotFound;
use Phalcon\Contracts\Annotations\AnnotationsTypes;

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
 *
 * The class cannot carry an `@implements Iterator<int, Annotation>` tag.
 * `current()` returns `false` past the end of the collection, while Psalm's
 * `Iterator` stub requires `TValue|null` there. Narrowing the iteration would
 * mean changing that return to null, which is a v7 signature change.
 *
 * @phpstan-import-type annotations_list from AnnotationsTypes
 * @phpstan-import-type annotations_node_list from AnnotationsTypes
 */
class Collection implements \Iterator, \Countable
{
    /**
     * @var array
     *
     * @phpstan-var annotations_list
     */
    protected $annotations;

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * Phalcon\Annotations\Collection constructor
     *
     * @phpstan-param annotations_node_list $reflectionData
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
     * @phpstan-return Annotation|false
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
     * @phpstan-return annotations_list
     * @param string $name
     * @return array|Annotation[]
     */
    public function getAll(string $name): array
    {
    }

    /**
     * Returns the internal annotations as an array
     *
     * @phpstan-return annotations_list
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
