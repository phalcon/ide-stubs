<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Storage\Serializer\Exceptions\InvalidUnserializationInput;
use Phalcon\Traits\Php\SerializeTrait;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Php extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    use \Phalcon\Traits\Php\SerializeTrait;


    /**
     * Classes that unserialize() may instantiate: true (any class, the PHP
     * default), false (none) or a list of class names. Stored bytes that
     * try to build another class are rejected on read.
     *
     * @var mixed
     */
    protected $allowedClasses = true;

    /**
     * @return bool|array<int, string>
     */
    public function getAllowedClasses(): mixed
    {
    }

    /**
     * Serializes data
     *
     * @return bool|float|int|string|null
     */
    public function serialize(): mixed
    {
    }

    /**
     * Restricts the classes that unserialize() may instantiate (see the
     * "allowed_classes" option of unserialize()).
     *
     * @param bool|array<int, string> $allowedClasses
     * @return static
     */
    public function setAllowedClasses($allowedClasses): static
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }
}
