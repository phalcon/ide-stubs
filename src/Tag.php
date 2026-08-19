<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Link\Link;
use Phalcon\Html\Link\Serializer\Header;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\Url\UrlInterface;
use Phalcon\Support\Helper\Str\Friendly;
use Phalcon\Tag\Exception;
use Phalcon\Tag\Select;
use Stringable;

/**
 * Phalcon\Tag is designed to simplify building of HTML tags.
 * It provides a set of helpers to generate HTML in a dynamic way.
 * This component is a class that you can extend to add more helpers.
 *
 * @phpstan-type tag_parameters array<array-key, mixed>
 * @phpstan-type tag_attributes array<array-key, mixed>
 * @phpstan-type tag_display_values array<array-key, scalar|null>
 * @phpstan-type tag_title_parts array<array-key, string>
 * @phpstan-type tag_select_data array<array-key, mixed>
 */
class Tag
{
    /**
     * @var int
     */
    const int HTML32 = 1;

    /**
     * @var int
     */
    const int HTML401_STRICT = 2;

    /**
     * @var int
     */
    const int HTML401_TRANSITIONAL = 3;

    /**
     * @var int
     */
    const int HTML401_FRAMESET = 4;

    /**
     * @var int
     */
    const int HTML5 = 5;

    /**
     * @var int
     */
    const int XHTML10_STRICT = 6;

    /**
     * @var int
     */
    const int XHTML10_TRANSITIONAL = 7;

    /**
     * @var int
     */
    const int XHTML10_FRAMESET = 8;

    /**
     * @var int
     */
    const int XHTML11 = 9;

    /**
     * @var int
     */
    const int XHTML20 = 10;

    /**
     * @var int
     */
    const int XHTML5 = 11;

    protected static bool $autoEscape = true;

    protected static ?\Phalcon\Di\DiInterface $container = null;

    /**
     * @phpstan-var tag_display_values
     */
    protected static array $displayValues = [];

    /**
     * @phpstan-var tag_title_parts
     */
    protected static array $documentAppendTitle = [];

    /**
     * @phpstan-var tag_title_parts
     */
    protected static array $documentPrependTitle = [];

    protected static ?string $documentTitle = null;

    protected static ?string $documentTitleSeparator = null;

    protected static int $documentType = 11;

    protected static ?\Phalcon\Html\Escaper\EscaperInterface $escaperService = null;

    protected static ?\Phalcon\Mvc\Url\UrlInterface $urlService = null;

    /**
     * Appends a text to current document title
     *
     * @phpstan-param tag_title_parts|string $title
     * @param mixed $title
     * @return void
     */
    public static function appendTitle($title): void
    {
    }

    /**
     * Builds an HTML input[type="check"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function checkField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="color"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function colorField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="date"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function dateField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="datetime"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function dateTimeField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="datetime-local"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function dateTimeLocalField($parameters): string
    {
    }

    /**
     * Alias of Phalcon\Tag::setDefault()
     *
     * @param string $id
     * @param mixed $value
     * @return void
     */
    public static function displayTo(string $id, $value): void
    {
    }

    /**
     * Builds an HTML input[type="email"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function emailField($parameters): string
    {
    }

    /**
     * Builds an HTML close FORM tag
     *
     * @return string
     */
    public static function endForm(): string
    {
    }

    /**
     * Builds an HTML input[type="file"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     *     'value' => ''
     * ]
     * @return string
     */
    public static function fileField($parameters): string
    {
    }

    /**
     * Builds an HTML FORM tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'method' => 'post',
     *     'action' => '',
     *     'parameters' => '',
     *     'name' => '',
     *     'class' => '',
     *     'id' => ''
     * ]
     * @return string
     */
    public static function formLegacy($parameters): string
    {
    }

    /**
     * Converts texts into URL-friendly titles
     *
     * @phpstan-param array<array-key, string>|string $replace
     * @param string $text
     * @param string $separator
     * @param bool $lowercase
     * @param mixed $replace
     * @return string
     */
    public static function friendlyTitle(string $text, string $separator = '-', bool $lowercase = true, $replace = null): string
    {
    }

    /**
     * Internally gets the request dispatcher
     *
     * @return DiInterface
     */
    public static function getDI(): DiInterface
    {
    }

    /**
     * Get the document type declaration of content
     *
     * @return string
     */
    public static function getDocType(): string
    {
    }

    /**
     * Obtains the 'escaper' service if required
     *
     * @phpstan-param tag_parameters $parameters
     * @param array $params
     * @return EscaperInterface|null
     */
    public static function getEscaper(array $params): EscaperInterface|null
    {
    }

