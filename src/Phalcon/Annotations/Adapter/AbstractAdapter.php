<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations\Adapter;

use Phalcon\Annotations\Collection;
use Phalcon\Annotations\Reader;
use Phalcon\Annotations\ReaderInterface;
use Phalcon\Annotations\Reflection;

/**
 * This is the base class for Phalcon\Annotations adapters
 */
abstract class AbstractAdapter implements \Phalcon\Annotations\Adapter\AdapterInterface
{
    /**
     * @var array
     */
    protected $annotations = array();

    /**
     * @var Reader
     */
    protected $reader;


    /**
     * Parses or retrieves all the annotations found in a class
     *
     * @param mixed $className
     * @return Reflection
     */
    public function get($className): Reflection
    {
    }

    /**
     * Returns the annotations found in a specific method
     *
     * @param string $className
     * @param string $methodName
     * @return Collection
     */
    public function getMethod(string $className, string $methodName): Collection
    {
    }

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getMethods(string $className): array
    {
    }

    /**
     * Returns the annotations found in a specific property
     *
     * @param string $className
     * @param string $propertyName
     * @return Collection
     */
    public function getProperty(string $className, string $propertyName): Collection
    {
    }

    /**
     * Returns the annotations found in all the class' methods
     *
     * @param string $className
     * @return array
     */
    public function getProperties(string $className): array
    {
    }

    /**
     * Returns the annotation reader
     *
     * @return ReaderInterface
     */
    public function getReader(): ReaderInterface
    {
    }

    /**
     * Sets the annotations parser
     *
     * @param \Phalcon\Annotations\ReaderInterface $reader
     */
    public function setReader(\Phalcon\Annotations\ReaderInterface $reader)
    {
    }
}
