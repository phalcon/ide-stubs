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
    protected $arguments;

    /**
     * Annotation ExprArguments
     *
     * @var string
     */
    protected $exprArguments;

    /**
     * Annotation Name
     *
     * @var string
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
     */
    public function getArgument($position)
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
    public function getExpression(array $expr)
    {
    }

    /**
     * Returns the annotation's name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Returns a named argument
     *
     * @param string $name
     */
    public function getNamedArgument(string $name)
    {
    }

    /**
     * Returns a named parameter
     *
     * @param string $name
     * @return mixed
     */
    public function getNamedParameter(string $name)
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
