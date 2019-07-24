<?php

namespace Phalcon\Html\Attributes;

/**
 * Phalcon\Html\Attributes\AttributesInterface
 *
 * Interface Phalcon\Html\Attributes\AttributesInterface
 */
interface AttributesInterface
{

    /**
     * Get Attributes
     *
     * @return \Phalcon\Html\Attributes
     */
    public function getAttributes(): Attributes;

    /**
     * Set Attributes
     *
     * @param \Phalcon\Html\Attributes $attributes
     * @return AttributesInterface
     */
    public function setAttributes(\Phalcon\Html\Attributes $attributes): AttributesInterface;

}
