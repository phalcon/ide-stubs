<?php

namespace Phalcon\Acl;

/**
 * Interface for classes which could be used in allow method as ROLE
 */
interface RoleAware
{

    /**
     * Returns role name
     *
     * @return string
     */
    public function getRoleName(): string;
}
