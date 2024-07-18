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
use Phalcon\Assets\Inline\Css as InlineCss;
use Phalcon\Assets\Inline\Js as InlineJs;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Html\Helper\Element;
use Phalcon\Html\Helper\Link;
use Phalcon\Html\Helper\Script;
use Phalcon\Html\TagFactory;

/**
 * Manages collections of CSS/JavaScript assets
 */
class Manager extends AbstractInjectionAware
{
    /**
     * @var array
     */
    protected $collections = [];

    /**
     * @var bool
     */
    protected $implicitOutput = true;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var TagFactory
     */
    protected $tagFactory;

    /**
     * Manager constructor.
     *
     * @param TagFactory $tagFactory
     * @param array      $options
     */
    public function __construct(\Phalcon\Html\TagFactory $tagFactory, array $options = [])
    {
    }

    /**
     * Adds a raw asset to the manager
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
     * @param string $type
     * @param Asset  $asset
     * @return Manager
     */
    public function addAssetByType(string $type, Asset $asset): Manager
    {
    }

    /**
     * Adds a CSS asset to the 'css' collection
     *
     * @param string      $path
     * @param bool        $local
     * @param bool        $filter
     * @param array       $attributes
     * @param string|null $version
     * @param bool        $autoVersion
     * @return Manager
     */
    public function addCss(string $path, bool $local = true, bool $filter = true, array $attributes = [], string $version = null, bool $autoVersion = false): Manager
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
     * @param bool   $filter
     * @param array  $attributes
     * @return Manager
     */
    public function addInlineCss(string $content, bool $filter = true, array $attributes = []): Manager
    {
    }

    /**
     * Adds an inline JavaScript to the 'js' collection
     *
     * @param string $content
     * @param bool   $filter
     * @param array  $attributes
     * @return Manager
     */
    public function addInlineJs(string $content, bool $filter = true, array $attributes = []): Manager
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
     * @param string      $path
     * @param bool        $local
     * @param bool        $filter
     * @param array       $attributes
     * @param string|null $version
     * @param bool        $autoVersion
     * @return Manager
     */
    public function addJs(string $path, bool $local = true, bool $filter = true, array $attributes = [], string $version = null, bool $autoVersion = false): Manager
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
     * @param array  $assets
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
     * if ($manager->exists("jsHeader")) {
     *     // \Phalcon\Assets\Collection
     *     $collection = $manager->get("jsHeader");
     * }
     * ```
     *
     * @param string $name
     * @deprecated
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
     *
     * @return Collection
     * @throws Exception
     */
    public function get(string $name): Collection
    {
    }

    /**
     * Returns existing collections in the manager
     *
     * @return Collection[]
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
     * @param string     $type
     *
     * @return string|null
     * @throws Exception
     */
    public function output(Collection $collection, string $type): string|null
    {
    }

    /**
     * Prints the HTML for CSS assets
     *
     * @param string|null $name
     *
     * @return string
     * @throws Exception
     */
    public function outputCss(string $name = null): string
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
     *
     * @return string
     */
    public function outputInlineCss(string $name = null): string
    {
    }

    /**
     * Prints the HTML for inline JS
     *
     * @param string|null $name
     *
     * @return string
     */
    public function outputInlineJs(string $name = null): string
    {
    }

    /**
     * Prints the HTML for JS assets
     *
     * @param string|null $name
     *
     * @return string
     * @throws Exception
     */
    public function outputJs(string $name = null): string
    {
    }

    /**
     * Sets a collection in the Assets Manager
     *
     * ```php
     * $assets->set("js", $collection);
     * ```
     *
     * @param string     $name
     * @param Collection $collection
     * @return Manager
     */
    public function set(string $name, Collection $collection): Manager
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
     * Calculates the prefixed path including the version
     *
     * @param Collection $collection
     * @param string     $path
     * @param string     $filePath
     *
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
     * @param mixed $parameters
     * @param bool  $local
     *
     * @return string
     * @throws Exception
     */
    private function cssLink($parameters = [], bool $local = true): string
    {
    }

    /**
     * @param mixed  $callback
     * @param array  $attributes
     * @param string $prefixedPath
     * @param bool   $local
     *
     * @return string
     */
    private function doCallback($callback, array $attributes, string $prefixedPath, bool $local): string
    {
    }

    /**
     * @param mixed $parameters
     * @param bool  $local
     *
     * @return string
     * @throws Exception
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
