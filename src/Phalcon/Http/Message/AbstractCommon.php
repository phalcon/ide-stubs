<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message;

/**
 * Common methods
 */
abstract class AbstractCommon
{

    /**
     * Returns a new instance having set the parameter
     *
     * @param mixed  $element
     * @param string $property
     *
     * @return static
     */
    final protected function cloneInstance($element, string $property)
    {
    }

    /**
     * Checks the element passed if it is a string
     *
     * @param mixed $element
     * @return void
     */
    final protected function checkStringParameter($element)
    {
    }

    /**
     * Checks the element passed; assigns it to the property and returns a
     * clone of the object back
     *
     * @param mixed  $element
     * @param string $property
     *
     * @return static
     */
    final protected function processWith($element, string $property)
    {
    }
}
