<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl;

/**
 * This class defines role entity and its description
 */
class Role implements \Phalcon\Acl\RoleInterface
{
    /**
     * Role description
     *
     * @var string
     */
    private $description;

    /**
     * Role name
     *
     * @var string
     */
    private $name;

    /**
     * Phalcon\Acl\Role constructor
     *
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description = null)
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
    }
}
