<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\EntityInterface
 *
 * Interface for Phalcon\Mvc\Collection and Phalcon\Mvc\Model
 */
interface EntityInterface
{
    /**
     * Reads an attribute value by its name
     *
     * @param string $attribute
     * @return mixed|null
     */
    public function readAttribute(string $attribute): mixed;

    /**
     * Writes an attribute value by its name
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value);
}
