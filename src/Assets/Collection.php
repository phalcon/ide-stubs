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
use Phalcon\Assets\Traits\AttributesTrait;
use Phalcon\Assets\Traits\SourceTargetTrait;
use Phalcon\Contracts\Assets\AssetsTypes;
use Phalcon\Traits\Php\FileTrait;
use Traversable;

/**
 * Collection of asset objects
 *
 * @phpstan-import-type assets_asset_map from AssetsTypes
 * @phpstan-import-type assets_codes from AssetsTypes
 * @phpstan-import-type assets_attributes from AssetsTypes
 * @phpstan-import-type assets_filters from AssetsTypes
 */
class Collection implements \Countable, \IteratorAggregate
{
    use \Phalcon\Assets\Traits\AttributesTrait;
    use \Phalcon\Traits\Php\FileTrait;
    use \Phalcon\Assets\Traits\SourceTargetTrait;


    /**
     * @var assets_asset_map
     */
    protected array $assets = [];

    /**
     * Should version be determined from file modification time
     */
    protected bool $autoVersion = false;

    /**
     * @var assets_codes
     */
    protected array $codes = [];

    /**
     * @var assets_filters
     */
    protected array $filters = [];

    protected bool $join = true;

    protected string $prefix = '';

    protected bool $targetIsLocal = true;

    protected string $version = '';

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
     * @param bool|null   $isLocal
     * @param assets_attributes $attributes
     * @param string $path
     * @param bool $filter
     * @param string|null $version
     * @param bool $autoVersion
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
     * @param assets_attributes $attributes
     * @param string $content
     * @param bool $filter
     * @return static
     */
    public function addInlineCss(string $content, bool $filter = true, array $attributes = []): static
    {
    }

    /**
     * Adds an inline JavaScript to the collection
     *
     * @param assets_attributes $attributes
     * @param string $content
     * @param bool $filter
     * @return static
     */
    public function addInlineJs(string $content, bool $filter = true, array $attributes = []): static
    {
    }

    /**
     * Adds a JavaScript asset to the collection
     *
     * @param bool|null   $isLocal
     * @param assets_attributes $attributes
     * @param string $path
     * @param bool $filter
     * @param string|null $version
     * @param bool $autoVersion
     * @return static
     */
    public function addJs(string $path, $isLocal = null, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
    {
    }

    /**
     * Return the count of the assets
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Return the stored assets
     *
     * @return assets_asset_map
     */
    public function getAssets(): array
    {
    }

    /**
     * Return the stored codes
     *
     * @return assets_codes
     */
    public function getCodes(): array
    {
    }

    /**
     * Return the stored filters
     *
     * @return assets_filters
     */
    public function getFilters(): array
    {
    }

    /**
     * Returns the iterator of the class
     *
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
    }

    /**
     * @return bool
     */
    public function getJoin(): bool
    {
    }

    /**
     * Returns the prefix
     *
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
     * @return string
     */
    public function getRealTargetPath(string $basePath): string
    {
    }

    /**
     * Returns whether the target is local or not
     *
     * @return bool
     */
    public function getTargetIsLocal(): bool
    {
    }

    /**
     * Returns the version
     *
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
     * @param bool $flag
     * @return static
     */
    public function join(bool $flag): static
    {
    }

    /**
     * Sets extra HTML attributes
     *
     * @param assets_attributes $attributes
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
     * @param assets_filters $filters
     * @return static
     */
    public function setFilters(array $filters): static
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
     * @return bool
     */
    final protected function addAsset(AssetInterface $asset): bool
    {
    }

    /**
     * Adds an inline asset
     *
     * @param assets_attributes $attributes
     * @param string $className
     * @param string $path
     * @param mixed $isLocal
     * @param bool $filter
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
     * @param assets_attributes $attributes
     * @param string $className
     * @param string $content
     * @param bool $filter
     * @return static
     */
    private function processAddInline(string $className, string $content, bool $filter = true, array $attributes = []): static
    {
    }

    /**
     * @param assets_attributes $attributes
     *
     * @return assets_attributes
     */
    private function processAttributes(array $attributes): array
    {
    }
}
