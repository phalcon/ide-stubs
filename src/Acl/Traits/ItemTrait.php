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
 * Shared name/description state for ACL Role and Component entities.
 */
trait ItemTrait
{
    /**
     * Element description
     *
     * @var string | null
     */
    protected $description;

    /**
     * Element name
     *
     * @var string
     */
    protected $name;

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
