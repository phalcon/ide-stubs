<?php

namespace Phalcon;

use Phalcon\DiInterface;
use Phalcon\UrlInterface;
use Phalcon\Url\Exception;
use Phalcon\Mvc\RouterInterface;
use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Di\InjectionAwareInterface;

/**
 * Phalcon\Url
 *
 * This components helps in the generation of: URIs, URLs and Paths
 *
 *<code>
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
 *</code>
 */
class Url implements UrlInterface, InjectionAwareInterface
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
	 *<code>
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
	 *</code>
	 */
	public function get($uri = null, $args = null, bool $local = null, $baseUri = null) : string
	{
	}

	/**
	 * Returns the base path
	 */
	public function getBasePath() : string
	{
	}

	/**
	 * Returns the prefix for all the generated urls. By default /
	 */
	public function getBaseUri() : string
	{
	}

	/**
	 * Returns the DependencyInjector container
	 */
	public function getDI() : DiInterface
	{
	}

	/**
	 * Generates a URL for a static resource
	 *
	 *<code>
	 * // Generate a URL for a static resource
	 * echo $url->getStatic("img/logo.png");
	 *
	 * // Generate a URL for a static predefined route
	 * echo $url->getStatic(
	 *     [
	 *         "for" => "logo-cdn",
	 *     ]
	 * );
	 *</code>
	 */
	public function getStatic($uri = null) : string
	{
	}

	/**
	 * Returns the prefix for all the generated static urls. By default /
	 */
	public function getStaticBaseUri() : string
	{
	}

	/**
	 * Sets a base path for all the generated paths
	 *
	 *<code>
	 * $url->setBasePath("/var/www/htdocs/");
	 *</code>
	 */
	public function setBasePath(string $basePath) : UrlInterface
	{
	}

	/**
	 * Sets a prefix for all the URIs to be generated
	 *
	 *<code>
	 * $url->setBaseUri("/invo/");
	 *
	 * $url->setBaseUri("/invo/index.php/");
	 *</code>
	 */
	public function setBaseUri(string $baseUri) : UrlInterface
	{
	}

	/**
	 * Sets the DependencyInjector container
	 */
	public function setDI(DiInterface $dependencyInjector)
	{
	}

	/**
	 * Sets a prefix for all static URLs generated
	 *
	 *<code>
	 * $url->setStaticBaseUri("/invo/");
	 *</code>
	 */
	public function setStaticBaseUri(string $staticBaseUri) : UrlInterface
	{
	}

	/**
	 * Generates a local path
	 */
	public function path(string $path = null) : string
	{
	}
}
