<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Link;

use Phalcon\Collection;
use Phalcon\Collection\CollectionInterface;
use Psr\Link\LinkInterface;

/**
 * Class Phalcon\Http\Link\Link
 *
 * @property array  attributes
 * @property string href
 * @property array  rels
 * @property bool   templated
 */
class Link implements \Psr\Link\LinkInterface
{
    /**
     * @var Collection|CollectionInterface
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $href = '';

    /**
     * @var Collection|CollectionInterface
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
     * @param array $attributes
     */
    public function __construct(string $rel = '', string $href = '', array $attributes = array())
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
    public function getAttributes()
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
    public function getHref()
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
    public function getRels()
    {
    }

    /**
     * Returns whether or not this is a templated link.
     *
     * @return bool True if this link object is templated, False otherwise.
     */
    public function isTemplated()
    {
    }

    /**
     * Determines if a href is a templated link or not.
     *
     * @see https://tools.ietf.org/html/rfc6570
     *
     * @param string $href *
     * @return bool
     */
    protected function hrefIsTemplated(string $href): bool
    {
    }
}
