<?php

namespace Phalcon\Acl;

/**
 * Phalcon\Acl\ComponentAware
 *
 * Interface for classes which could be used in allow method as RESOURCE
 */
interface ComponentAware
{
    /**
     * Returns component name
    */
    public function getComponentName() : string;
}
