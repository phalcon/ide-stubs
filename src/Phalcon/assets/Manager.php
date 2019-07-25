<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\Manager
 *
 * Manages collections of CSS/Javascript assets
 */
class Manager implements \Phalcon\Di\InjectionAwareInterface
{

    protected $collections;

    /**
     * @var DiInterface
     */
    protected $container;

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
    public function __construct(array $options = array()) {}

    /**
     * Adds a raw asset to the manager
     *
     * ```php
     * $assets->addAsset(
     *     new Phalcon\Assets\Asset("css", "css/style.css")
     * );
     * ```
     *
     * @param \Phalcon\Assets\Asset $asset
     * @return Manager
     */
    public function addAsset(\Phalcon\Assets\Asset $asset): Manager {}

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
     * @param \Phalcon\Assets\Asset $asset
     * @return Manager
     */
    public function addAssetByType(string $type, \Phalcon\Assets\Asset $asset): Manager {}

    /**
     * Adds a Css asset to the 'css' collection
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
    public function addCss(string $path, $local = true, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Manager {}

    /**
     * Adds a raw inline code to the manager
     *
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCode(Inline $code): Manager {}

    /**
     * Adds an inline code by its type
     *
     * @param string $type
     * @param Inline $code
     * @return Manager
     */
    public function addInlineCodeByType(string $type, Inline $code): Manager {}

    /**
     * Adds an inline Css to the 'css' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineCss(string $content, $filter = true, $attributes = null): Manager {}

    /**
     * Adds an inline javascript to the 'js' collection
     *
     * @param string $content
     * @param mixed $filter
     * @param mixed $attributes
     * @return Manager
     */
    public function addInlineJs(string $content, $filter = true, $attributes = null): Manager {}

    /**
     * Adds a javascript asset to the 'js' collection
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
    public function addJs(string $path, $local = true, bool $filter = true, $attributes = null, string $version = null, bool $autoVersion = false): Manager {}

    /**
     * Creates/Returns a collection of assets
     *
     * @param string $name
     * @return \Phalcon\Assets\Collection
     */
    public function collection(string $name): Collection {}

    /**
     * Creates/Returns a collection of assets by type
     *
     * @param array $assets
     * @param string $type
     * @return array
     */
    public function collectionAssetsByType(array $assets, string $type): array {}

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
    public function exists(string $id): bool {}

    /**
     * Returns a collection by its id.
     *
     * ```php
     * $scripts = $assets->get("js");
     * ```
     *
     * @param string $id
     * @return \Phalcon\Assets\Collection
     */
    public function get(string $id): Collection {}

    /**
     * Returns existing collections in the manager
     *
     * @return array|\Phalcon\Assets\Collection[]
     */
    public function getCollections(): array {}

    /**
     * Returns the CSS collection of assets
     *
     * @return \Phalcon\Assets\Collection
     */
    public function getCss(): Collection {}

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Returns the CSS collection of assets
     *
     * @return \Phalcon\Assets\Collection
     */
    public function getJs(): Collection {}

    /**
     * Returns the manager options
     *
     * @return array
     */
    public function getOptions(): array {}

    /**
     * Traverses a collection calling the callback to generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection
     * @param callback $callback
     * @param string $type
     * @return string|null
     */
    public function output(\Phalcon\Assets\Collection $collection, $callback, $type): ?string {}

    /**
     * Prints the HTML for CSS assets
     *
     * @param string $collectionName
     * @return string
     */
    public function outputCss(string $collectionName = null): string {}

    /**
     * Traverses a collection and generate its HTML
     *
     * @param \Phalcon\Assets\Collection $collection
     * @param string $type
     * @return string
     */
    public function outputInline(\Phalcon\Assets\Collection $collection, $type): string {}

    /**
     * Prints the HTML for inline CSS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineCss(string $collectionName = null): string {}

    /**
     * Prints the HTML for inline JS
     *
     * @param string $collectionName
     * @return string
     */
    public function outputInlineJs(string $collectionName = null): string {}

    /**
     * Prints the HTML for JS assets
     *
     * @param string $collectionName
     * @return string
     */
    public function outputJs(string $collectionName = null): string {}

    /**
     * Sets a collection in the Assets Manager
     *
     * ```php
     * $assets->set("js", $collection);
     * ```
     *
     * @param string $id
     * @param \Phalcon\Assets\Collection $collection
     * @return Manager
     */
    public function set(string $id, \Phalcon\Assets\Collection $collection): Manager {}

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Sets the manager options
     *
     * @param array $options
     * @return Manager
     */
    public function setOptions(array $options): Manager {}

    /**
     * Sets if the HTML generated must be directly printed or returned
     *
     * @param bool $implicitOutput
     * @return Manager
     */
    public function useImplicitOutput(bool $implicitOutput): Manager {}

    /**
     * Returns the prefixed path
     *
     * @param \Phalcon\Assets\Collection $collection
     * @param string $path
     * @return string
     */
    private function getPrefixedPath(\Phalcon\Assets\Collection $collection, string $path): string {}

}
