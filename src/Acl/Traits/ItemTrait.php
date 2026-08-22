<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Traits;

/**
 * This class defines role/component names and their descriptions
 */
trait ItemTrait
{
    /**
     * Role/Component description
     */
    protected ?string $description = null;

    /**
     * Role/Component name
     */
    protected string $name;

    /**
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
    }
}
