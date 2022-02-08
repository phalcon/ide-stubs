<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Attributes;

use Phalcon\Html\Attributes;

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
     * @return Attributes
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
