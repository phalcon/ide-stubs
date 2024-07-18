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
 * Represents a single annotation in an annotations collection
 */
class Annotation
{
    /**
     * Annotation Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * Annotation ExprArguments
     *
     * @var array
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
     * @param array $reflectionData
     */
    public function __construct(array $reflectionData)
    {
    }

    /**
     * Returns an argument in a specific position
     *
     * @param mixed $position
     * @return mixed|null
     */
    public function getArgument($position): mixed
    {
    }

    /**
     * Returns the expression arguments
     *
     * @return array
     */
    public function getArguments(): array
    {
    }

    /**
     * Returns the expression arguments without resolving
     *
     * @return array
     */
    public function getExprArguments(): array
    {
    }

    /**
     * Resolves an annotation expression
     *
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
