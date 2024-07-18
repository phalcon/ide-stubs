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
 * Represents an asset
 *
 * ```php
 * $asset = new \Phalcon\Assets\Asset("js", "js/jquery.js");
 * ```
 */
class Asset implements \Phalcon\Assets\AssetInterface
{
    /**
     * @var array
     */
    protected $attributes;

    /**
     * @var bool
     */
    protected $isAutoVersion = false;

    /**
     * @var bool
     */
    protected $filter;

    /**
     * @var bool
     */
    protected $isLocal;

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
     * @var string|null
     */
    protected $version;

    /**
     * Asset constructor.
     *
     * @param string      $type
     * @param string      $path
     * @param bool        $isLocal
     * @param bool        $filter
     * @param array       $attributes
     * @param string|null $version
     * @param bool        $isAutoVersion
     */
    public function __construct(string $type, string $path, bool $isLocal = true, bool $filter = true, array $attributes = [], string $version = null, bool $isAutoVersion = false)
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
     * Gets extra HTML attributes.
     *
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Returns the content of the asset as an string
     * Optionally a base path where the asset is located can be set
     *
     * @param string|null $basePath
     *
     * @return string
     * @throws Exception
     */
    public function getContent(string $basePath = null): string
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
    public function getPath(): string
    {
    }

    /**
     * Returns the complete location where the asset is located
     *
     * @param string|null $basePath
     *
     * @return string
     */
    public function getRealSourcePath(string $basePath = null): string
    {
    }

    /**
     * Returns the complete location where the asset must be written
     *
     * @param string|null $basePath
     *
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
     * Checks if the asset is local or not
     *
     * @return bool
     */
    public function isLocal(): bool
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     *
     * @return AssetInterface
     */
    public function setAttributes(array $attributes): AssetInterface
    {
    }

    /**
     * @param bool $flag
     *
     * @return AssetInterface
     */
    public function setAutoVersion(bool $flag): AssetInterface
    {
    }

    /**
     * Sets if the asset must be filtered or not
     *
     * @param bool $filter
     *
     * @return AssetInterface
     */
    public function setFilter(bool $filter): AssetInterface
    {
    }

    /**
     * Sets if the asset is local or external
     *
     * @param bool $flag
     *
     * @return AssetInterface
     */
    public function setIsLocal(bool $flag): AssetInterface
    {
    }

    /**
     * Sets the asset's source path
     *
     * @param string $sourcePath
     *
     * @return AssetInterface
     */
    public function setSourcePath(string $sourcePath): AssetInterface
    {
    }

    /**
     * Sets the asset's target path
     *
     * @param string $targetPath
     *
     * @return AssetInterface
     */
    public function setTargetPath(string $targetPath): AssetInterface
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     *
     * @return AssetInterface
     */
    public function setTargetUri(string $targetUri): AssetInterface
    {
    }

    /**
     * Sets the asset's type
     *
     * @param string $type
     *
     * @return AssetInterface
     */
    public function setType(string $type): AssetInterface
    {
    }

    /**
     * Sets the asset's path
     *
     * @param string $path
     *
     * @return AssetInterface
     */
    public function setPath(string $path): AssetInterface
    {
    }

    /**
     * Sets the asset's version
     *
     * @param string $version
     *
     * @return AssetInterface
     */
    public function setVersion(string $version): AssetInterface
    {
    }

    /**
     * @param string $property
     *
     * @return string
     */
    private function checkPath(string $property): string
    {
    }

    /**
     * @param string $completePath
     *
     * @throws Exception
     * @return void
     */
    private function throwException(string $completePath): void
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param string $filename
     * @return bool
     */
    protected function phpFileExists(string $filename): bool
    {
    }

    /**
     * @param string $filename
     */
    protected function phpFileGetContents(string $filename)
    {
    }
}
