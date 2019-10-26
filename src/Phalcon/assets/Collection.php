<?php

namespace Phalcon\Assets;

/**
 * Represents a collection of assets
 */
class Collection implements \Countable, \Iterator
{
    /**
     * @var array
     */
    protected $assets = array();

    /**
     * @var array
     */
    protected $attributes = array();

    /**
     * Should version be determined from file modification time
     *
     * @var bool
     */
    protected $autoVersion = false;

    /**
     * @var array
     */
    protected $codes = array();

    /**
     * @var array
     */
    protected $filters = array();

    /**
     * @var array
     */
    protected $includedAssets;

    /**
     * @var bool
     */
    protected $join = true;

    /**
     * @var bool
     */
    protected $local = true;

    /**
     * @var string
     */
    protected $prefix;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var string
     */
    protected $sourcePath;

    /**
     * @var bool
     */
    protected $targetLocal = true;

    /**
     * @var string
     */
    protected $targetPath;

    /**
     * @var string
     */
    protected $targetUri;

    /**
     * Version of resource
     *
     * @var string
     */
    protected $version;


    /**
     * @return array
     */
    public function getAssets(): array
    {
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Should version be determined from file modification time
     *
     * @param bool $autoVersion
     */
    public function setAutoVersion(bool $autoVersion)
    {
    }

    /**
     * @return array
     */
    public function getCodes(): array
    {
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
    }

    /**
     * @return bool
     */
    public function getJoin(): bool
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
    public function getPrefix(): string
    {
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
    }

    /**
     * @return string
     */
    public function getSourcePath(): string
    {
    }

    /**
     * @return bool
     */
    public function getTargetLocal(): bool
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
     * Phalcon\Assets\Collection constructor
     */
    public function __construct()
    {
    }

    /**
     * Adds a asset to the collection
     *
     * @param AssetInterface $asset
     * @return Collection
     */
    public function add(AssetInterface $asset): Collection
    {
    }

    /**
     * Adds a CSS asset to the collection
     *
     * @param string $path
     * @param mixed $local
     * @param bool $filter
     * @param mixed $attributes
     * @param string $version
     * @param bool $autoVersion
     * @return Collection
     */
    public function addCss(string $path, $local = null, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Collection
    {
    }

    /**
     * Adds a filter to the collection
     *
     * @param \Phalcon\Assets\FilterInterface $filter
     * @return Collection
     */
    public function addFilter(\Phalcon\Assets\FilterInterface $filter): Collection
    {
    }

    /**
     * Adds an inline code to the collection
     *
     * @param \Phalcon\Assets\Inline $code
     * @return Collection
     */
    public function addInline(\Phalcon\Assets\Inline $code): Collection
    {
    }

    /**
     * Adds an inline CSS to the collection
     *
     * @param string $content
     * @param bool $filter
     * @param mixed $attributes
     * @return Collection
     */
    public function addInlineCss(string $content, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Adds an inline javascript to the collection
     *
     * @param string $content
     * @param bool $filter
     * @param mixed $attributes
     * @return Collection
     */
    public function addInlineJs(string $content, bool $filter = true, $attributes = null): Collection
    {
    }

    /**
     * Adds a javascript asset to the collection
     *
     * @param array $attributes
     * @param string $path
     * @param mixed $local
     * @param bool $filter
     * @param string $version
     * @param bool $autoVersion
     * @return Collection
     */
    public function addJs(string $path, $local = null, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Collection
    {
    }

    /**
     * Returns the number of elements in the form
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns the current asset in the iterator
     *
     * @return \Phalcon\Assets\Asset
     */
    public function current(): Asset
    {
    }

    /**
     * Returns the complete location where the joined/filtered collection must
     * be written
     *
     * @param string $basePath
     * @return string
     */
    public function getRealTargetPath(string $basePath): string
    {
    }

    /**
     * Checks this the asset is added to the collection.
     *
     * ```php
     * use Phalcon\Assets\Asset;
     * use Phalcon\Assets\Collection;
     *
     * $collection = new Collection();
     *
     * $asset = new Asset("js", "js/jquery.js");
     *
     * $collection->add($asset);
     * $collection->has($asset); // true
     * ```
     *
     * @param AssetInterface $asset
     * @return bool
     */
    public function has(AssetInterface $asset): bool
    {
    }

    /**
     * Checks if collection is using auto version
     *
     * @return bool
     */
    public function isAutoVersion(): bool
    {
    }

    /**
     * Sets if all filtered assets in the collection must be joined in a single
     * result file
     *
     * @param bool $join
     * @return Collection
     */
    public function join(bool $join): Collection
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next()
    {
    }

    /**
     * Rewinds the internal iterator
     */
    public function rewind()
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return Collection
     */
    public function setAttributes(array $attributes): Collection
    {
    }

    /**
     * Sets an array of filters in the collection
     *
     * @param array $filters
     * @return Collection
     */
    public function setFilters(array $filters): Collection
    {
    }

    /**
     * Sets if the collection uses local assets by default
     *
     * @param bool $local
     * @return Collection
     */
    public function setLocal(bool $local): Collection
    {
    }

    /**
     * Sets a common prefix for all the assets
     *
     * @param string $prefix
     * @return Collection
     */
    public function setPrefix(string $prefix): Collection
    {
    }

    /**
     * Sets the target local
     *
     * @param bool $targetLocal
     * @return Collection
     */
    public function setTargetLocal(bool $targetLocal): Collection
    {
    }

    /**
     * Sets the target path of the file for the filtered/join output
     *
     * @param string $targetPath
     * @return Collection
     */
    public function setTargetPath(string $targetPath): Collection
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     * @return Collection
     */
    public function setTargetUri(string $targetUri): Collection
    {
    }

    /**
     * Sets a base source path for all the assets in this collection
     *
     * @param string $sourcePath
     * @return Collection
     */
    public function setSourcePath(string $sourcePath): Collection
    {
    }

    /**
     * Check if the current element in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }

    /**
     * Adds a asset or inline-code to the collection
     *
     * @param AssetInterface $asset
     * @return bool
     */
    final protected function addAsset(AssetInterface $asset): bool
    {
    }
}
