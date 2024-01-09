<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine\Volt;

use Closure;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Di\InjectionAwareInterface;

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
    /**
     * @var bool
     */
    protected $autoescape = false;

    /**
     * @var int
     */
    protected $blockLevel = 0;

    /**
     * @var array|null
     *
     * TODO: Make array only?
     */
    protected $blocks;

    /**
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * @var string|null
     */
    protected $compiledTemplatePath;

    /**
     * @var string|null
     */
    protected $currentBlock = null;

    /**
     * @var string|null
     */
    protected $currentPath = null;

    /**
     * @var int
     */
    protected $exprLevel = 0;

    /**
     * @var bool
     */
    protected $extended = false;

    /**
     * @var array
     */
    protected $extensions = [];

    /**
     * @var array|bool
     *
     * TODO: Make it always array
     */
    protected $extendedBlocks;

    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @var int
     */
    protected $foreachLevel = 0;

    /**
     * @var array
     */
    protected $forElsePointers = [];

    /**
     * @var array
     */
    protected $functions = [];

    /**
     * @var int
     */
    protected $level = 0;

    /**
     * @var array
     */
    protected $loopPointers = [];

    /**
     * @var array
     */
    protected $macros = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * @var ViewBaseInterface|null
     */
    protected $view;

    /**
     * Phalcon\Mvc\View\Engine\Volt\Compiler
     *
     * @param ViewBaseInterface|null $view
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view = null)
    {
    }

    /**
     * Registers a Volt's extension
     *
     * @param mixed $extension *
     * @return Compiler
     */
    public function addExtension($extension): Compiler
    {
    }

    /**
     * Register a new filter in the compiler
     *
     * @param string $name
     * @param mixed $definition *
     * @return Compiler
     */
    public function addFilter(string $name, $definition): Compiler
    {
    }

    /**
     * Register a new function in the compiler
     *
     * @param string $name
     * @param mixed $definition *
     * @return Compiler
     */
    public function addFunction(string $name, $definition): Compiler
    {
    }

    /**
     * Resolves attribute reading
     *
     * @param array $expr *
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
     * @param bool $extendsMode *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return mixed
     */
    public function compile(string $templatePath, bool $extendsMode = false)
    {
    }

    /**
     * Compiles a "autoescape" statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode *
     * @return string
     */
    public function compileAutoEscape(array $statement, bool $extendsMode): string
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
     * @param bool $caseClause *
     * @return string
     */
    public function compileCase(array $statement, bool $caseClause = true): string
    {
    }

    /**
     * Compiles a "do" statement returning PHP code
     *
     * @param array $statement *
     * @return string
     */
    public function compileDo(array $statement): string
    {
    }

    /**
     * Compiles a {% raw %}`{{` `}}`{% endraw %} statement returning PHP code
     *
     * @param array $statement *
     * @return string
     */
    public function compileEcho(array $statement): string
    {
    }

    /**
     * Compiles a "elseif" statement returning PHP code
     *
     * @param array $statement *
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
     * @param string $path
     * @param string $compiledPath
     * @param bool $extendsMode *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string|array
     */
    public function compileFile(string $path, string $compiledPath, bool $extendsMode = false)
    {
    }

    /**
     * Compiles a "foreach" intermediate code representation into plain PHP code
     *
     * @param array $statement
     * @param bool $extendsMode *
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
     * @param bool $extendsMode *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string
     */
    public function compileIf(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a 'include' statement returning PHP code
     *
     * @param array $statement *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string
     */
    public function compileInclude(array $statement): string
    {
    }

    /**
     * Compiles macros
     *
     * @param array $statement
     * @param bool $extendsMode *
     * @return string
     */
    public function compileMacro(array $statement, bool $extendsMode): string
    {
    }

    /**
     * Compiles a "return" statement returning PHP code
     *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string
     * @param array $statement
     */
    public function compileReturn(array $statement): string
    {
    }

    /**
     * Compiles a "set" statement returning PHP code. The method accepts an
     * array produced by the Volt parser and creates the `set` statement in PHP.
     * This method is not particularly useful in development, since it requires
     * advanced knowledge of the Volt parser.
     *
     * ```php
     * <?php
     *
     * use Phalcon\Mvc\View\Engine\Volt\Compiler;
     *
     * $compiler = new Compiler();
     *
     * // {% set a = ['first': 1] %}
     *
     * $source = [
     *     "type" => 306,
     *     "assignments" => [
     *         [
     *             "variable" => [
     *                 "type" => 265,
     *                 "value" => "a",
     *                 "file" => "eval code",
     *                 "line" => 1
     *             ],
     *             "op" => 61,
     *             "expr" => [
     *                 "type" => 360,
     *                 "left" => [
     *                     [
     *                         "expr" => [
     *                             "type" => 258,
     *                             "value" => "1",
     *                             "file" => "eval code",
     *                             "line" => 1
     *                         ],
     *                         "name" => "first",
     *                         "file" => "eval code",
     *                         "line" => 1
     *                     ]
     *                 ],
     *                 "file" => "eval code",
     *                 "line" => 1
     *             ],
     *             "file" => "eval code",
     *             "line" => 1
     *         ]
     *     ]
     * ];
     *
     * echo $compiler->compileSet($source);
     * // <?php $a = ['first' => 1]; ?>";
     * ```
     *
     * @param array $statement
     *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
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
     * @param bool $extendsMode *
     * @return string
     */
    public function compileString(string $viewCode, bool $extendsMode = false): string
    {
    }

    /**
     * Compiles a 'switch' statement returning PHP code
     *
     * @param array $statement
     * @param bool $extendsMode *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string
     */
    public function compileSwitch(array $statement, bool $extendsMode = false): string
    {
    }

    /**
     * Resolves an expression node in an AST volt tree
     *
     * @param array $expr
     * @param bool  $doubleQuotes
     *
     * @return string
     */
    final public function expression(array $expr, bool $doubleQuotes = false): string
    {
    }

    /**
     * Fires an event to registered extensions
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    final public function fireExtensionEvent(string $name, array $arguments = [])
    {
    }

    /**
     * Resolves function intermediate code into PHP function calls
     *
     * @param array $expr
     * @param bool  $doubleQuotes
     *
     * @throws \Phalcon\Mvc\View\Engine\Volt\Exception
     * @return string
     */
    public function functionCall(array $expr, bool $doubleQuotes = false): string
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
     * @param string $option *
     * @return string|null
     */
    public function getOption(string $option): string|null
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
     * @param string $viewCode *
     * @return array
     */
    public function parse(string $viewCode): array
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
    public function setDI(\Phalcon\Di\DiInterface $container): void
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

    /**
     * @param array $expression
     * @return bool
     */
    private function isTagFactory(array $expression): bool
    {
    }
}
