<?php

namespace Phalcon\Acl;

/**
 * Interface for Phalcon\Acl\Component
 */
interface ComponentInterface
{

    /**
     * Returns component description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Returns the component name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Magic method __toString
     *
     * @return string
     */
    public function __toString(): string;

}
