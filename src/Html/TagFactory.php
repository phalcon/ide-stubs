<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Closure;
use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Exceptions\ServiceNotRegistered;
use Phalcon\Html\Helper\Anchor;
use Phalcon\Html\Helper\Base;
use Phalcon\Html\Helper\Body;
use Phalcon\Html\Helper\Breadcrumbs;
use Phalcon\Html\Helper\Button;
use Phalcon\Html\Helper\Close;
use Phalcon\Html\Helper\Doctype;
use Phalcon\Html\Helper\Element;
use Phalcon\Html\Helper\Form;
use Phalcon\Html\Helper\FriendlyTitle;
use Phalcon\Html\Helper\Img;
use Phalcon\Html\Helper\Input\Checkbox;
use Phalcon\Html\Helper\Input\CheckboxGroup;
use Phalcon\Html\Helper\Input\Generic;
use Phalcon\Html\Helper\Input\Radio;
use Phalcon\Html\Helper\Input\RadioGroup;
use Phalcon\Html\Helper\Input\Select;
use Phalcon\Html\Helper\Input\Textarea;
use Phalcon\Html\Helper\Label;
use Phalcon\Html\Helper\Link;
use Phalcon\Html\Helper\Meta;
use Phalcon\Html\Helper\Ol;
use Phalcon\Html\Helper\Preload;
use Phalcon\Html\Helper\Script;
use Phalcon\Html\Helper\Style;
use Phalcon\Html\Helper\Tag;
use Phalcon\Html\Helper\Title;
use Phalcon\Html\Helper\Ul;
use Phalcon\Html\Helper\VoidTag;
use Phalcon\Http\ResponseInterface;
use Phalcon\Mvc\Url\UrlInterface;

/**
 * ServiceLocator implementation for Tag helpers.
 *
 * Built-in services are seeded by the constructor. Users may add or override
 * services via `set()`, passing a Closure that returns the helper instance.
 *
 * Helpers are cached per name after first construction.
 *
 * `__call()` resolves the named helper and dispatches to its `__invoke()`,
 * so each entry in the @method block below describes the result of calling
 * `$factory->serviceName(...)` rather than `newInstance("serviceName")`.
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 * @phpstan-import-type html_group_options from HtmlTypes
 * @phpstan-import-type html_factory_instances from HtmlTypes
 * @phpstan-import-type html_factory_services from HtmlTypes
 *
 * @method string        a(string $href, string $text, html_attributes $attributes = [], bool $raw = false)
 * @method string        aRaw(string $href, string $text, html_attributes $attributes = [])
 * @method string        base(string $href, html_attributes $attributes = [])
 * @method string        body(html_attributes $attributes = [])
 * @method Breadcrumbs   breadcrumbs(string $indent = '    ', string $delimiter = "\n")
 * @method string        button(string $text, html_attributes $attributes = [], bool $raw = false)
 * @method string        buttonRaw(string $text, html_attributes $attributes = [])
 * @method string        close(string $tag, bool $raw = false)
 * @method Doctype       doctype(int $type = Doctype::HTML5, string $delimiter = "\n")
 * @method string        element(string $tag, string $text, html_attributes $attributes = [], bool $raw = false)
 * @method string        elementRaw(string $tag, string $text, html_attributes $attributes = [])
 * @method string        form(html_attributes $attributes = [])
 * @method string        friendlyTitle(string $text, string $separator = '-', bool $lower = true, mixed $replace = null)
 * @method string        img(string $src, html_attributes $attributes = [])
 * @method Checkbox      inputCheckbox(string $name, string $value = null, html_attributes $attributes = [])
 * @method CheckboxGroup inputCheckboxGroup(string $name, array $options, mixed $checked = null, array $attributes = [])
 * @method Generic       inputColor(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputDate(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputDateTime(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputDateTimeLocal(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputEmail(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputFile(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputHidden(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputImage(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputInput(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputMonth(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputNumeric(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputPassword(string $name, string $value = null, html_attributes $attributes = [])
 * @method Radio         inputRadio(string $name, string $value = null, html_attributes $attributes = [])
 * @method RadioGroup    inputRadioGroup(string $name, array $options, mixed $checked = null, array $attributes = [])
 * @method Generic       inputRange(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputSearch(string $name, string $value = null, html_attributes $attributes = [])
 * @method Select        inputSelect(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputSubmit(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputTel(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputText(string $name, string $value = null, html_attributes $attributes = [])
 * @method Textarea      inputTextarea(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputTime(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputUrl(string $name, string $value = null, html_attributes $attributes = [])
 * @method Generic       inputWeek(string $name, string $value = null, html_attributes $attributes = [])
 * @method string        label(string $label, html_attributes $attributes = [], bool $raw = false)
 * @method string        labelRaw(string $label, html_attributes $attributes = [])
 * @method Link          link(string $indent = '    ', string $delimiter = "\n")
 * @method Meta          meta(string $indent = '    ', string $delimiter = "\n")
 * @method Ol            ol(string $indent = '    ', string $delimiter = null, html_attributes $attributes = [])
 * @method Ol            olRaw(string $indent = '    ', string $delimiter = null, html_attributes $attributes = [])
 * @method string        preload(string $href, string $type = 'style', html_attributes $attributes = [])
 * @method Script        script(string $indent = '    ', string $delimiter = "\n")
 * @method Style         style(string $indent = '    ', string $delimiter = "\n")
 * @method string        tag(string $name, html_attributes $attributes = [])
 * @method Title         title(string $indent = '    ', string $delimiter = "\n")
 * @method Ul            ul(string $indent = '    ', string $delimiter = null, html_attributes $attributes = [])
 * @method Ul            ulRaw(string $indent = '    ', string $delimiter = null, html_attributes $attributes = [])
 * @method string        voidTag(string $name, html_attributes $attributes = [])
 */
