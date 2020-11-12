<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets;

use Phalcon\Tag;
use Phalcon\Assets\Asset\Js as AssetJs;
use Phalcon\Assets\Asset\Css as AssetCss;
use Phalcon\Assets\Inline\Css as InlineCss;
use Phalcon\Assets\Inline\Js as InlineJs;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;

/**
 * Phalcon\Assets\Manager
 *
 * Manages collections of CSS/JavaScript assets
 */
class Manager extends AbstractInjectionAware
{

    protected $collections;

    /**
     * Options configure
     *
     * @var array
     */
    protected $options;

    /**
     * @var bool
     */
    protected $implicitOutput = true;


    /**
     * Phalcon\Assets\Manager constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Adds a raw asset to the manager
     *
     * ```php
     * $assets->addAsset(
     *     new Phalcon\Assets\Asset("css", "css/style.css")
     * );
     * ```
     *
     * @param Asset $asset
     * @return Manager
     */
    public function addAsset(Asset $asset): Manager
    {
    }

    /**
     * Adds a asset by its type
     *
     * ```php
     * $assets->addAssetByType(
     *     "css",
     *     new \Phalcon\Assets\Asset\Css("css/style.css")
     * );
     * ```
     *
     * @param string $type
     * @param Asset $asset
     * @return Manager
     */
    public function addAssetByType(string $type, Asset $asset): Manager
    {
    }

    /**
     * Adds a CSS asset to the 'css' collection
     *
     * ```php
     * $assets->addCss("css/bootstrap.css");
     * $assets->addCss("http://bootstrap.my-cdn.com/style.css", false);
     * ```
     *
     * @param string $path
     * @param mixed $local
     * @param bool $filter
     * @param mixed $attributes
     * @param string $version
     * @param bool $autoVersion
     * @return Manager
     */
    public function addCss(string $path, $local = true, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Manager
    {
    }

    /**
     * Adds a raw inline code to the manager
     *
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCode(Inline $code): Manager
    {
    }

    /**
     * Adds an inline code by its type
     *
     * @param string $type
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCodeByType(string $type, Inline $code): Manager
    {
    }

    /**
     * Adds an inline CSS to the 'css' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineCss(string $content, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds an inline JavaScript to the 'js' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineJs(string $content, $filter = true, $attributes = null): Manager
    {
    }

    /**
     * Adds a JavaScript asset to the 'js' collection
     *
     * ```php
     * $assets->addJs("scripts/jquery.js");
     * $assets->addJs("http://jquery.my-cdn.com/jquery.js", false);
     * ```
     *
     * @param string $path
     * @param mixed $local
     * @param bool $filter
     * @param mixed $attributes
     * @param string $version
     * @param bool $autoVersion
     * @return Manager
     */
    public function addJs(string $path, $local = true, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Manager
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
     * @param array $assets
     * @param string $type
     * @return array
     */
    public function collectionAssetsByType(array $assets, string $type): array
    {
    }

    /**
     * Returns true or false if collection exists.
     *
     * ```php
     * if ($assets->exists("jsHeader")) {
     *     // \Phalcon\Assets\Collection
     *     $collection = $assets->get("jsHeader");
     * }
     * ```
     *
     * @param string $id
     * @return bool
     */
    public function exists(string $id): bool
    {
    }

    /**
     * Returns a collection by its id.
     *
     * ```php
     * $scripts = $assets->get("js");
     * ```
     *
     * @param string $id
     * @return Collection
     */
    public function get(string $id): Collection
    {
    }

    /**
     * Returns existing collections in the manager
     *
     * @return array|Collection[]
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
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Traverses a collection calling the callback to generate its HTML
     *
     * @param callback $callback
     * @param string $type
     * @param Collection $collection
     * @return string|null
     */
    public function output(Collection $collection, $callback, $type): ?string
    {
    }

    /**
     * Prints the HTML for CSS assets
     *
     * @param string $collectionName
     * @return string
     */
    public function outputCss(string $collectionName = null): string
    {
    }

    /**
     * Traverses a collection and generate its HTML
     *
     * @param string $type
     * @param Collection $collection
     * @return string
     */
    public function outputInline(Collection $collection, $type): string
    {
    }

    /**
     * Prints the HTML for inline CSS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineCss(string $collectionName = null): string
    {
    }

    /**
     * Prints the HTML for inline JS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineJs(string $collectionName = null): string
    {
    }

    /**
     * Prints the HTML for JS assets
     *
     * @param string $collectionName
     * @return string
     */
    public function outputJs(string $collectionName = null): string
    {
    }

    /**
     * Sets a collection in the Assets Manager
     *
     * ```php
     * $assets->set("js", $collection);
     * ```
     *
     * @param string $id
     * @param Collection $collection
     * @return Manager
     */
    public function set(string $id, Collection $collection): Manager
    {
    }

    /**
     * Sets the manager options
     *
     * @param array $options
     * @return Manager
     */
    public function setOptions(array $options): Manager
    {
    }

    /**
     * Sets if the HTML generated must be directly printed or returned
     *
     * @param bool $implicitOutput
     * @return Manager
     */
    public function useImplicitOutput(bool $implicitOutput): Manager
    {
    }

    /**
     * Returns the prefixed path
     *
     * @param Collection $collection
     * @param string $path
     * @return string
     */
    private function getPrefixedPath(Collection $collection, string $path): string
    {
    }
}
