<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Router;

use Phalcon\Mvc\Router;

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

    protected $actionSuffix = 'Action';


    protected $controllerSuffix = 'Controller';


    protected $handlers = array();


    protected $routePrefix;


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
    public function handle(string $uri)
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
     */
    public function processActionAnnotation(string $module, string $namespaceName, string $controller, string $action, \Phalcon\Annotations\Annotation $annotation)
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
     * Changes the controller class suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix)
    {
    }
}
