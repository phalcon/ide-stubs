<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine\Volt;

use Phalcon\Di\DiInterface;

/**
 * This class reads and compiles Volt templates into PHP plain code
 *
 * ```php
 * $compiler = new \Phalcon\Mvc\View\Engine\Volt\Compiler();
 *
 * $compiler->compile("views/partials/header.volt");
 *
 * require $compiler->getCompiledTemplatePath();
 * ```
 */
class Compiler implements \Phalcon\Di\InjectionAwareInterface
{

    protected $autoescape = false;


    protected $blockLevel = 0;


    protected $blocks;


    protected $container;


    protected $compiledTemplatePath;


    protected $currentBlock;


    protected $currentPath;


    protected $exprLevel = 0;


    protected $extended = false;


    protected $extensions;


    protected $extendedBlocks;


    protected $filters;


    protected $foreachLevel = 0;


    protected $forElsePointers;


    protected $functions;


    protected $level = 0;


    protected $loopPointers;


    protected $macros;


    protected $options;


    protected $prefix;


    protected $view;


    /**
     * Phalcon\Mvc\View\Engine\Volt\Compiler
     *
     * @param \Phalcon\Mvc\ViewBaseInterface $view
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view = null)
    {
    }

    /**
     * Registers a Volt's extension
     *
     * @param mixed $extension
     * @return Compiler
     */
    public function addExtension($extension): Compiler
    {
    }

    /**
     * Register a new filter in the compiler
     *
     * @param string $name
     * @param mixed $definition
     * @return Compiler
     */
    public function addFilter(string $name, $definition): Compiler
    {
    }

    /**
     * Register a new function in the compiler
     *
     * @param string $name
     * @param mixed $definition
     * @return Compiler
     */
    public function addFunction(string $name, $definition): Compiler
    {
    }

    /**
     * Resolves attribute reading
     *
     * @param array $expr
     * @return string
     */
    public function attributeReader(array $expr): string
    {
    }

    /**
     * Compiles a template into a file applying the compiler options
     * This method does not return the compiled path if the template was not compiled
     *
     * ```php
     * $compiler->compile("views/layouts/main.volt");
     *
     * require $compiler->getCompiledTemplatePath();
     * ```
     *
     * @param string $templatePath
     * @param bool $extendsMode
     */
    public function compile(string $templatePath, bool $extendsMode = false)
    {
    }

    /**
     * Compiles a "autoescape" statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileAutoEscape(array $statement, bool $extendsMode): string
    {
    }

    /**
     * Compiles a "cache" statement returning PHP code
     *
     * @deprecated Will be removed in 5.0
     * @todo Remove this in the next major version
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileCache(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles calls to macros
     *
     * @param array $statement
     * @param bool $extendsMode
     */
    public function compileCall(array $statement, bool $extendsMode)
    {
    }

    /**
     * Compiles a "case"/"default" clause returning PHP code
     *
     * @param array $statement
     * @param bool $caseClause
     * @return string
     */
    public function compileCase(array $statement, bool $caseClause = true): string
    {
    }

    /**
     * Compiles a "do" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileDo(array $statement): string
    {
    }

    /**
     * Compiles a {% raw %}`{{` `}}`{% endraw %} statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileEcho(array $statement): string
    {
    }

    /**
     * Compiles a "elseif" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileElseIf(array $statement): string
    {
    }

    /**
     * Compiles a template into a file forcing the destination path
     *
     * ```php
     * $compiler->compileFile(
     *     "views/layouts/main.volt",
     *     "views/layouts/main.volt.php"
     * );
     * ```
     *
     * @return string|array
     * @param string $path
     * @param string $compiledPath
     * @param bool $extendsMode
     */
    public function compileFile(string $path, string $compiledPath, bool $extendsMode = false)
    {
    }

    /**
     * Compiles a "foreach" intermediate code representation into plain PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileForeach(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Generates a 'forelse' PHP code
     *
     * @return string
     */
    public function compileForElse(): string
    {
    }

