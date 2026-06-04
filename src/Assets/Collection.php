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
     * @return static
     */
    public function add(AssetInterface $asset): static
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
     * @return static
     */
    public function addCss(string $path, $isLocal = null, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
    {
    }

    /**
     * Adds a filter to the collection
     *
     * @param FilterInterface $filter
     * @return static
     */
    public function addFilter(FilterInterface $filter): static
    {
    }

    /**
     * Adds an inline code to the collection
     *
     * @param Inline $code
     * @return static
     */
    public function addInline(Inline $code): static
    {
    }

    /**
     * Adds an inline CSS to the collection
     *
     * @param string $content
     * @param bool   $filter
     * @param array  $attributes
     * @return static
     */
    public function addInlineCss(string $content, bool $filter = true, array $attributes = []): static
    {
    }

    /**
     * Adds an inline JavaScript to the collection
     *
     * @param string $content
     * @param bool   $filter
     * @param array  $attributes
     * @return static
     */
    public function addInlineJs(string $content, bool $filter = true, array $attributes = []): static
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
     * @return static
     */
    public function addJs(string $path, $isLocal = null, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
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
     * @return static
     */
    public function join(bool $flag): static
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return static
     */
    public function setAttributes(array $attributes): static
    {
    }

    /**
     * @param bool $flag
     * @return static
     */
    public function setAutoVersion(bool $flag): static
    {
    }

    /**
     * Sets an array of filters in the collection
     *
     * @param array $filters
     * @return static
     */
    public function setFilters(array $filters): static
    {
    }

    /**
     * Sets if the collection uses local assets by default
     *
     * @param bool $flag
     * @return static
     */
    public function setIsLocal(bool $flag): static
    {
    }

    /**
     * Sets a common prefix for all the assets
     *
     * @param string $prefix
     * @return static
     */
    public function setPrefix(string $prefix): static
    {
    }

    /**
     * Sets if the target local or not
     *
     * @param bool $flag
     * @return static
     */
    public function setTargetIsLocal(bool $flag): static
    {
    }

    /**
     * Sets the target path of the file for the filtered/join output
     *
     * @param string $targetPath
     * @return static
     */
    public function setTargetPath(string $targetPath): static
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     * @return static
     */
    public function setTargetUri(string $targetUri): static
    {
    }

    /**
     * Sets a base source path for all the assets in this collection
     *
     * @param string $sourcePath
     * @return static
     */
    public function setSourcePath(string $sourcePath): static
    {
    }

    /**
     * Sets the version
     *
     * @param string $version
     * @return static
     */
    public function setVersion(string $version): static
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
     * @param string|null $version
     * @param bool $autoVersion
     * @return static
     */
    private function processAdd(string $className, string $path, $isLocal = null, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
    {
    }

    /**
     * Adds an inline asset
     *
     * @param string $className
     * @param string $content
     * @param bool $filter
     * @param array $attributes
     * @return static
     */
    private function processAddInline(string $className, string $content, bool $filter = true, array $attributes = []): static
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
