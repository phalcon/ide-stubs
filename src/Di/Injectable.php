<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use stdClass;
use Phalcon\Di\Di;
use Phalcon\Session\BagInterface;

/**
 * This class allows to access services in the services container by just only
 * accessing a public property with the same name of a registered service
 *
 * @property \Phalcon\Mvc\Dispatcher|\Phalcon\Mvc\DispatcherInterface $dispatcher
 * @property \Phalcon\Mvc\Router|\Phalcon\Mvc\RouterInterface $router
 * @property \Phalcon\Mvc\Url|\Phalcon\Mvc\Url\UrlInterface $url
 * @property \Phalcon\Http\Request|\Phalcon\Http\RequestInterface $request
 * @property \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface $response
 * @property \Phalcon\Http\Response\Cookies|\Phalcon\Http\Response\CookiesInterface $cookies
 * @property \Phalcon\Filter\Filter $filter
 * @property \Phalcon\Flash\Direct $flash
 * @property \Phalcon\Flash\Session $flashSession
 * @property \Phalcon\Session\ManagerInterface $session
 * @property \Phalcon\Events\Manager|\Phalcon\Events\ManagerInterface $eventsManager
 * @property \Phalcon\Db\Adapter\AdapterInterface $db
 * @property \Phalcon\Encryption\Security $security
 * @property \Phalcon\Encryption\Crypt|\Phalcon\Encryption\Crypt\CryptInterface $crypt
 * @property \Phalcon\Html\TagFactory $tag
 * @property \Phalcon\Html\Escaper|\Phalcon\Html\Escaper\EscaperInterface $escaper
 * @property \Phalcon\Annotations\Adapter\Memory|\Phalcon\Annotations\Adapter $annotations
 * @property \Phalcon\Mvc\Model\Manager|\Phalcon\Mvc\Model\ManagerInterface $modelsManager
 * @property \Phalcon\Mvc\Model\MetaData\Memory|\Phalcon\Mvc\Model\MetadataInterface $modelsMetadata
 * @property \Phalcon\Mvc\Model\Transaction\Manager|\Phalcon\Mvc\Model\Transaction\ManagerInterface $transactionManager
 * @property \Phalcon\Assets\Manager $assets
 * @property \Phalcon\Di\Di|\Phalcon\Di\Di\DiInterface $di
 * @property \Phalcon\Session\Bag|\Phalcon\Session\BagInterface $persistent
 * @property \Phalcon\Mvc\View|\Phalcon\Mvc\ViewInterface $view
 */
abstract class Injectable extends stdClass implements \Phalcon\Di\InjectionAwareInterface
{
    /**
     * Dependency Injector
     *
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * Magic method __get
     *
     * @param string $propertyName
     * @return mixed|null
     */
    public function __get(string $propertyName): mixed
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
    public function setDI(DiInterface $container): void
    {
    }
}
