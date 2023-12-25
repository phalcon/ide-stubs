<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Autoload;

use Phalcon\Events\AbstractEventsAware;

/**
 * The Phalcon Autoloader provides an easy way to automatically load classes
 * (namespaced or not) as well as files. It also features extension loading,
 * allowing the user to autoload files with different extensions than .php.
 */
class Loader extends AbstractEventsAware
{
    /**
     * @var string|null
     */
    protected $checkedPath = null;

    /**
     * @var array
     */
    protected $classes = [];

    /**
     * @var array
     */
    protected $debug = [];

    /**
     * @var array
     */
    protected $directories = [];

    /**
     * @var array
     */
    protected $extensions = [];

    /**
     * @var string|callable
     */
    protected $fileCheckingCallback = 'is_file';

    /**
     * @var array
     */
    protected $files = [];

    /**
     * @var string|null
     */
    protected $foundPath = null;

    /**
     * @var bool
     */
    protected $isDebug = false;

    /**
     * @var bool
     */
    protected $isRegistered = false;

    /**
     * @var array
     */
    protected $namespaces = [];

    /**
     * Loader constructor.
     *
     * @param bool $isDebug
     */
    public function __construct(bool $isDebug = false)
    {
    }

    /**
     * Adds a class to the internal collection for the mapping
     *
     * @param string $name
     * @param string $file
     *
     * @return Loader
     */
    public function addClass(string $name, string $file): Loader
    {
    }

    /**
     * Adds a directory for the loaded files
     *
     * @param string $directory
     *
     * @return Loader
     */
    public function addDirectory(string $directory): Loader
    {
    }

    /**
     * Adds an extension for the loaded files
     *
     * @param string $extension
     *
     * @return Loader
     */
    public function addExtension(string $extension): Loader
    {
    }

    /**
     * Adds a file to be added to the loader
     *
     * @param string $file
     *
     * @return Loader
     */
    public function addFile(string $file): Loader
    {
    }

    /**
     * @param string $name
     * @param mixed  $directories
     * @param bool   $prepend
     *
     * @return Loader
     * @throws Exception
     */
    public function addNamespace(string $name, $directories, bool $prepend = false): Loader
    {
    }

    /**
     * Autoloads the registered classes
     *
     * @param string $className
     *
     * @return bool
     */
    public function autoload(string $className): bool
    {
    }

    /**
     * Get the path the loader is checking for a path
     *
     * @return string|null
     */
    public function getCheckedPath(): string|null
    {
    }

    /**
     * Returns the class-map currently registered in the autoloader
     *
     * @return string[]
     */
    public function getClasses(): array
    {
    }

    /**
     * Returns debug information collected
     *
     * @return string[]
     */
    public function getDebug(): array
    {
    }

    /**
     * Returns the directories currently registered in the autoloader
     *
     * @return string[]
     */
    public function getDirectories(): array
    {
    }

    /**
     * Returns the file extensions registered in the loader
     *
     * @return string[]
     */
    public function getExtensions(): array
    {
    }

    /**
     * Returns the files currently registered in the autoloader
     *
     * @return string[]
     */
    public function getFiles(): array
    {
    }

    /**
     * Get the path when a class was found
     *
     * @return string|null
     */
    public function getFoundPath(): string|null
    {
    }

    /**
     * Returns the namespaces currently registered in the autoloader
     *
     * @return string[]
     */
    public function getNamespaces(): array
    {
    }

    /**
     * Checks if a file exists and then adds the file by doing virtual require
     *
     * @return void
     */
    public function loadFiles(): void
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
     * @param bool  $merge
     *
     * @return Loader
     */
    public function setClasses(array $classes, bool $merge = false): Loader
    {
    }

    /**
     * Register directories in which "not found" classes could be found
     *
     * @param array $directories
     * @param bool  $merge
     *
     * @return Loader
     */
    public function setDirectories(array $directories, bool $merge = false): Loader
    {
    }

    /**
     * Sets an array of file extensions that the loader must try in each attempt
     * to locate the file
     *
     * @param array $extensions
     * @param bool  $merge
     *
     * @return Loader
     */
    public function setExtensions(array $extensions, bool $merge = false): Loader
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
     * @param string|callable|null $method
     *
     * @return Loader
     * @throws Exception
     */
    public function setFileCheckingCallback($method = null): Loader
    {
    }

    /**
     * Registers files that are "non-classes" hence need a "require". This is
     * very useful for including files that only have functions
     *
     * @param array $files
     * @param bool  $merge
     *
     * @return Loader
     */
    public function setFiles(array $files, bool $merge = false): Loader
    {
    }

    /**
     * Register namespaces and their related directories
     *
     * @param array $namespaces
     * @param bool  $merge
     *
     * @return Loader
     */
    public function setNamespaces(array $namespaces, bool $merge = false): Loader
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
     * returns isRegister
     *
     * @return bool
     */
    public function isRegistered(): bool
    {
    }

    /**
     * If the file exists, require it and return true; false otherwise
     *
     * @param string $file The file to require
     *
     * @return bool
     */
    protected function requireFile(string $file): bool
    {
    }

    /**
     * Adds a debugging message in the collection
     *
     * @param string $message
     * @return void
     */
    private function addDebug(string $message): void
    {
    }

    /**
     * Traverses a collection and adds elements to it using the relevant
     * class method
     *
     * @param array  $collection
     * @param string $collectionName
     * @param string $method
     * @param bool   $merge
     *
     * @return Loader
     */
    private function addToCollection(array $collection, string $collectionName, string $method, bool $merge = false): Loader
    {
    }

    /**
     * Checks the registered classes to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @param string $className
     *
     * @return bool
     */
    private function autoloadCheckClasses(string $className): bool
    {
    }

    /**
     * Checks the registered directories to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @param array  $directories
     * @param string $className
     * @param bool   $isDirectory
     *
     * @return bool
     */
    private function autoloadCheckDirectories(array $directories, string $className, bool $isDirectory = false): bool
    {
    }

    /**
     * Checks the registered namespaces to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @param string $className
     *
     * @return bool
     */
    private function autoloadCheckNamespaces(string $className): bool
    {
    }

    /**
     * Checks if the directories is an array or a string and throws an exception
     * if not. It converts the string to an array and then traverses the array
     * to normalize the directories with the proper directory separator at the
     * end
     *
     * @param mixed  $directories
     * @param string $dirSeparator
     *
     * @return array<string, string>
     * @throws Exception
     */
    private function checkDirectories($directories, string $dirSeparator): array
    {
    }
}
