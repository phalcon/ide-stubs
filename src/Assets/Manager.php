<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

use Phalcon\Assets\Asset\Css as AssetCss;
use Phalcon\Assets\Asset\Js as AssetJs;
use Phalcon\Assets\Exceptions\AssetSourceTargetCollision;
use Phalcon\Assets\Exceptions\CollectionNotFound;
use Phalcon\Assets\Exceptions\InvalidAssetSourcePath;
use Phalcon\Assets\Exceptions\InvalidAssetTargetPath;
use Phalcon\Assets\Exceptions\InvalidFilter;
use Phalcon\Assets\Exceptions\InvalidTargetPath;
use Phalcon\Assets\Exceptions\TargetPathIsDirectory;
use Phalcon\Assets\Inline\Css as InlineCss;
use Phalcon\Assets\Inline\Js as InlineJs;
use Phalcon\Contracts\Assets\AssetsTypes;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Html\Helper\Link;
use Phalcon\Html\Helper\Script;
use Phalcon\Html\TagFactory;
use Phalcon\Mvc\Url;
use Phalcon\Traits\Php\FileTrait;

/**
 * Manages collections of CSS/JavaScript assets
 *
 * @phpstan-import-type assets_asset_list from AssetsTypes
 * @phpstan-import-type assets_attributes from AssetsTypes
 * @phpstan-import-type assets_callback from AssetsTypes
 * @phpstan-import-type assets_collections from AssetsTypes
 * @phpstan-import-type assets_filters from AssetsTypes
 * @phpstan-import-type assets_options from AssetsTypes
 * @phpstan-import-type assets_parameters from AssetsTypes
 */
class Manager extends AbstractInjectionAware
{
    use \Phalcon\Traits\Php\FileTrait;


    /**
     * @var assets_collections
     */
    protected array $collections = [];

    protected bool $implicitOutput = true;

    protected array $options = [];

    protected \Phalcon\Html\TagFactory $tagFactory;

    /**
     * Manager constructor.
     *
     * @param TagFactory $tagFactory
     * @param assets_options $options
     */
    public function __construct(\Phalcon\Html\TagFactory $tagFactory, array $options = [])
    {
    }

    /**
     * Adds a raw asset to the manager
     *
     * @param Asset $asset
     * @return static
     */
    public function addAsset(Asset $asset): static
    {
    }

    /**
     * Adds an asset by its type
     *
     * @param string $type
     * @param Asset  $asset
     * @return static
     */
    public function addAssetByType(string $type, Asset $asset): static
    {
    }

