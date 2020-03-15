<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link;

use Psr\Link\LinkInterface;
use Psr\Link\LinkProviderInterface;

/**
 * Class Phalcon\Http\Link\LinkProvider
 *
 * @property LinkInterface[] links
 */
class LinkProvider implements \Psr\Link\LinkProviderInterface
{
    /**
     * @var LinkInterface[]
     */
    protected $links = array();


    /**
     * LinkProvider constructor.
     *
     * @param array $links
     */
    public function __construct(array $links = array())
    {
    }

    /**
     * Returns an iterable of LinkInterface objects.
     *
     * The iterable may be an array or any PHP \Traversable object. If no links
     * are available, an empty array or \Traversable MUST be returned.
     *
     * @return LinkInterface[]|\Traversable
     */
    public function getLinks()
    {
    }

    /**
     * Returns an iterable of LinkInterface objects that have a specific
     * relationship.
     *
     * The iterable may be an array or any PHP \Traversable object. If no links
     * with that relationship are available, an empty array or \Traversable
     * MUST be returned.
     *
     * @return LinkInterface[]|Traversable
     * @param mixed $rel
     */
    public function getLinksByRel($rel)
    {
    }

    /**
     * Returns the object hash key
     *
     * @param LinkInterface $link *
     * @return string
     */
    protected function getKey(\Psr\Link\LinkInterface $link): string
    {
    }
}
