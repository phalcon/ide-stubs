<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

use Phalcon\Annotations\Exceptions\UnknownAnnotationExpression;
use Phalcon\Contracts\Annotations\AnnotationsTypes;

/**
 * Represents a single annotation in an annotations collection
 *
 * @phpstan-import-type annotations_arguments from AnnotationsTypes
 * @phpstan-import-type annotations_expression from AnnotationsTypes
 * @phpstan-import-type annotations_node from AnnotationsTypes
 * @phpstan-import-type annotations_resolved_arguments from AnnotationsTypes
 */
class Annotation
{
    /**
     * Type of an expression node that holds a value that PHP resolved
     * already. The attributes reader makes these nodes, because
     * ReflectionAttribute::getArguments() gives the values and not a parse
     * tree. The value goes to the caller without a change.
     *
     * The parser types stop at 309 (PHANNOT_T_ARBITRARY_TEXT). The value is
     * 1000 and not 310, so that a token added to the grammar later cannot
     * make two case labels with one value in getExpression().
     *
     * @var int
     */
    const T_RESOLVED = 1000;

    /**
     * Annotation Arguments
     *
     * @var array
     *
     * @phpstan-var annotations_resolved_arguments
     */
    protected $arguments = [];

    /**
     * Annotation ExprArguments
     *
     * @var array
     *
     * @phpstan-var annotations_arguments
     */
    protected $exprArguments = [];

    /**
     * Annotation Name
     *
     * @var string|null
     */
    protected $name;

    /**
     * Phalcon\Annotations\Annotation constructor
     *
     * @phpstan-param annotations_node $reflectionData
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData)
    {
    }

    /**
     * Returns an argument in a specific position
     *
     * @phpstan-param int|string $position
     * @param mixed $position
     * @return mixed|null
     */
    public function getArgument($position): mixed
    {
    }

    /**
     * Returns the expression arguments
     *
     * @phpstan-return annotations_resolved_arguments
     * @return array
     */
    public function getArguments(): array
    {
    }

    /**
     * Returns the expression arguments without resolving
     *
     * @phpstan-return annotations_arguments
     * @return array
     */
    public function getExprArguments(): array
    {
    }

    /**
     * Resolves an annotation expression
     *
     * @phpstan-param annotations_expression $expr
     * @param array $expr
     * @return mixed
     */
    public function getExpression(array $expr): mixed
    {
    }

    /**
     * Returns the annotation's name
     *
     * @return string|null
     */
    public function getName(): string|null
    {
    }

    /**
     * Returns a named argument
     *
     * @param string $name
     * @return mixed|null
     */
    public function getNamedArgument(string $name): mixed
    {
    }

    /**
     * Returns a named parameter
     *
     * @param string $name
     * @return mixed
     */
    public function getNamedParameter(string $name): mixed
    {
    }

    /**
     * Returns an argument in a specific position
     *
     * @phpstan-param int|string $position
     * @param mixed $position
     * @return bool
     */
    public function hasArgument($position): bool
    {
    }

    /**
     * Returns the number of arguments that the annotation has
     *
     * @return int
     */
    public function numberArguments(): int
    {
    }
}
