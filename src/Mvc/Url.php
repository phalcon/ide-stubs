<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Mvc\RouterInterface;
use Phalcon\Mvc\Url\Exception;
use Phalcon\Mvc\Url\Exceptions\MissingRouteName;
use Phalcon\Mvc\Url\Exceptions\RouteNotFound;
use Phalcon\Mvc\Url\Exceptions\RouterServiceUnavailable;
use Phalcon\Mvc\Url\UrlInterface;

/**
 * This component helps in the generation of: URIs, URLs and Paths
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
class Url extends AbstractInjectionAware implements \Phalcon\Mvc\Url\UrlInterface
{
    /**
     * @var null | string
     */
    protected $basePath = null;

    /**
     * @var null | string
     */
    protected $baseUri = null;

    /**
     * @var RouterInterface | null
     */
    protected $router = null;

    /**
     * @var null | string
     */
    protected $staticBaseUri = null;

    /**
     * @param \Phalcon\Mvc\RouterInterface|null $router
     */
    public function __construct(?\Phalcon\Mvc\RouterInterface $router = null)
    {
    }

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
     *     "https://phalcon.io/",
     *     null,
     *     false
     * );
     *
     * // Override existing query string keys instead of appending duplicates.
     * // Without the fifth argument: "http://example.com?page=1&page=5".
     * // With it set to true:        "http://example.com?page=5".
     * echo $url->get(
     *     "http://example.com?page=1",
     *     ["page" => 5],
     *     null,
     *     null,
     *     true
     * );
     * ```
     *
     * @param array|string $uri = [
     *     'for' => '',
     * ]
     * @param mixed $arguments
     * @param bool|null $local
     * @param mixed $baseUri
     * @param bool $replaceArgs
     * @return string
     */
    public function get($uri = null, $arguments = null, ?bool $local = null, $baseUri = null, bool $replaceArgs = false): string
    {
    }

    /**
     * Returns the base path
     *
     * @return string|null
     */
    public function getBasePath(): string|null
    {
    }

    /**
     * Returns the prefix for all the generated urls. By default /
     *
     * @return string
     */
    public function getBaseUri(): string
    {
    }

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
     * @param array|string $uri = [
     *     'for' => ''
     * ]
     * @return string
     */
    public function getStatic($uri = null): string
    {
    }

    /**
     * Returns the prefix for all the generated static urls. By default /
     *
     * @return string
     */
    public function getStaticBaseUri(): string
    {
    }

    /**
     * Generates a local path
     *
     * @param string|null $path
     * @return string
     */
    public function path(?string $path = null): string
    {
    }

    /**
     * Sets a base path for all the generated paths
     *
     * ```php
     * $url->setBasePath("/var/www/htdocs/");
     * ```
     *
     * @param string $basePath
     * @return UrlInterface
     */
    public function setBasePath(string $basePath): UrlInterface
    {
    }

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
     * @return UrlInterface
     */
    public function setBaseUri(string $baseUri): UrlInterface
    {
    }

    /**
     * Sets a prefix for all static URLs generated
     *
     * ```php
     * $url->setStaticBaseUri("/invo/");
     * ```
     *
     * @param string $staticBaseUri
     * @return UrlInterface
     */
    public function setStaticBaseUri(string $staticBaseUri): UrlInterface
    {
    }
}
