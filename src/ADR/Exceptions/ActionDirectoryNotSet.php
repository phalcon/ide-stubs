<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Exceptions;

/**
 * Thrown when the router is asked to match without an action directory; the
 * convention cannot resolve sub-namespaces without one.
 */
class ActionDirectoryNotSet extends \Phalcon\ADR\Exceptions\Exception
{
    public function __construct()
    {
    }
}
