<?php

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
    public function readAttribute(string $attribute): ?;

    /**
     * Writes an attribute value by its name
     *
     * @param string $attribute
     * @param mixed $value
     */
    public function writeAttribute(string $attribute, $value);

}
