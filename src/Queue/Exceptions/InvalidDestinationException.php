<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Exceptions;

/**
 * Thrown when a destination is not valid for the operation, for example a
 * Topic passed where a Queue is required. The action verb ("send to",
 * "consume from") tailors the message to the failing operation.
 */
class InvalidDestinationException extends \Phalcon\Queue\Exceptions\Exception
{
    /**
     * @param string $action
     */
    public function __construct(string $action)
    {
    }
}