    /**
     * Adds a CSS asset to the 'css' collection
     *
     * @param assets_attributes $attributes
     * @param string $path
     * @param bool $local
     * @param bool $filter
     * @param string|null $version
     * @param bool $autoVersion
     * @return static
     */
    public function addCss(string $path, bool $local = true, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
    {
    }

    /**
     * Adds a raw inline code to the manager
     *
     * @param Inline $code
     * @return static
     */
    public function addInlineCode(Inline $code): static
    {
    }

    /**
     * Adds an inline code by its type
     *
     * @param string $type
     * @param Inline $code
     * @return static
     */
    public function addInlineCodeByType(string $type, Inline $code): static
    {
    }

    /**
     * Adds an inline CSS to the 'css' collection
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
     * Adds an inline JavaScript to the 'js' collection
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
     * Adds a JavaScript asset to the 'js' collection
     *
     * ```php
     * $assets->addJs("scripts/jquery.js");
     * $assets->addJs("https://jquery.my-cdn.com/jquery.js", false);
     * ```
     *
     * @param assets_attributes $attributes
     * @param string $path
     * @param bool $local
     * @param bool $filter
     * @param string|null $version
     * @param bool $autoVersion
     * @return static
     */
    public function addJs(string $path, bool $local = true, bool $filter = true, array $attributes = [], ?string $version = null, bool $autoVersion = false): static
    {
    }

    /**
     * Creates/Returns a collection of assets
     *
     * @param string $name
     * @return Collection
     */
    public function collection(string $name): Collection
    {
    }

    /**
     * Creates/Returns a collection of assets by type
     *
     * The `instanceof` guard below is the validation, so the parameter stays a
     * plain array here.
     *
     * @param  array<array-key, mixed> $assets
     * @return assets_asset_list
     * @param string $type
     */
    public function collectionAssetsByType(array $assets, string $type): array
    {
    }

    /**
     * Returns true or false if collection exists.
     *
     * ```php
     * if ($manager->exists("jsHeader")) {
     *     // \Phalcon\Assets\Collection
     *     $collection = $manager->get("jsHeader");
     * }
     * ```
     *
     * @deprecated
     * @param string $name
     * @return bool
     */
    public function exists(string $name): bool
    {
    }

    /**
     * Returns a collection by its id.
     *
     * ```php
     * $scripts = $assets->get("js");
     * ```
     *
     * @param string $name
     * @return Collection
     */
    public function get(string $name): Collection
    {
    }

    /**
     * Returns existing collections in the manager
     *
     * @return assets_collections
     */
    public function getCollections(): array
    {
    }

    /**
     * Returns the CSS collection of assets
     *
     * @return Collection
     */
    public function getCss(): Collection
    {
    }

    /**
     * Returns the CSS collection of assets
     *
     * @return Collection
     */
    public function getJs(): Collection
    {
    }

    /**
     * Returns the manager options
     *
     * @return assets_options
     */
    public function getOptions(): array
    {
    }

    /**
     * Returns true or false if collection exists.
     *
     * ```php
     * if ($manager->has("jsHeader")) {
     *     // \Phalcon\Assets\Collection
     *     $collection = $manager->get("jsHeader");
     * }
     * ```
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Traverses a collection calling the callback to generate its HTML
     *
     * @param Collection $collection
     * @param string $type
     * @return string|null
     */
    public function output(Collection $collection, string $type): string|null
    {
    }

    /**
     * Prints the HTML for CSS assets
     *
     * @throws Exception
     * @param string|null $name
     * @return string
     */
    public function outputCss(?string $name = null): string
    {
    }

    /**
     * Traverses a collection and generate its HTML
     *
     * @param Collection $collection
     * @param string     $type
     *
     * @return string
     * @throws Exception
     */
    public function outputInline(Collection $collection, $type): string
    {
    }

    /**
     * Prints the HTML for inline CSS
     *
     * @param string|null $name
     * @return string
     */
    public function outputInlineCss(?string $name = null): string
    {
    }

    /**
     * Prints the HTML for inline JS
     *
     * @param string|null $name
     * @return string
     */
    public function outputInlineJs(?string $name = null): string
    {
    }

    /**
     * Prints the HTML for JS assets
     *
     * @param string|null $name
     * @return string
     */
    public function outputJs(?string $name = null): string
    {
    }

    /**
     * Sets a collection in the Assets Manager
     *
     * ```php
     * $assets->set("js", $collection);
     * ```
     *
     * @param string $name
     * @param Collection $collection
     * @return static
     */
    public function set(string $name, Collection $collection): static
    {
    }

    /**
     * Sets the manager options
     *
     * @param assets_options $options
     * @return static
     */
    public function setOptions(array $options): static
    {
    }

    /**
     * Sets if the HTML generated must be directly printed or returned
     *
     * @param bool $implicitOutput
     * @return static
     */
    public function useImplicitOutput(bool $implicitOutput): static
    {
    }

    /**
     * Applies the collection filters to the content. Filtering only happens
     * when `$mustFilter` is true; every filter must be a `FilterInterface`
     * instance.
     *
     * The `instanceof` guard below is the validation, so the parameter stays a
     * plain array here.
     *
     * @param array<array-key, mixed> $filters
     *
     * @throws InvalidFilter
     * @param string $content
     * @param bool $mustFilter
     * @return string
     */
    private function applyFilters(string $content, array $filters, bool $mustFilter = true): string
    {
    }

    /**
     * Calculates the prefixed path including the version
     *
     * @param Collection $collection
     * @param string $path
     * @param string $filePath
     * @return string
     */
    private function calculatePrefixedPath(Collection $collection, string $path, string $filePath): string
    {
    }

    /**
     * @param string $type
     * @return Collection
     */
    private function checkAndCreateCollection(string $type): Collection
    {
    }

    /**
     * Builds a LINK[rel="stylesheet"] tag
     *
     * @throws Exception
     * @param mixed $parameters
     * @param bool $local
     * @return string
     */
    private function cssLink($parameters = [], bool $local = true): string
    {
    }

    /**
     * The native type stays `var`, which `assets_callback` narrows.
     *
     * @param assets_callback   $callback
     * @param assets_attributes $attributes
     * @param string $prefixedPath
     * @param bool $local
     * @return string
     */
    private function doCallback($callback, array $attributes, string $prefixedPath, bool $local): string
    {
    }

    /**
     * @param mixed $parameters
     * @param Collection $collection
     * @param string     $completeTargetPath
     *
     * @return bool
     * @throws Exception
     */
    private function getJoin(Collection $collection, string $completeTargetPath): bool
    {
    }

    /**
     * @param Collection      $collection
     * @param string          $completeTargetPath
     * @param assets_callback $callback
     * @param string          $output
     *
     * @return string
     */
    private function getOutput(Collection $collection, string $completeTargetPath, array $callback, string $output): string
    {
    }

    /**
     * @throws Exception
     * @param Asset $asset
     * @param string $completeSourcePath
     * @return string
     */
    private function getSourcePath(Asset $asset, string $completeSourcePath): string
    {
    }

    /**
     * @throws Exception
     * @param Asset $asset
     * @param string $targetPath
     * @param string $sourcePath
     * @param bool $filterNeeded
     * @return bool
     */
    private function isFilterNeeded(Asset $asset, string $targetPath, string $sourcePath, bool $filterNeeded): bool
    {
    }

    /**
     * @param bool  $local
     *
     * @return string
     * @throws Exception
     * @param mixed $parameters
     */
    private function jsLink($parameters = [], bool $local = true): string
    {
    }

    /**
     * Processes common parameters for js/css link generation
     *
     * @param mixed $parameters
     * @param bool $local
     * @param string $helperClass
     * @param string $type
     * @param string $name
     * @return string
     */
    private function processParameters($parameters, bool $local, string $helperClass, string $type, string $name): string
    {
    }
}
