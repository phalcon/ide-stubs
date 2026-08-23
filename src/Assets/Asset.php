<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

use Phalcon\Assets\Exceptions\CannotReadAsset;
use Phalcon\Assets\Traits\AttributesTrait;
use Phalcon\Assets\Traits\SourceTargetTrait;
use Phalcon\Contracts\Assets\AssetsTypes;
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Traits\Php\HashTrait;

/**
 * Object representation of an asset
 *
 * ```php
 * $asset = new \Phalcon\Assets\Asset("js", "js/jquery.js");
 * ```
 *
 * @phpstan-import-type assets_attributes from AssetsTypes
 */
class Asset implements \Phalcon\Assets\AssetInterface
{
    use \Phalcon\Assets\Traits\AttributesTrait;
    use \Phalcon\Traits\Php\FileTrait;
    use \Phalcon\Traits\Php\HashTrait;
    use \Phalcon\Assets\Traits\SourceTargetTrait;


    protected bool $isAutoVersion = false;

    protected bool $filter;

    protected string $path;

    protected string $type;

    protected ?string $version;

    /**
     * Asset constructor.
     *
     * @param string      $type
     * @param string      $path
     * @param bool        $isLocal
     * @param bool        $filter
     * @param assets_attributes $attributes
     * @param string|null $version
     * @param bool        $isAutoVersion
     */
    public function __construct(string $type, string $path, bool $isLocal = true, bool $filter = true, array $attributes = [], ?string $version = null, bool $isAutoVersion = false)
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
     * Returns the content of the asset as an string
     * Optionally a base path where the asset is located can be set
     *
     * @param string|null $basePath
     * @return string
     */
    public function getContent(?string $basePath = null): string
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
     * Returns the path for this asset
     *
     * @return string
     */
    public function getPath(): string
    {
    }

    /**
     * Returns the complete location where the asset is located
     *
     * @param string|null $basePath
     * @return string
     */
    public function getRealSourcePath(?string $basePath = null): string
    {
    }

    /**
     * Returns the complete location where the asset must be written
     *
     * @param string|null $basePath
     * @return string
     */
    public function getRealTargetPath(?string $basePath = null): string
    {
    }

    /**
     * Returns the real target uri for the generated HTML
     *
     * @return string
     */
    public function getRealTargetUri(): string
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
     * Gets the asset's version.
     *
     * @return string|null
     */
    public function getVersion(): string|null
    {
    }

    /**
     * Checks if the asset is using auto version
     *
     * @return bool
     */
    public function isAutoVersion(): bool
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
     * @param bool $flag
     * @return AssetInterface
     */
    public function setAutoVersion(bool $flag): AssetInterface
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
     * Sets the asset's path
     *
     * @param string $path
     * @return AssetInterface
     */
    public function setPath(string $path): AssetInterface
    {
    }

    /**
     * Sets the asset's type
     *
     * @param string $type
     * @return AssetInterface
     */
    public function setType(string $type): AssetInterface
    {
    }

    /**
     * Sets the asset's version
     *
     * @param string $version
     * @return AssetInterface
     */
    public function setVersion(string $version): AssetInterface
    {
    }

    /**
     * @param string $property
     * @return string
     */
    private function checkPath(string $property): string
    {
    }

    /**
     * @param string $completePath
     * @return void
     */
    private function throwException(string $completePath): void
    {
    }
}
