<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link;

use Phalcon\Html\Link\Interfaces\LinkInterface;

/**
 * @property array $links
 */
abstract class AbstractLinkProvider
{
    /**
     * @var array
     */
    protected $links = [];

    /**
     * LinkProvider constructor.
     *
     * @param array $links
     */
    public function __construct(array $links = [])
    {
    }

    /**
     * Returns an iterable of LinkInterface objects.
     *
     * The iterable may be an array or any PHP \Traversable object. If no links
     * are available, an empty array or \Traversable MUST be returned.
     *
     * @return array
     */
    protected function doGetLinks(): array
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
     * @return array
     * @param string $rel
     */
    protected function doGetLinksByRel(string $rel): array
    {
    }

    /**
     * Returns an instance with the specified link included.
     *
     * If the specified link is already present, this method MUST return
     * normally without errors. The link is present if $link is === identical
     * to a link object already in the collection.
     *
     * @param mixed $link A link object that should be included in this
     *                    collection.
     *
     * @return $this
     */
    protected function doWithLink($link)
    {
    }

    /**
     * Returns an instance with the specified link removed.
     *
     * If the specified link is not present, this method MUST return normally
     * without errors. The link is present if $link is === identical to a link
     * object already in the collection.
     *
     * @param mixed $link The link to remove.
     *
     * @return $this
     */
    protected function doWithoutLink($link)
    {
    }

    /**
     * Returns the object hash key
     *
     * @param mixed $link *
     * @return string
     */
    protected function getKey($link): string
    {
    }
}
