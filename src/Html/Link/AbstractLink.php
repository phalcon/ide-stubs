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
use Phalcon\Support\Collection;

/**
 * @phpstan-import-type link_attribute_value from LinkTypes
 * @phpstan-import-type link_attributes from LinkTypes
 * @phpstan-import-type link_rels from LinkTypes
 */
abstract class AbstractLink
{
    /**
     * @phpstan-var Collection<link_attribute_value>
     */
    protected \Phalcon\Support\Collection $attributes;

    protected string $href = '';

    /**
     * @phpstan-var Collection<bool>
     */
    protected \Phalcon\Support\Collection $rels;

    protected bool $templated = false;

    /**
     * Link constructor.
     *
     * @phpstan-param link_attributes $attributes
     * @param string $rel
     * @param string $href
     * @param array $attributes
     */
    public function __construct(string $rel = '', string $href = '', array $attributes = [])
    {
    }

    /**
     * Returns a list of attributes that describe the target URI.
     *
     * A key-value list of attributes, where the key is a string and the value
     * is either a PHP primitive or an array of PHP strings. If no values are
     * found an empty array MUST be returned.
     *
     * @phpstan-return link_attributes
     * @return array
     */
    protected function doGetAttributes(): array
    {
    }

    /**
     * Returns the target of the link.
     *
     * The target link must be one of:
     * - An absolute URI, as defined by RFC 5988.
     * - A relative URI, as defined by RFC 5988. The base of the relative link
     *     is assumed to be known based on context by the client.
     * - A URI template as defined by RFC 6570.
     *
     * If a URI template is returned, isTemplated() MUST return True.
     *
     * @return string
     */
    protected function doGetHref(): string
    {
    }

    /**
     * Returns the relationship type(s) of the link.
     *
     * This method returns 0 or more relationship types for a link, expressed
     * as an array of strings.
     *
     * @phpstan-return link_rels
     * @return array
     */
    protected function doGetRels(): array
    {
    }

    /**
     * Returns whether this is a templated link. True if this link object is
     * templated, False otherwise.
     *
     * @return bool
     */
    protected function doIsTemplated(): bool
    {
    }

    /**
     * @phpstan-param link_attribute_value $value
     * @param string $key
     * @param mixed $value
     * @return static
     */
    protected function doWithAttribute(string $key, $value): static
    {
    }

    /**
     * @param string $href
     * @return static
     */
    protected function doWithHref(string $href): static
    {
    }

    /**
     * @param string $key
     * @return static
     */
    protected function doWithoutAttribute(string $key): static
    {
    }

    /**
     * @param string $key
     * @return static
     */
    protected function doWithoutRel(string $key): static
    {
    }

    /**
     * @param string $key
     * @return static
     */
    protected function doWithRel(string $key): static
    {
    }

    /**
     * Determines if a href is a templated link or not.
     *
     * @see https://tools.ietf.org/html/rfc6570
     * @param string $href
     * @return bool
     */
    protected function hrefIsTemplated(string $href): bool
    {
    }
}
