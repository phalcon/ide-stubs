<?php

namespace Phalcon;

/**
 * This components helps in the generation of: URIs, URLs and Paths
 *
 * ```php
 * // Generate a URL appending the URI to the base URI
 * echo $url->get("products/edit/1");
 *
 * // Generate a URL for a predefined route
 * echo $url->get(
 *     [
 *         "for"   => "blog-post",
 *         "title" => "some-cool-stuff",
 *         "year"  => "2012",
 *     ]
 * );
 * ```
 */
class Url implements \Phalcon\Url\UrlInterface, \Phalcon\Di\InjectionAwareInterface
{
    /**
     * @var null | string
     */
    protected $baseUri = null;

    /**
     * @var null | string
     */
    protected $basePath = null;

    /**
     * @var <DiInterface>
     */
    protected $container;


    protected $router;

    /**
     * @var null | string
     */
    protected $staticBaseUri = null;


    /**
     * Generates a URL
     *
     * ```php
     * // Generate a URL appending the URI to the base URI
     * echo $url->get("products/edit/1");
     *
     * // Generate a URL for a predefined route
     * echo $url->get(
     *     [
     *         "for"   => "blog-post",
     *         "title" => "some-cool-stuff",
     *         "year"  => "2015",
     *     ]
     * );
     *
     * // Generate a URL with GET arguments (/show/products?id=1&name=Carrots)
     * echo $url->get(
     *     "show/products",
     *     [
     *         "id"   => 1,
     *         "name" => "Carrots",
     *     ]
     * );
     *
     * // Generate an absolute URL by setting the third parameter as false.
     * echo $url->get(
     *     "https://phalconphp.com/",
     *     null,
     *     false
     * );
     * ```
     *
     * @param mixed $uri
     * @param mixed $args
     * @param bool $local
     * @param mixed $baseUri
     * @return string
     */
    public function get($uri = null, $args = null, bool $local = null, $baseUri = null): string {}

    /**
     * Returns the base path
     *
     * @return string
     */
    public function getBasePath(): string {}

    /**
     * Returns the prefix for all the generated urls. By default /
     *
     * @return string
     */
    public function getBaseUri(): string {}

    /**
     * Returns the DependencyInjector container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Generates a URL for a static resource
     *
     * ```php
     * // Generate a URL for a static resource
     * echo $url->getStatic("img/logo.png");
     *
     * // Generate a URL for a static predefined route
     * echo $url->getStatic(
     *     [
     *         "for" => "logo-cdn",
     *     ]
     * );
     * ```
     *
     * @param mixed $uri
     * @return string
     */
    public function getStatic($uri = null): string {}

    /**
     * Returns the prefix for all the generated static urls. By default /
     *
     * @return string
     */
    public function getStaticBaseUri(): string {}

    /**
     * Sets a base path for all the generated paths
     *
     * ```php
     * $url->setBasePath("/var/www/htdocs/");
     * ```
     *
     * @param string $basePath
     * @return \Phalcon\Url\UrlInterface
     */
    public function setBasePath(string $basePath): UrlInterface {}

    /**
     * Sets a prefix for all the URIs to be generated
     *
     * ```php
     * $url->setBaseUri("/invo/");
     *
     * $url->setBaseUri("/invo/index.php/");
     * ```
     *
     * @param string $baseUri
     * @return \Phalcon\Url\UrlInterface
     */
    public function setBaseUri(string $baseUri): UrlInterface {}

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Sets a prefix for all static URLs generated
     *
     * ```php
     * $url->setStaticBaseUri("/invo/");
     * ```
     *
     * @param string $staticBaseUri
     * @return \Phalcon\Url\UrlInterface
     */
    public function setStaticBaseUri(string $staticBaseUri): UrlInterface {}

    /**
     * Generates a local path
     *
     * @param string $path
     * @return string
     */
    public function path(string $path = null): string {}

}