    /**
     * Returns an Escaper service from the default DI
     *
     * @return EscaperInterface
     */
    public static function getEscaperService(): EscaperInterface
    {
    }

    /**
     * Gets the current document title. The title will be automatically escaped.
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public static function getTitle(bool $prepend = true, bool $append = true): string
    {
    }

    /**
     * Gets the current document title separator
     *
     * @return string
     */
    public static function getTitleSeparator(): string
    {
    }

    /**
     * Returns a URL service from the default DI
     *
     * @return UrlInterface
     */
    public static function getUrlService(): UrlInterface
    {
    }

    /**
     * Every helper calls this function to check whether a component has a
     * predefined value using Phalcon\Tag::setDefault() or value from $_POST
     *
     * @phpstan-param tag_parameters $parameters
     * @param mixed $name
     * @param array $params
     * @return mixed
     */
    public static function getValue($name, array $params = []): mixed
    {
    }

    /**
     * Check if a helper has a default value set using Phalcon\Tag::setDefault()
     * or value from $_POST
     *
     * @param mixed $name
     * @return bool
     */
    public static function hasValue($name): bool
    {
    }

    /**
     * Builds a HTML input[type="hidden"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function hiddenField($parameters): string
    {
    }

    /**
     * Builds HTML IMG tags
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'src' => '',
     *     'class' => '',
     *     'id' => '',
     *     'name' => ''
     * ]
     * @param bool $local
     * @return string
     */
    public static function image($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds an HTML input[type="image"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => ''
     * ]
     * @return string
     */
    public static function imageInput($parameters): string
    {
    }

    /**
     * Builds a SCRIPT[type="javascript"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'local' => false,
     *     'src' => '',
     *     'type' => 'text/javascript'
     *     'rel' => ''
     * ]
     * @param bool $local
     * @return string
     */
    public static function javascriptInclude($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds an HTML A tag using framework conventions
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'action' => '',
     *     'text' => '',
     *     'local' => false,
     *     'query' => '',
     *     'class' => '',
     *     'name' => '',
     *     'href' => '',
     *     'id' => ''
     * ]
     * @param mixed $text
     * @param mixed $local
     * @return string
     */
    public static function linkTo($parameters, $text = null, $local = true): string
    {
    }

    /**
     * Builds an HTML input[type="month"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function monthField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="number"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function numericField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="password"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function passwordField($parameters): string
    {
    }

    /**
     * Parses the preload element passed and sets the necessary link headers
     *
     * @phpstan-param tag_parameters|string $parameters
     * @param mixed $parameters
     * @return string
     */
    public static function preload($parameters): string
    {
    }

    /**
     * Prepends a text to current document title
     *
     * @phpstan-param tag_title_parts|string $title
     * @param mixed $title
     * @return void
     */
    public static function prependTitle($title): void
    {
    }

    /**
     * Builds an HTML input[type="radio"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function radioField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="range"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function rangeField($parameters): string
    {
    }

    /**
     * Renders parameters keeping order in their HTML attributes
     *
     * @param array $attributes = [
     *     'rel' => null,
     *     'type' => null,
     *     'for' => null,
     *     'src' => null,
     *     'href' => null,
     *     'action' => null,
     *     'id' => null,
     *     'name' => null,
     *     'value' => null,
     *     'class' => null
     * ]
     *
     * @phpstan-param tag_attributes $attributes
     * @param string $code
     * @return string
     */
    public static function renderAttributes(string $code, array $attributes): string
    {
    }

    /**
     * Renders the title with title tags. The title is automatically escaped
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public static function renderTitle(bool $prepend = true, bool $append = true): string
    {
    }

    /**
     * Resets the request and internal values to avoid those fields will have
     * any default value.
     *
     * @deprecated Will be removed in 4.0.0
     * @deprecated
     * @return void
     */
    public static function resetInput(): void
    {
    }

    /**
     * Builds a HTML input[type="search"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'class' => '',
     *     'name' => '',
     *     'src' => '',
     *     'id' => '',
     *     'value' => ''
     * ]
     * @return string
     */
    public static function searchField($parameters): string
    {
    }

    /**
     * Builds a HTML SELECT tag using a Phalcon\Mvc\Model resultset as options
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'useEmpty' => false,
     *     'emptyValue' => '',
     *     'emptyText' => '',
     * ]
     * @param mixed $data
     * @return string
     */
    public static function select($parameters, $data = null): string
    {
    }

    /**
     * Builds an HTML SELECT tag using a PHP array for options
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'useEmpty' => false,
     *     'emptyValue' => '',
     *     'emptyText' => '',
     * ]
     * @param mixed $data
     * @return string
     */
    public static function selectStatic($parameters, $data = null): string
    {
    }

    /**
     * Set autoescape mode in generated HTML
     *
     * @param bool $autoescape
     * @return void
     */
    public static function setAutoescape(bool $autoescape): void
    {
    }

    /**
     * Assigns default values to generated tags by helpers
     *
     * @param string $id
     * @param mixed $value
     * @return void
     */
    public static function setDefault(string $id, $value): void
    {
    }

    /**
     * Assigns default values to generated tags by helpers
     *
     * @phpstan-param tag_display_values $values
     * @param array $values
     * @param bool $merge
     * @return void
     */
    public static function setDefaults(array $values, bool $merge = false): void
    {
    }

    /**
     * Sets the dependency injector container.
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public static function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Set the document type of content
     *
     * @param int $doctype
     * @return void
     */
    public static function setDocType(int $doctype): void
    {
    }

    /**
     * Set the title of view content
     *
     * @param string $title
     * @return void
     */
    public static function setTitle(string $title): void
    {
    }

    /**
     * Set the title separator of view content
     *
     * @param string $titleSeparator
     * @return void
     */
    public static function setTitleSeparator(string $titleSeparator): void
    {
    }

    /**
     * Builds a LINK[rel="stylesheet"] tag
     *
     * @phpstan-param tag_parameters|string|null $parameters
     * @param mixed $parameters
     * @param bool $local
     * @return string
     */
    public static function stylesheetLink($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds an HTML input[type="submit"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     * @param mixed $parameters
     * @return string
     */
    public static function submitButton($parameters): string
    {
    }

    /**
     * Builds a HTML tag
     *
     * @phpstan-param tag_parameters|string $parameters
     * @param string $tagName
     * @param mixed $parameters
     * @param bool $selfClose
     * @param bool $onlyStart
     * @param bool $useEol
     * @return string
     */
    public static function tagHtml(string $tagName, $parameters = null, bool $selfClose = false, bool $onlyStart = false, bool $useEol = false): string
    {
    }

    /**
     * Builds a HTML tag closing tag
     *
     * @param string $tagName
     * @param bool $useEol
     * @return string
     */
    public static function tagHtmlClose(string $tagName, bool $useEol = false): string
    {
    }

    /**
     * Builds an HTML input[type="tel"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function telField($parameters): string
    {
    }

    /**
     * Builds an HTML TEXTAREA tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function textArea($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="text"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function textField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="time"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function timeField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="url"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function urlField($parameters): string
    {
    }

    /**
     * Builds an HTML input[type="week"] tag
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => ''
     * ]
     * @return string
     */
    public static function weekField($parameters): string
    {
    }

    /**
     * Resolves a static (asset) URL through the `url` service.
     *
     * `getStatic()` lives on Phalcon\Mvc\Url but is absent from
     * Phalcon\Mvc\Url\UrlInterface, which is what getUrlService() is typed
     * to return. A service that does not carry it falls back to `get()`
     * rather than aborting the helper.
     *
     * @param mixed $uri
     * @return string
     */
    final protected static function getStaticUrl($uri): string
    {
    }

    /**
     * Builds generic INPUT tags
     *
     * @phpstan-param tag_parameters|string $parameters
     *
     * @param array|string $parameters = [
     *     'id' => '',
     *     'name' => '',
     *     'value' => '',
     *     'class' => '',
     *     'type' => ''
     * ]
     * @param string $type
     * @param bool $asValue
     * @return string
     */
    final protected static function inputField(string $type, $parameters, bool $asValue = false): string
    {
    }

    /**
     * Builds INPUT tags that implements the checked attribute
     *
     * @phpstan-param tag_parameters|string $parameters
     * @param string $type
     * @param mixed $parameters
     * @return string
     */
    final protected static function inputFieldChecked(string $type, $parameters): string
    {
    }

    /**
     * Reduces an arbitrary helper value to the string a tag attribute, id or
     * URI needs. Parameter bags are user supplied, so a value that cannot be
     * expressed as a string - an array, an object without `__toString()` -
     * reads back as an empty string rather than aborting the helper.
     *
     * @param mixed $value
     * @return string
     */
    final protected static function toStringValue($value): string
    {
    }
}
