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
 * Represents an asset asset
 *
 * ```php
 * $asset = new \Phalcon\Assets\Asset("js", "javascripts/jquery.js");
 * ```
 */
class Asset implements \Phalcon\Assets\AssetInterface
{
    /**
     * @var array | null
     */
    protected $attributes;

    /**
     * @var bool
     */
    protected $autoVersion = false;

    /**
     * @var bool
     */
    protected $filter;

    /**
     * @var bool
     */
    protected $local;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $sourcePath;

    /**
     * @var string
     */
    protected $targetPath;

    /**
     * @var string
     */
    protected $targetUri;

    /**
     * @var string
     */
    protected $type;

    /**
     * Version of resource
     *
     * @var string
     */
    protected $version;


    /**
     * @return array|null
     */
    public function getAttributes(): ?array
    {
    }

    /**
     * @param bool $autoVersion
     */
    public function setAutoVersion(bool $autoVersion)
    {
    }

    /**
     * @return bool
     */
    public function getFilter(): bool
    {
    }

    /**
     * @return bool
     */
    public function getLocal(): bool
    {
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
    }

    /**
     * @return string
     */
    public function getSourcePath(): string
    {
    }

    /**
     * @return string
     */
    public function getTargetPath(): string
    {
    }

    /**
     * @return string
     */
    public function getTargetUri(): string
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Version of resource
     *
     * @return string
     */
    public function getVersion(): string
    {
    }

    /**
     * Version of resource
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
    }

    /**
     * Phalcon\Assets\Asset constructor
     *
     * @param string $type
     * @param string $path
     * @param bool $local
     * @param bool $filter
     * @param array $attributes
     * @param string $version
     * @param bool $autoVersion
     */
    public function __construct(string $type, string $path, bool $local = true, bool $filter = true, array $attributes = array(), string $version = null, bool $autoVersion = false)
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
     * @param string $basePath
     * @return string
     */
    public function getContent(string $basePath = null): string
    {
    }

    /**
     * Returns the complete location where the asset is located
     *
     * @param string $basePath
     * @return string
     */
    public function getRealSourcePath(string $basePath = null): string
    {
    }

    /**
     * Returns the complete location where the asset must be written
     *
     * @param string $basePath
     * @return string
     */
    public function getRealTargetPath(string $basePath = null): string
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
     * Checks if resource is using auto version
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
     * Sets if the asset must be filtered or not
     *
     * @param bool $filter
     * @return AssetInterface
     */
    public function setFilter(bool $filter): AssetInterface
    {
    }

    /**
     * Sets if the asset is local or external
     *
     * @param bool $local
     * @return AssetInterface
     */
    public function setLocal(bool $local): AssetInterface
    {
    }

    /**
     * Sets the asset's source path
     *
     * @param string $sourcePath
     * @return AssetInterface
     */
    public function setSourcePath(string $sourcePath): AssetInterface
    {
    }

    /**
     * Sets the asset's target path
     *
     * @param string $targetPath
     * @return AssetInterface
     */
    public function setTargetPath(string $targetPath): AssetInterface
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     * @return AssetInterface
     */
    public function setTargetUri(string $targetUri): AssetInterface
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
     * Sets the asset's path
     *
     * @param string $path
     * @return AssetInterface
     */
    public function setPath(string $path): AssetInterface
    {
    }
}