class TagFactory
{
    private \Phalcon\Html\Helper\Doctype $doctype;

    private \Phalcon\Html\Escaper\EscaperInterface $escaper;

    private ?\Phalcon\Http\ResponseInterface $response = null;

    private ?\Phalcon\Mvc\Url\UrlInterface $url = null;

    /**
     * @phpstan-var html_factory_services
     */
    protected array $factories = [];

    /**
     * @phpstan-var html_factory_instances
     */
    protected array $instances = [];

    /**
     * TagFactory constructor.
     *
     * `$services` maps a service name to a zero-arg Closure that returns the
     * helper instance.
     *
     * @phpstan-param html_factory_services $services
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     * @param array $services
     * @param \Phalcon\Http\ResponseInterface|null $response
     * @param \Phalcon\Mvc\Url\UrlInterface|null $url
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, array $services = [], ?\Phalcon\Http\ResponseInterface $response = null, ?\Phalcon\Mvc\Url\UrlInterface $url = null)
    {
    }

    /**
     * Magic call to make the helper objects available as methods.
     *
     * @phpstan-param array<int, mixed> $arguments
     *
     * @throws \Phalcon\Html\Exception
     * @param string $name
     * @param array $arguments
     */
    public function __call(string $name, array $arguments)
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Create or return a cached instance of the helper.
     *
     * @throws \Phalcon\Html\Exception
     *
     * @phpstan-return ($name is 'doctype' ? Doctype : object)
     * @param string $name
     * @return object
     */
    public function newInstance(string $name): object
    {
    }

    /**
     * Register a helper via a zero-argument Closure. The Closure is invoked on
     * the first matching `newInstance()` call and its return value is cached.
     * Passing a new definition clears any cached instance so the next call to
     * `newInstance()` rebuilds it.
     *
     * @param string $name
     * @param \Closure $definition
     * @return void
     */
    public function set(string $name, \Closure $definition): void
    {
    }

    /**
     * Default service recipes. Every entry is a callable that returns a
     * fully-constructed helper instance. Services are built lazily and cached.
     *
     * @phpstan-return html_factory_services
     * @return array
     */
    protected function getDefaultServices(): array
    {
    }
}
