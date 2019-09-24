<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by Zend Diactoros
 * @link    https://github.com/zendframework/zend-diactoros
 * @license https://github.com/zendframework/zend-diactoros/blob/master/LICENSE.md
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
     * @param string $property
     *
     * @param mixed $element
     * @param string $property
     * @return object
     */
    final protected function cloneInstance($element, string $property)
    {
    }

    /**
     * Checks the element passed if it is a string
     *
     * @param mixed $element
     */
    final protected function checkStringParameter($element)
    {
    }

    /**
     * Checks the element passed; assigns it to the property and returns a
     * clone of the object back
     *
     * @param string $property
     *
     * @param mixed $element
     * @param string $property
     * @return object
     */
    final protected function processWith($element, string $property)
    {
    }
}
