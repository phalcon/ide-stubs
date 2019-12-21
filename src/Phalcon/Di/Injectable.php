<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use Phalcon\Annotations\Adapter;
use Phalcon\Assets\Manager;
use Phalcon\Crypt;
use Phalcon\CryptInterface;
use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Di;
use Phalcon\Escaper;
use Phalcon\Escaper\EscaperInterface;
use Phalcon\Filter;
use Phalcon\Flash\Direct;
use Phalcon\Flash\Session;
use Phalcon\Http\Request;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\Response;
use Phalcon\Http\Response\Cookies;
use Phalcon\Http\Response\CookiesInterface;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\DispatcherInterface;
use Phalcon\Mvc\Model\MetaData\Memory;
use Phalcon\Mvc\Model\MetadataInterface;
use Phalcon\Mvc\Model\Transaction\ManagerInterface;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\RouterInterface;
use Phalcon\Mvc\View;
use Phalcon\Mvc\ViewInterface;
use Phalcon\Security;
use Phalcon\Session\Bag;
use Phalcon\Session\BagInterface;
use Phalcon\Tag;
use Phalcon\Url;
use Phalcon\Url\UrlInterface;

/**
 * This class allows to access services in the services container by just only
 * accessing a public property with the same name of a registered service
 *
 * @property Dispatcher|DispatcherInterface $dispatcher
 * @property Router|RouterInterface $router
 * @property Url|UrlInterface $url
 * @property Request|RequestInterface $request
 * @property Response|ResponseInterface $response
 * @property Cookies|CookiesInterface $cookies
 * @property Filter $filter
 * @property Direct $flash
 * @property Session $flashSession
 * @property \Phalcon\Session\ManagerInterface $session
 * @property \Phalcon\Events\Manager|\Phalcon\Events\ManagerInterface $eventsManager
 * @property AdapterInterface $db
 * @property Security $security
 * @property Crypt|CryptInterface $crypt
 * @property Tag $tag
 * @property Escaper|EscaperInterface $escaper
 * @property \Phalcon\Annotations\Adapter\Memory|Adapter $annotations
 * @property \Phalcon\Mvc\Model\Manager|\Phalcon\Mvc\Model\ManagerInterface $modelsManager
 * @property Memory|MetadataInterface $modelsMetadata
 * @property \Phalcon\Mvc\Model\Transaction\Manager|ManagerInterface $transactionManager
 * @property Manager $assets
 * @property Di|DiInterface $di
 * @property Bag|BagInterface $persistent
 * @property View|ViewInterface $view
 */
abstract class Injectable implements InjectionAwareInterface
{
    /**
     * Dependency Injector
     *
     * @var DiInterface
     */
    protected $container;


    /**
     * Magic method __get
     *
     * @param string $propertyName
     * @return mixed|null
     */
    public function __get(string $propertyName)
    {
    }

    /**
     * Magic method __isset
     *
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool
    {
    }

    /**
     * Returns the internal dependency injector
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param DiInterface $container
     * @return void
     */
    public function setDI(DiInterface $container)
    {
    }
}
