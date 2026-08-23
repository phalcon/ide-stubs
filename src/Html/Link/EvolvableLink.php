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
use Phalcon\Html\Link\Interfaces\EvolvableLinkInterface;

/**
 * Class Phalcon\Html\Link\EvolvableLink
 *
 * @phpstan-import-type link_attribute_value from LinkTypes
 */
class EvolvableLink extends \Phalcon\Html\Link\Link implements \Phalcon\Html\Link\Interfaces\EvolvableLinkInterface
{
    /**
     * Returns an instance with the specified attribute added.
     *
     * If the specified attribute is already present, it will be overwritten
     * with the new value.
     *
     * @phpstan-param link_attribute_value $value
     * @param mixed $attribute
     * @param mixed $value
     * @return static
     */
    public function withAttribute($attribute, $value): static
    {
    }

    /**
     * Returns an instance with the specified href.
     *
     * @param string $href *       The href value to include.  It must be one of:
     *       - An absolute URI, as defined by RFC 5988.
     *       - A relative URI, as defined by RFC 5988. The base of the relative
     *       link is assumed to be known based on context by the client.
     *       - A URI template as defined by RFC 6570.
     *       - An object implementing __toString() that produces one of the
     *       above values.
     *
     * An implementing library SHOULD evaluate a passed object to a string
     * immediately rather than waiting for it to be returned later.
     * @return static
     */
    public function withHref(string $href): static
    {
    }

    /**
     * Returns an instance with the specified attribute excluded.
     *
     * If the specified attribute is not present, this method MUST return
     * normally without errors.
     *
     * @param string $attribute
     * @return static
     */
    public function withoutAttribute(string $attribute): static
    {
    }

    /**
     * Returns an instance with the specified relationship excluded.
     *
     * If the specified rel is not present, this method MUST return
     * normally without errors.
     *
     * @param string $rel
     * @return static
     */
    public function withoutRel(string $rel): static
    {
    }

    /**
     * Returns an instance with the specified relationship included.
     *
     * If the specified rel is already present, this method MUST return
     * normally without errors, but without adding the rel a second time.
     *
     * @param string $rel
     * @return static
     */
    public function withRel(string $rel): static
    {
    }
}
