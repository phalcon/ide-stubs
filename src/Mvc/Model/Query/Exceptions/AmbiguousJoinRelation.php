<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Query\Exceptions;

use Phalcon\Mvc\Model\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class AmbiguousJoinRelation extends Exception
{
    /**
     * @param string $from
     * @param string $join
     * @param string $phql
     */
    public function __construct(string $from, string $join, string $phql)
    {
    }
}
