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
use Phalcon\Html\Link\Interfaces\EvolvableLinkProviderInterface;
use Phalcon\Html\Link\Interfaces\LinkInterface;

/**
 * Class Phalcon\Html\Link\EvolvableLinkProvider
 *
 * @phpstan-import-type link_collection from LinkTypes
 *
 * @phpstan-property link_collection $links
 */
class EvolvableLinkProvider extends \Phalcon\Html\Link\LinkProvider implements \Phalcon\Html\Link\Interfaces\EvolvableLinkProviderInterface
{
    /**
     * Returns an instance with the specified link included.
     *
     * If the specified link is already present, this method MUST return
     * normally without errors. The link is present if $link is === identical
     * to a link object already in the collection.
     *
     * @param \Phalcon\Html\Link\Interfaces\LinkInterface $link
     * @return static
     */
    public function withLink(\Phalcon\Html\Link\Interfaces\LinkInterface $link): static
    {
    }

    /**
     * Returns an instance with the specified link removed.
     *
     * If the specified link is not present, this method MUST return normally
     * without errors. The link is present if $link is === identical to a link
     * object already in the collection.
     *
     * @param \Phalcon\Html\Link\Interfaces\LinkInterface $link
     * @return static
     */
    public function withoutLink(\Phalcon\Html\Link\Interfaces\LinkInterface $link): static
    {
    }
}
