<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Exceptions;

use Phalcon\Mvc\Model\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class UnknownEagerRelation extends Exception
{
    /**
     * @param string $modelName
     * @param string $alias
     */
    public function __construct(string $modelName, string $alias)
    {
    }
}
