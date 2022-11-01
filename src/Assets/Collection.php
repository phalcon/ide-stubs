<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * Collection of asset objects
 */
class Collection implements \Countable, \IteratorAggregate
{
    /**
     * @var array
     */
    protected $assets = [];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * Should version be determined from file modification time
     *
     * @var bool
     */
    protected $autoVersion = false;

    /**
     * @var array
     */
    protected $codes = [];

    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @var bool
     */
    protected $isLocal = true;

    /**
     * @var bool
     */
    protected $join = true;

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @var string
     */
    protected $sourcePath = '';

    /**
     * @var bool
     */
    protected $targetIsLocal = true;

    /**
     * @var string
     */
    protected $targetPath = '';

    /**
     * @var string
     */
    protected $targetUri = '';

    /**
     * @var string
     */
    protected $version = '';

    /**
     * Adds an asset to the collection
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
     * @param string      $path
     * @param bool|null   $isLocal
     * @param bool        $filter
     * @param array       $attributes
     * @param string|null $version
     * @param bool        $autoVersion
     * @return Collection
     */
    public function addCss(string $path, $isLocal = null, bool $filter = true, array $attributes = [], string $version = null, bool $autoVersion = false): Collection
    {
    }

    /**
     * Adds a filter to the collection
     *
     * @param FilterInterface $filter
     * @return Collection
     */
    public function addFilter(FilterInterface $filter): Collection
    {
    }

    /**
     * Adds an inline code to the collection
     *
     * @param Inline $code
     * @return Collection
     */
    public function addInline(Inline $code): Collection
    {
    }

    /**
     * Adds an inline CSS to the collection
     *
     * @param string $content
     * @param bool   $filter
     * @param array  $attributes
     * @return Collection
     */
    public function addInlineCss(string $content, bool $filter = true, array $attributes = []): Collection
    {
    }

    /**
     * Adds an inline JavaScript to the collection
     *
     * @param string $content
     * @param bool   $filter
     * @param array  $attributes
     * @return Collection
     */
    public function addInlineJs(string $content, bool $filter = true, array $attributes = []): Collection
    {
    }

    /**
     * Adds a JavaScript asset to the collection
     *
     * @param string      $path
     * @param bool|null   $isLocal
     * @param bool        $filter
     * @param array       $attributes
     * @param string|null $version
     * @param bool        $autoVersion
     * @return Collection
     */
    public function addJs(string $path, $isLocal = null, bool $filter = true, array $attributes = [], string $version = null, bool $autoVersion = false): Collection
    {
    }

    /**
     * Return the count of the assets
     *
     * @return int
     *
     * @link https://php.net/manual/en/countable.count.php
     */
    public function count(): int
    {
    }

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
     * Returns the generator of the class
     *
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
    }

    /**
     * @return bool
     */
    public function getJoin(): bool
    {
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Returns the complete location where the joined/filtered collection must
     * be written
     *
     * @param string $basePath
     *
     * @return string
     */
    public function getRealTargetPath(string $basePath): string
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
    public function getTargetIsLocal(): bool
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
    public function getVersion(): string
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
     *
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
     * @return bool
     */
    public function isLocal(): bool
    {
    }

    /**
     * Sets if all filtered assets in the collection must be joined in a single
     * result file
     *
     * @param bool $flag
     *
     * @return Collection
     */
    public function join(bool $flag): Collection
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
     * @param bool $flag
     * @return Collection
     */
    public function setAutoVersion(bool $flag): Collection
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
     * @param bool $flag
     * @return Collection
     */
    public function setIsLocal(bool $flag): Collection
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
     * Sets if the target local or not
     *
     * @param bool $flag
     * @return Collection
     */
    public function setTargetIsLocal(bool $flag): Collection
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
     * Sets the version
     *
     * @param string $version
     * @return Collection
     */
    public function setVersion(string $version): Collection
    {
    }

    /**
     * Adds an asset or inline-code to the collection
     *
     * @param AssetInterface $asset
     *
     * @return bool
     */
    final protected function addAsset(AssetInterface $asset): bool
    {
    }

    /**
     * Adds an inline asset
     *
     * @param string $className
     * @param string $path
     * @param mixed $isLocal
     * @param bool $filter
     * @param array $attributes
     * @param string $version
     * @param bool $autoVersion
     * @return Collection
     */
    private function processAdd(string $className, string $path, $isLocal = null, bool $filter = true, array $attributes = [], string $version = null, bool $autoVersion = false): Collection
    {
    }

    /**
     * Adds an inline asset
     *
     * @param string $className
     * @param string $content
     * @param bool $filter
     * @param array $attributes
     * @return Collection
     */
    private function processAddInline(string $className, string $content, bool $filter = true, array $attributes = []): Collection
    {
    }

    /**
     * @param array $attributes
     *
     * @return array
     */
    private function processAttributes(array $attributes): array
    {
    }
}
