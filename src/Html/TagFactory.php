<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Helper\Doctype;
use Phalcon\Html\Helper\Input\Checkbox;
use Phalcon\Html\Helper\Input\Color;
use Phalcon\Html\Helper\Input\Date;
use Phalcon\Html\Helper\Input\DateTime;
use Phalcon\Html\Helper\Input\DateTimeLocal;
use Phalcon\Html\Helper\Input\Email;
use Phalcon\Html\Helper\Input\File;
use Phalcon\Html\Helper\Input\Hidden;
use Phalcon\Html\Helper\Input\Image;
use Phalcon\Html\Helper\Input\Input;
use Phalcon\Html\Helper\Input\Month;
use Phalcon\Html\Helper\Input\Numeric;
use Phalcon\Html\Helper\Input\Password;
use Phalcon\Html\Helper\Input\Radio;
use Phalcon\Html\Helper\Input\Range;
use Phalcon\Html\Helper\Input\Search;
use Phalcon\Html\Helper\Input\Select;
use Phalcon\Html\Helper\Input\Submit;
use Phalcon\Html\Helper\Input\Tel;
use Phalcon\Html\Helper\Input\Text;
use Phalcon\Html\Helper\Input\Textarea;
use Phalcon\Html\Helper\Input\Time;
use Phalcon\Html\Helper\Input\Url;
use Phalcon\Html\Helper\Input\Week;
use Phalcon\Html\Helper\Meta;
use Phalcon\Html\Helper\Ol;
use Phalcon\Html\Helper\Script;
use Phalcon\Html\Helper\Style;
use Phalcon\Html\Helper\Title;
use Phalcon\Html\Helper\Ul;
use Phalcon\Html\Link\Link;

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
 * @method string        a(string $href, string $text, array $attributes = [], bool $raw = false)
 * @method string        base(string $href, array $attributes = [])
 * @method string        body(array $attributes = [])
 * @method string        button(string $text, array $attributes = [], bool $raw = false)
 * @method string        close(string $tag, bool $raw = false)
 * @method Doctype       doctype(int $flag, string $delimiter)
 * @method string        element(string $tag, string $text, array $attributes = [], bool $raw = false)
 * @method string        form(array $attributes = [])
 * @method string        img(string $src, array $attributes = [])
 * @method Checkbox      inputCheckbox(string $name, string $value = null, array $attributes = [])
 * @method Color         inputColor(string $name, string $value = null, array $attributes = [])
 * @method Date          inputDate(string $name, string $value = null, array $attributes = [])
 * @method DateTime      inputDateTime(string $name, string $value = null, array $attributes = [])
 * @method DateTimeLocal inputDateTimeLocal(string $name, string $value = null, array $attributes = [])
 * @method Email         inputEmail(string $name, string $value = null, array $attributes = [])
 * @method File          inputFile(string $name, string $value = null, array $attributes = [])
 * @method Hidden        inputHidden(string $name, string $value = null, array $attributes = [])
 * @method Image         inputImage(string $name, string $value = null, array $attributes = [])
 * @method Input         inputInput(string $name, string $value = null, array $attributes = [])
 * @method Month         inputMonth(string $name, string $value = null, array $attributes = [])
 * @method Numeric       inputNumeric(string $name, string $value = null, array $attributes = [])
 * @method Password      inputPassword(string $name, string $value = null, array $attributes = [])
 * @method Radio         inputRadio(string $name, string $value = null, array $attributes = [])
 * @method Range         inputRange(string $name, string $value = null, array $attributes = [])
 * @method Search        inputSearch(string $name, string $value = null, array $attributes = [])
 * @method Select        inputSelect(string $name, string $value = null, array $attributes = [])
 * @method Submit        inputSubmit(string $name, string $value = null, array $attributes = [])
 * @method Tel           inputTel(string $name, string $value = null, array $attributes = [])
 * @method Text          inputText(string $name, string $value = null, array $attributes = [])
 * @method Textarea      inputTextarea(string $name, string $value = null, array $attributes = [])
 * @method Time          inputTime(string $name, string $value = null, array $attributes = [])
 * @method Url           inputUrl(string $name, string $value = null, array $attributes = [])
 * @method Week          inputWeek(string $name, string $value = null, array $attributes = [])
 * @method string        label(string $label, array $attributes = [], bool $raw = false)
 * @method Link          link(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method Meta          meta(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method Ol            ol(string $text, array $attributes = [], bool $raw = false)
 * @method Script        script(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method Style         style(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method Title         title(string $indent = '    ', string $delimiter = PHP_EOL)
 * @method Ul            ul(string $text, array $attributes = [], bool $raw = false)
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
    public function newInstance(string $name): mixed
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
