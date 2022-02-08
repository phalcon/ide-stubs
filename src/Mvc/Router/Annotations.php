<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Router;

use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Router;
use Phalcon\Annotations\Annotation;

/**
 * Phalcon\Mvc\Router\Annotations
 *
 * A router that reads routes annotations from classes/resources
 *
 * ```php
 * use Phalcon\Mvc\Router\Annotations;
 *
 * $di->setShared(
 *     "router",
 *     function() {
 *         // Use the annotations router
 *         $router = new Annotations(false);
 *
 *         // This will do the same as above but only if the handled uri starts with /robots
 *         $router->addResource("Robots", "/robots");
 *
 *         return $router;
 *     }
 * );
 * ```
 */
class Annotations extends Router
{
    /**
     * @var string
     */
    protected $actionSuffix = 'Action';

    /**
     * @var callable|string|null
     */
    protected $actionPreformatCallback = null;

    /**
     * @var string
     */
    protected $controllerSuffix = 'Controller';

    /**
     * @var array
     */
    protected $handlers = [];

    /**
     * @var string
     */
    protected $routePrefix = '';

    /**
     * Adds a resource to the annotations handler
     * A resource is a class that contains routing annotations
     * The class is located in a module
     *
     * @param string $module
     * @param string $handler
     * @param string $prefix
     * @return Annotations
     */
    public function addModuleResource(string $module, string $handler, string $prefix = null): Annotations
    {
    }

    /**
     * Adds a resource to the annotations handler
     * A resource is a class that contains routing annotations
     *
     * @param string $handler
     * @param string $prefix
     * @return Annotations
     */
    public function addResource(string $handler, string $prefix = null): Annotations
    {
    }

    /**
     * Return the registered resources
     *
     * @return array
     */
    public function getResources(): array
    {
    }

    /**
     * Produce the routing parameters from the rewrite information
     *
     * @param string $uri
     * @return void
     */
    public function handle(string $uri): void
    {
    }

    /**
     * Checks for annotations in the public methods of the controller
     *
     * @param string $module
     * @param string $namespaceName
     * @param string $controller
     * @param string $action
     * @param \Phalcon\Annotations\Annotation $annotation
     * @return void
     */
    public function processActionAnnotation(string $module, string $namespaceName, string $controller, string $action, \Phalcon\Annotations\Annotation $annotation): void
    {
    }

    /**
     * Checks for annotations in the controller docblock
     *
     * @param string $handler
     * @param \Phalcon\Annotations\Annotation $annotation
     */
    public function processControllerAnnotation(string $handler, \Phalcon\Annotations\Annotation $annotation)
    {
    }

    /**
     * Changes the action method suffix
     *
     * @param string $actionSuffix
     */
    public function setActionSuffix(string $actionSuffix)
    {
    }

    /**
     * Sets the action preformat callback
     * $action here already without suffix 'Action'
     *
     * ```php
     * // Array as callback
     * $annotationRouter->setActionPreformatCallback(
     *      [
     *          new Uncamelize(),
     *          '__invoke'
     *      ]
     *  );
     *
     * // Function as callback
     * $annotationRouter->setActionPreformatCallback(
     *     function ($action) {
     *         return $action;
     *     }
     * );
     *
     * // String as callback
     * $annotationRouter->setActionPreformatCallback('strtolower');
     *
     * // If empty method constructor called [null], sets uncamelize with - delimiter
     * $annotationRouter->setActionPreformatCallback();
     * ```
     *
     * @param callable|string|null $callback
     */
    public function setActionPreformatCallback($callback = null)
    {
    }

    /**
     * @return callable|string|null
     */
    public function getActionPreformatCallback()
    {
    }

    /**
     * Changes the controller class suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix)
    {
    }
}
