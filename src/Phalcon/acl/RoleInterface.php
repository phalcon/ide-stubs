<?php

namespace Phalcon\Acl;

/**
 * Interface for Phalcon\Acl\Role
 */
interface RoleInterface
{

    /**
     * Returns the role name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns role description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Magic method __toString
     *
     * @return string
     */
    public function __toString(): string;
}
