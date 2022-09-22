<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

/**
 * Represents an inline asset
 *
 * ```php
 * $inline = new \Phalcon\Assets\Inline("js", "alert('hello world');");
 * ```
 */
class Inline implements \Phalcon\Assets\AssetInterface
{
    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var bool
     */
    protected $filter;

    /**
     * @var string
     */
    protected $type;

    /**
     * Phalcon\Assets\Inline constructor
     *
     * @param string $type
     * @param string $content
     * @param bool $filter
     * @param array $attributes
     */
    public function __construct(string $type, string $content, bool $filter = true, array $attributes = [])
    {
    }

    /**
     * Gets the asset's key.
     *
     * @return string
     */
    public function getAssetKey(): string
    {
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * @return bool
     */
    public function getFilter(): bool
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return AssetInterface
     */
    public function setAttributes(array $attributes): AssetInterface
    {
    }

    /**
     * Sets if the asset must be filtered or not
     *
     * @param bool $filter
     * @return AssetInterface
     */
    public function setFilter(bool $filter): AssetInterface
    {
    }

    /**
     * Sets the inline's type
     *
     * @param string $type
     * @return AssetInterface
     */
    public function setType(string $type): AssetInterface
    {
    }
}
