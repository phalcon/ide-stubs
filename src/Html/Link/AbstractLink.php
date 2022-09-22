<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link;

use Phalcon\Support\Collection;

/**
 * @property array  $attributes
 * @property string $href
 * @property array  $rels
 * @property bool   $templated
 */
abstract class AbstractLink
{
    /**
     * @var Collection
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $href = '';

    /**
     * @var Collection
     */
    protected $rels;

    /**
     * @var bool
     */
    protected $templated = false;

    /**
     * Link constructor.
     *
     * @param string $rel
     * @param string $href
     * @param array  $attributes
     */
    public function __construct(string $rel = '', string $href = '', array $attributes = [])
    {
    }

    /**
     * Returns a list of attributes that describe the target URI.
     *
     * @return array
     *   A key-value list of attributes, where the key is a string and the value
     *  is either a PHP primitive or an array of PHP strings. If no values are
     *  found an empty array MUST be returned.
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
     * @return string[]
     */
    protected function doGetRels(): array
    {
    }

    /**
     * Returns whether this is a templated link.
     *
     * @return bool
     *   True if this link object is templated, False otherwise.
     */
    protected function doIsTemplated(): bool
    {
    }

    /**
     * Determines if a href is a templated link or not.
     *
     * @see https://tools.ietf.org/html/rfc6570
     *
     * @param string $href
     *
     * @return bool
     */
    protected function hrefIsTemplated(string $href): bool
    {
    }

    /**
     * @param string       $key
     * @param string|array $value
     *
     * @return mixed
     */
    protected function doWithAttribute(string $key, $value)
    {
    }

    /**
     * @param string $href
     *
     * @return mixed
     */
    protected function doWithHref(string $href)
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function doWithRel(string $key)
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function doWithoutAttribute(string $key)
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function doWithoutRel(string $key)
    {
    }
}
