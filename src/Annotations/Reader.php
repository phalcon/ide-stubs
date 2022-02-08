<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Annotations;

use ReflectionClass;

/**
 * Parses docblocks returning an array with the found annotations
 */
class Reader implements \Phalcon\Annotations\ReaderInterface
{
    /**
     * Reads annotations from the class docblocks, its methods and/or properties
     *
     * @param string $className
     * @return array
     */
    public function parse(string $className): array
    {
    }

    /**
     * Parses a raw doc block returning the annotations found
     *
     * @param string $docBlock
     * @param mixed $file
     * @param mixed $line
     * @return array
     */
    public static function parseDocBlock(string $docBlock, $file = null, $line = null): array
    {
    }
}
