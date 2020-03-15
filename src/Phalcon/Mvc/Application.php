<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Application\AbstractApplication;

/**
 * Phalcon\Mvc\Application
 *
 * This component encapsulates all the complex operations behind instantiating
 * every component needed and integrating it with the rest to allow the MVC
 * pattern to operate as desired.
 *
 * ```php
 * use Phalcon\Mvc\Application;
 *
 * class MyApp extends Application
 * {
 *     /
 * Register the services here to make them general or register
 * in the ModuleDefinition to make them module-specific
 * \/
 *     protected function registerServices()
 *     {
 *
 *     }
 *
 *     /
 * This method registers all the modules in the application
 * \/
 *     public function main()
 *     {
 *         $this->registerModules(
 *             [
 *                 "frontend" => [
 *                     "className" => "Multiple\\Frontend\\Module",
 *                     "path"      => "../apps/frontend/Module.php",
 *                 ],
 *                 "backend" => [
 *                     "className" => "Multiple\\Backend\\Module",
 *                     "path"      => "../apps/backend/Module.php",
 *                 ],
 *             ]
 *         );
 *     }
 * }
 *
 * $application = new MyApp();
 *
 * $application->main();
 * ```
 */
class Application extends AbstractApplication
{

    protected $implicitView = true;


    protected $sendCookies = true;


    protected $sendHeaders = true;


    /**
     * Handles a MVC request
     *
     * @param string $uri
     * @return mixed
     */
    public function handle(string $uri)
    {
    }

    /**
     * Enables or disables sending cookies by each request handling
     *
     * @param bool $sendCookies
     * @return Application
     */
    public function sendCookiesOnHandleRequest(bool $sendCookies): Application
    {
    }

    /**
     * Enables or disables sending headers by each request handling
     *
     * @param bool $sendHeaders
     * @return Application
     */
    public function sendHeadersOnHandleRequest(bool $sendHeaders): Application
    {
    }

    /**
     * By default. The view is implicitly buffering all the output
     * You can full disable the view component using this method
     *
     * @param bool $implicitView
     * @return Application
     */
    public function useImplicitView(bool $implicitView): Application
    {
    }
}
