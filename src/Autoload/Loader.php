<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Autoload;

use Phalcon\Autoload\Exceptions\LoaderDirectoriesNotArray;
use Phalcon\Autoload\Exceptions\LoaderMethodNotCallable;
use Phalcon\Contracts\Autoload\AutoloadTypes;
use Phalcon\Events\Exception as EventsException;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;

/**
 * The Phalcon Autoloader provides an easy way to automatically load classes
 * (namespaced or not) as well as files. It also features extension loading,
 * allowing the user to autoload files with different extensions than .php.
 *
 * @phpstan-import-type autoload_namespaces from AutoloadTypes
 * @phpstan-import-type autoload_strings from AutoloadTypes
 */
class Loader
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


    protected ?string $checkedPath = null;

    /**
     * @var autoload_strings
     */
    protected array $classes = [];

    /**
     * @var array<int, string>
     */
    protected array $debug = [];

    /**
     * @var autoload_strings
     */
    protected array $directories = [];

    /**
     * @var autoload_strings
     */
    protected array $extensions = [];

    /**
     * Always holds a callable. The setter accepts a callable or a callable
     * string and rejects anything else.
     *
     * @var callable
     */
    protected $fileCheckingCallback = 'is_file';

    /**
     * @var autoload_strings
     */
    protected array $files = [];

    protected ?string $foundPath = null;

    protected bool $isDebug = false;

    protected bool $isRegistered = false;

    /**
     * @var autoload_namespaces
     */
    protected array $namespaces = [];

    protected int $nestingLevel = 0;

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
     * @return static
     */
    public function addClass(string $name, string $file): static
    {
    }

    /**
     * Adds a directory for the loaded files
     *
     * @param string $directory
     * @return static
     */
    public function addDirectory(string $directory): static
    {
    }

    /**
     * Adds an extension for the loaded files
     *
     * @param string $extension
     * @return static
     */
    public function addExtension(string $extension): static
    {
    }

    /**
     * Adds a file to be added to the loader
     *
     * @param string $file
     * @return static
     */
    public function addFile(string $file): static
    {
    }

    /**
     * @param autoload_strings|string $directories
     * @param string $name
     * @param bool $prepend
     * @return static
     */
    public function addNamespace(string $name, $directories, bool $prepend = false): static
    {
    }

    /**
     * Autoloads the registered classes
     *
     * @throws EventsException
     * @param string $className
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
     * @return autoload_namespaces
     */
    public function getNamespaces(): array
    {
    }

    /**
     * Returns isRegistered
     *
     * @return bool
     */
    public function isRegistered(): bool
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
     * @throws EventsException
     * @param bool $prepend
     * @return static
     */
    public function register(bool $prepend = false): static
    {
    }

    /**
     * Register classes and their locations
     *
     * @param autoload_strings $classes
     * @param bool $merge
     * @return static
     */
    public function setClasses(array $classes, bool $merge = false): static
    {
    }

    /**
     * Register directories in which "not found" classes could be found
     *
     * @param autoload_strings $directories
     * @param bool  $merge
     *
     * @return static
     */
    public function setDirectories(array $directories, bool $merge = false): static
    {
    }

    /**
     * Sets an array of file extensions that the loader must try in each attempt
     * to locate the file
     *
     * @param autoload_strings $extensions
     * @param bool $merge
     * @return static
     */
    public function setExtensions(array $extensions, bool $merge = false): static
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
     * @param callable|string|null $method
     *
     * @throws Exception
     * @return static
     */
    public function setFileCheckingCallback($method = null): static
    {
    }

    /**
     * Registers files that are "non-classes" hence need a "require". This is
     * very useful for including files that only have functions
     *
     * @param autoload_strings $files
     * @param bool $merge
     * @return static
     */
    public function setFiles(array $files, bool $merge = false): static
    {
    }

    /**
     * Register namespaces and their related directories
     *
     * @param autoload_namespaces $namespaces
     * @param bool $merge
     * @return static
     */
    public function setNamespaces(array $namespaces, bool $merge = false): static
    {
    }

    /**
     * Unregister the autoload method
     *
     * @return static
     */
    public function unregister(): static
    {
    }

    /**
     * If the file exists, require it and return true; false otherwise
     *
     * @throws EventsException
     * @param string $file
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
     * @param autoload_strings $collection
     * @param string $collectionName
     * @param string $method
     * @param bool $merge
     * @return static
     */
    private function addToCollection(array $collection, string $collectionName, string $method, bool $merge = false): static
    {
    }

    /**
     * Checks the registered classes to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @throws EventsException
     * @param string $className
     * @return bool
     */
    private function autoloadCheckClasses(string $className): bool
    {
    }

    /**
     * Checks the registered directories to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @param autoload_strings $directories
     *
     * @throws EventsException
     * @param string $className
     * @param bool $isDirectory
     * @return bool
     */
    private function autoloadCheckDirectories(array $directories, string $className, bool $isDirectory = false): bool
    {
    }

    /**
     * Checks the registered namespaces to find the class. Includes the file if
     * found and returns true; false otherwise
     *
     * @throws EventsException
     * @param string $className
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
     * @param mixed $directories
     *
     * @return autoload_strings
     * @param string $dirSeparator
     * @param string $name
     */
    private function checkDirectories($directories, string $dirSeparator, string $name = ''): array
    {
    }

    /**
     * @param bool $prepend
     * @return bool
     */
    private function registerAutoload(bool $prepend): bool
    {
    }
}
