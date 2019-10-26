<?php

namespace Phalcon\Acl;

/**
 * Interface for classes which could be used in allow method as RESOURCE
 */
interface ComponentAware
{

    /**
     * Returns component name
     *
     * @return string
     */
    public function getComponentName(): string;
}
