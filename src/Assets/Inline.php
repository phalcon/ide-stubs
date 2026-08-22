<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

use Phalcon\Assets\Traits\AttributesTrait;
use Phalcon\Contracts\Assets\AssetsTypes;
use Phalcon\Traits\Php\HashTrait;

/**
 * Represents an inline asset
 *
 * ```php
 * $inline = new \Phalcon\Assets\Inline("js", "alert('hello world');");
 * ```
 *
 * @phpstan-import-type assets_attributes from AssetsTypes
 */
class Inline implements \Phalcon\Assets\AssetInterface
{
    use \Phalcon\Assets\Traits\AttributesTrait;
    use \Phalcon\Traits\Php\HashTrait;


    protected string $content;

    protected bool $filter;

    protected string $type;

    /**
     * Inline constructor.
     *
     * @param assets_attributes $attributes
     * @param string $type
     * @param string $content
     * @param bool $filter
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
     * Gets if the asset content
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Gets if the asset must be filtered or not.
     *
     * @return bool
     */
    public function getFilter(): bool
    {
    }

    /**
     * Gets the asset's type.
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param assets_attributes $attributes
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
