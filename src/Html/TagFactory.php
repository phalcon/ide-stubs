<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Html\Escaper;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Factory\AbstractFactory;

/**
 * ServiceLocator implementation for Tag helpers.
 *
 * Services are registered using the constructor using a key-value pair. The
 * key is the name of the tag helper, while the value is a callable that returns
 * the object.
 *
 * The class implements `__call()` to allow calling helper objects as methods.
 *
 * @property EscaperInterface $escaper
 * @property array            $services
 *
 * @method string a(string $href, string $text, array $attributes = [], bool $raw = false)
 * @method string base(string $href, array $attributes = [])
 * @method string body(array $attributes = [])
 * @method string button(string $text, array $attributes = [], bool $raw = false)
 * @method string close(string $tag, bool $raw = false)
 * @method string doctype(int $flag, string $delimiter)
 * @method string element(string $tag, string $text, array $attributes = [], bool $raw = false)
 * @method string form(array $attributes = [])
 * @method string img(string $src, array $attributes = [])
 * @method string inputCheckbox(string $name, string $value = null, array $attributes = [])
 * @method string inputColor(string $name, string $value = null, array $attributes = [])
 * @method string inputDate(string $name, string $value = null, array $attributes = [])
 * @method string inputDateTime(string $name, string $value = null, array $attributes = [])
 * @method string inputDateTimeLocal(string $name, string $value = null, array $attributes = [])
 * @method string inputEmail(string $name, string $value = null, array $attributes = [])
 * @method string inputFile(string $name, string $value = null, array $attributes = [])
 * @method string inputHidden(string $name, string $value = null, array $attributes = [])
 * @method string inputImage(string $name, string $value = null, array $attributes = [])
 * @method string inputInput(string $name, string $value = null, array $attributes = [])
 * @method string inputMonth(string $name, string $value = null, array $attributes = [])
 * @method string inputNumeric(string $name, string $value = null, array $attributes = [])
 * @method string inputPassword(string $name, string $value = null, array $attributes = [])
 * @method string inputRadio(string $name, string $value = null, array $attributes = [])
 * @method string inputRange(string $name, string $value = null, array $attributes = [])
 * @method string inputSearch(string $name, string $value = null, array $attributes = [])
 * @method string inputSelect(string $name, string $value = null, array $attributes = [])
 * @method string inputSubmit(string $name, string $value = null, array $attributes = [])
 * @method string inputTel(string $name, string $value = null, array $attributes = [])
 * @method string inputText(string $name, string $value = null, array $attributes = [])
 * @method string inputTextarea(string $name, string $value = null, array $attributes = [])
 * @method string inputTime(string $name, string $value = null, array $attributes = [])
 * @method string inputUrl(string $name, string $value = null, array $attributes = [])
 * @method string inputWeek(string $name, string $value = null, array $attributes = [])
 * @method string label(string $label, array $attributes = [], bool $raw = false)
 * @method string link(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method string meta(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method string ol(string $text, array $attributes = [], bool $raw = false)
 * @method string script(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method string style(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method string title(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method string ul(string $text, array $attributes = [], bool $raw = false)
 */
class TagFactory extends AbstractFactory
{
    /**
     * @var EscaperInterface
     */
    private $escaper;

    /**
     * @var array
     */
    protected $services = [];

    /**
     * TagFactory constructor.
     *
     * @param Escaper $escaper
     * @param array   $services
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, array $services = [])
    {
    }

    /**
     * Magic call to make the helper objects available as methods.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return false|mixed
     */
    public function __call(string $name, array $arguments)
    {
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Create a new instance of the object
     *
     * @param string $name
     *
     * @return mixed
     * @throws Exception
     */
    public function newInstance(string $name)
    {
    }

    /**
     * @param string   $name
     * @param callable $method
     * @return void
     */
    public function set(string $name, $method): void
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available services
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
