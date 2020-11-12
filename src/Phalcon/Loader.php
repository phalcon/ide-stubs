<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Phalcon\Loader\Exception;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\EventsAwareInterface;

/**
 * This component helps to load your project classes automatically based on some
 * conventions
 *
 * ```php
 * use Phalcon\Loader;
 *
 * // Creates the autoloader
 * $loader = new Loader();
 *
 * // Register some namespaces
 * $loader->registerNamespaces(
 *     [
 *         "Example\\Base"    => "vendor/example/base/",
 *         "Example\\Adapter" => "vendor/example/adapter/",
 *         "Example"          => "vendor/example/",
 *     ]
 * );
 *
 * // Register autoloader
 * $loader->register();
 *
 * // Requiring this class will automatically include file vendor/example/adapter/Some.php
 * $adapter = new \Example\Adapter\Some();
 * ```
 */
class Loader implements \Phalcon\Events\EventsAwareInterface
{

    protected $checkedPath = null;

    /**
     * @var array
     */
    protected $classes = array();

    /**
     * @var array
     */
    protected $directories = array();


    protected $eventsManager = null;

    /**
     * @var array
     */
    protected $extensions = array('php');


    protected $fileCheckingCallback = 'is_file';

    /**
     * @var array
     */
    protected $files = array();

    /**
     * @var bool
     */
    protected $foundPath = null;

    /**
     * @var array
     */
    protected $namespaces = array();

    /**
     * @var bool
     */
    protected $registered = false;


    /**
     * Autoloads the registered classes
     *
     * @param string $className
     * @return bool
     */
    public function autoLoad(string $className): bool
    {
    }

    /**
     * Get the path the loader is checking for a path
     *
     * @return string
     */
    public function getCheckedPath(): string
    {
    }

    /**
     * Returns the class-map currently registered in the autoloader
     *
     * @return array
     */
    public function getClasses(): array
    {
    }

    /**
     * Returns the directories currently registered in the autoloader
     *
     * @return array
     */
    public function getDirs(): array
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Returns the file extensions registered in the loader
     *
     * @return array
     */
    public function getExtensions(): array
    {
    }

    /**
     * Returns the files currently registered in the autoloader
     *
     * @return array
     */
    public function getFiles(): array
    {
    }

    /**
     * Get the path when a class was found
     *
     * @return string
     */
    public function getFoundPath(): string
    {
    }

    /**
     * Returns the namespaces currently registered in the autoloader
     *
     * @return array
     */
    public function getNamespaces(): array
    {
    }

    /**
     * Checks if a file exists and then adds the file by doing virtual require
     *
     * @return void
     */
    public function loadFiles()
    {
    }

    /**
     * Register the autoload method
     *
     * @param bool $prepend
     * @return Loader
     */
    public function register(bool $prepend = false): Loader
    {
    }

    /**
     * Register classes and their locations
     *
     * @param array $classes
     * @param bool $merge
     * @return Loader
     */
    public function registerClasses(array $classes, bool $merge = false): Loader
    {
    }

    /**
     * Register directories in which "not found" classes could be found
     *
     * @param array $directories
     * @param bool $merge
     * @return Loader
     */
    public function registerDirs(array $directories, bool $merge = false): Loader
    {
    }

    /**
     * Registers files that are "non-classes" hence need a "require". This is
     * very useful for including files that only have functions
     *
     * @param array $files
     * @param bool $merge
     * @return Loader
     */
    public function registerFiles(array $files, bool $merge = false): Loader
    {
    }

    /**
     * Register namespaces and their related directories
     *
     * @param array $namespaces
     * @param bool $merge
     * @return Loader
     */
    public function registerNamespaces(array $namespaces, bool $merge = false): Loader
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Sets an array of file extensions that the loader must try in each attempt
     * to locate the file
     *
     * @param array $extensions
     * @return Loader
     */
    public function setExtensions(array $extensions): Loader
    {
    }

    /**
     * Sets the file check callback.
     *
     * ```php
     * // Default behavior.
     * $loader->setFileCheckingCallback("is_file");
     *
     * // Faster than `is_file()`, but implies some issues if
     * // the file is removed from the filesystem.
     * $loader->setFileCheckingCallback("stream_resolve_include_path");
     *
     * // Do not check file existence.
     * $loader->setFileCheckingCallback(null);
     * ```
     *
     * @param mixed $callback
     * @return Loader
     */
    public function setFileCheckingCallback($callback = null): Loader
    {
    }

    /**
     * Unregister the autoload method
     *
     * @return Loader
     */
    public function unregister(): Loader
    {
    }

    /**
     * @param array $namespaceName
     * @return array
     */
    protected function prepareNamespace(array $namespaceName): array
    {
    }
}
