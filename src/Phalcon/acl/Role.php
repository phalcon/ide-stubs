<?php

namespace Phalcon\Acl;

/**
 * Phalcon\Acl\Role
 *
 * This class defines role entity and its description
 */
class Role implements RoleInterface
{
    /**
     * Role name
     *
     * @var string
     */
    protected $name;

    /**
     * Role description
     *
     * @var string
     */
    protected $description;


    /**
     * Role name
     *
     * @return string
     */
    public function getName() {}

    /**
     * Role name
     *
     * @return string
     */
    public function __toString() {}

    /**
     * Role description
     *
     * @return string
     */
    public function getDescription() {}

    /**
     * Phalcon\Acl\Role constructor
     *
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, ?string $description = null) {}

}