    /**
     * Compiles a 'if' statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileIf(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a 'include' statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileInclude(array $statement): string
    {
    }

    /**
     * Compiles macros
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileMacro(array $statement, bool $extendsMode): string
    {
    }

    /**
     * Compiles a "return" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileReturn(array $statement): string
    {
    }

    /**
     * Compiles a "set" statement returning PHP code
     *
     * @param array $statement
     * @return string
     */
    public function compileSet(array $statement): string
    {
    }

    /**
     * Compiles a template into a string
     *
     * ```php
     * echo $compiler->compileString({% raw %}'{{ "hello world" }}'{% endraw %});
     * ```
     *
     * @param string $viewCode
     * @param bool $extendsMode
     * @return string
     */
    public function compileString(string $viewCode, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a 'switch' statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode
     * @return string
     */
    public function compileSwitch(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Resolves an expression node in an AST volt tree
     *
     * @param array $expr
     * @return string
     */
    final public function expression(array $expr): string
    {
    }

    /**
     * Fires an event to registered extensions
     *
     * @param array $arguments
     * @return mixed
     * @param string $name
     */
    final public function fireExtensionEvent(string $name, $arguments = null)
    {
    }

    /**
     * Resolves function intermediate code into PHP function calls
     *
     * @param array $expr
     * @return string
     */
    public function functionCall(array $expr): string
    {
    }

    /**
     * Returns the path to the last compiled template
     *
     * @return string
     */
    public function getCompiledTemplatePath(): string
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
     * Returns the list of extensions registered in Volt
     *
     * @return array
     */
    public function getExtensions(): array
    {
    }

    /**
     * Register the user registered filters
     *
     * @return array
     */
    public function getFilters(): array
    {
    }

    /**
     * Register the user registered functions
     *
     * @return array
     */
    public function getFunctions(): array
    {
    }

    /**
     * Returns a compiler's option
     *
     * @return string
     * @param string $option
     */
    public function getOption(string $option)
    {
    }

    /**
     * Returns the compiler options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Returns the path that is currently being compiled
     *
     * @return string
     */
    public function getTemplatePath(): string
    {
    }

    /**
     * Return a unique prefix to be used as prefix for compiled variables and
     * contexts
     *
     * @return string
     */
    public function getUniquePrefix(): string
    {
    }

    /**
     * Parses a Volt template returning its intermediate representation
     *
     * ```php
     * print_r(
     *     $compiler->parse("{% raw %}{{ 3 + 2 }}{% endraw %}")
     * );
     * ```
     *
     * @return array
     * @param string $viewCode
     */
    public function parse(string $viewCode)
    {
    }

    /**
     * Resolves filter intermediate code into a valid PHP expression
     *
     * @param array $test
     * @param string $left
     * @return string
     */
    public function resolveTest(array $test, string $left): string
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Sets a single compiler option
     *
     * @param mixed $value
     * @param string $option
     */
    public function setOption(string $option, $value)
    {
    }

    /**
     * Sets the compiler options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Set a unique prefix to be used as prefix for compiled variables
     *
     * @param string $prefix
     * @return Compiler
     */
    public function setUniquePrefix(string $prefix): Compiler
    {
    }

    /**
     * Compiles a Volt source code returning a PHP plain version
     *
     * @param string $viewCode
     * @param bool $extendsMode
     * @return string
     */
    protected function compileSource(string $viewCode, bool $extendsMode = false): string
    {
    }

    /**
     * Gets the final path with VIEW
     *
     * @param string $path
     */
    protected function getFinalPath(string $path)
    {
    }

    /**
     * Resolves filter intermediate code into PHP function calls
     *
     * @param array $filter
     * @param string $left
     * @return string
     */
    final protected function resolveFilter(array $filter, string $left): string
    {
    }

    /**
     * Traverses a statement list compiling each of its nodes
     *
     * @param array $statements
     * @param bool $extendsMode
     * @return string
     */
    final protected function statementList(array $statements, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a block of statements
     *
     * @param array $statements
     * @return string|array
     */
    final protected function statementListOrExtends($statements)
    {
    }
}
