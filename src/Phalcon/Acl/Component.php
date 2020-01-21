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
 * This class defines component entity and its description
 */
class Component implements \Phalcon\Acl\ComponentInterface
{
    /**
     * Component description
     *
     * @var string
     */
    private $description;

    /**
     * Component name
     *
     * @var string
     */
    private $name;


    /**
     * Component description
     *
     * @return string
     */
    public function getDescription(): string
    {
    }

    /**
     * Component name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Component name
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Phalcon\Acl\Component constructor
     *
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description = null)
    {
    }
}
