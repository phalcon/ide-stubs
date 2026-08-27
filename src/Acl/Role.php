<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl;

use Phalcon\Acl\Exceptions\ForbiddenDelimiter;
use Phalcon\Acl\Exceptions\ForbiddenWildcard;

/**
 * This class defines role entity and its description
 */
class Role extends \Phalcon\Acl\AbstractElement implements \Phalcon\Acl\RoleInterface
{
    /**
     * Role constructor.
     *
     * @param string $name
     * @param string|null $description
     */
    public function __construct(string $name, ?string $description = null)
    {
    }
}
