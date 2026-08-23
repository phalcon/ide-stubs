<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link;

use Phalcon\Contracts\Html\Link\LinkTypes;
use Phalcon\Html\Link\Interfaces\LinkInterface;

/**
 * @phpstan-import-type link_collection from LinkTypes
 * @phpstan-import-type link_list from LinkTypes
 */
abstract class AbstractLinkProvider
{
    /**
     * @phpstan-var link_collection
     */
    protected array $links = [];

    /**
     * LinkProvider constructor.
     *
     * The guard keeps foreign objects out of the collection. It stays live in
     * the Zephir implementation, where the array is untyped.
     *
     * @phpstan-param array<array-key, object> $links
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
     * @phpstan-return link_collection
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
     * @phpstan-return link_list
     * @param string $rel
     * @return array
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
     * @phpstan-param LinkInterface $link
     * @param mixed $link
     * @return static
     */
    protected function doWithLink($link): static
    {
    }

    /**
     * Returns an instance with the specified link removed.
     *
     * If the specified link is not present, this method MUST return normally
     * without errors. The link is present if $link is === identical to a link
     * object already in the collection.
     *
     * @phpstan-param LinkInterface $link
     * @param mixed $link
     * @return static
     */
    protected function doWithoutLink($link): static
    {
    }

    /**
     * Returns the object hash key
     *
     * @phpstan-param object $link
     * @param mixed $link
     * @return string
     */
    protected function getKey($link): string
    {
    }
}
