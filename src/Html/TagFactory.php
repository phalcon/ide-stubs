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
 * @method a(string $href, string $text, array $attributes = [], bool $raw = false): string
 * @method base(string $href, array $attributes = []): string
 * @method body(array $attributes = []): string
 * @method button(string $text, array $attributes = [], bool $raw = false): string
 * @method close(string $tag, bool $raw = false): string
 * @method doctype(int $flag, string $delimiter): string
 * @method element(string $tag, string $text, array $attributes = [], bool $raw = false): string
 * @method form(array $attributes = []): string
 * @method img(string $src, array $attributes = []): string
 * @method inputCheckbox(string $name, string $value = null, array $attributes = []): string
 * @method inputColor(string $name, string $value = null, array $attributes = []): string
 * @method inputDate(string $name, string $value = null, array $attributes = []): string
 * @method inputDateTime(string $name, string $value = null, array $attributes = []): string
 * @method inputDateTimeLocal(string $name, string $value = null, array $attributes = []): string
 * @method inputEmail(string $name, string $value = null, array $attributes = []): string
 * @method inputFile(string $name, string $value = null, array $attributes = []): string
 * @method inputHidden(string $name, string $value = null, array $attributes = []): string
 * @method inputImage(string $name, string $value = null, array $attributes = []): string
 * @method inputInput(string $name, string $value = null, array $attributes = []): string
 * @method inputMonth(string $name, string $value = null, array $attributes = []): string
 * @method inputNumeric(string $name, string $value = null, array $attributes = []): string
 * @method inputPassword(string $name, string $value = null, array $attributes = []): string
 * @method inputRadio(string $name, string $value = null, array $attributes = []): string
 * @method inputRange(string $name, string $value = null, array $attributes = []): string
 * @method inputSearch(string $name, string $value = null, array $attributes = []): string
 * @method inputSelect(string $name, string $value = null, array $attributes = []): string
 * @method inputSubmit(string $name, string $value = null, array $attributes = []): string
 * @method inputTel(string $name, string $value = null, array $attributes = []): string
 * @method inputText(string $name, string $value = null, array $attributes = []): string
 * @method inputTextarea(string $name, string $value = null, array $attributes = []): string
 * @method inputTime(string $name, string $value = null, array $attributes = []): string
 * @method inputUrl(string $name, string $value = null, array $attributes = []): string
 * @method inputWeek(string $name, string $value = null, array $attributes = []): string
 * @method label(array $attributes = []): string
 * @method link(string $indent = '    ', string $delimiter = PHP_EOL): string
 * @method meta(string $indent = '    ', string $delimiter = PHP_EOL): string
 * @method ol(string $text, array $attributes = [], bool $raw = false): string
 * @method script(string $indent = '    ', string $delimiter = PHP_EOL): string
 * @method style(string $indent = '    ', string $delimiter = PHP_EOL): string
 * @method title(string $separator = '', string $indent = '', string $delimiter = PHP_EOL): string
 * @method ul(string $text, array $attributes = [], bool $raw = false): string
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
