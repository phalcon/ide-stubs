<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Exceptions;

use Phalcon\Acl\Exception;

class AccessRuleNotFound extends Exception
{
    /**
     * @param string $accessName
     * @param string $componentName
     */
    public function __construct(string $accessName, string $componentName)
    {
    }
}
