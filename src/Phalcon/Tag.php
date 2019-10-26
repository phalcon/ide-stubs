<?php

namespace Phalcon;

use Phalcon\Di\DiInterface;
use Phalcon\Escaper\EscaperInterface;
use Phalcon\Url\UrlInterface;

/**
 * Phalcon\Tag is designed to simplify building of HTML tags.
 * It provides a set of helpers to generate HTML in a dynamic way.
 * This component is a class that you can extend to add more helpers.
 */
class Tag
{

    const HTML32 = 1;


    const HTML401_STRICT = 2;


    const HTML401_TRANSITIONAL = 3;


    const HTML401_FRAMESET = 4;


    const HTML5 = 5;


    const XHTML10_STRICT = 6;


    const XHTML10_TRANSITIONAL = 7;


    const XHTML10_FRAMESET = 8;


    const XHTML11 = 9;


    const XHTML20 = 10;


    const XHTML5 = 11;


    protected static $autoEscape = true;

    /**
     * DI Container
     */
    protected static $container;

    /**
     * Pre-assigned values for components
     */
    protected static $displayValues;


    protected static $documentAppendTitle = null;


    protected static $documentPrependTitle = null;

    /**
     * HTML document title
     */
    protected static $documentTitle = null;


    protected static $documentTitleSeparator = null;


    protected static $documentType = 11;


    protected static $escaperService = null;


    protected static $urlService = null;


    /**
     * Appends a text to current document title
     *
     * @param mixed $title
     */
    public static function appendTitle($title)
    {
    }

    /**
     * Builds a HTML input[type="check"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function checkField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="color"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function colorField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="date"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function dateField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="datetime"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function dateTimeField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="datetime-local"] tag
     *
     * @param mixed $parameters
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
     */
    public static function displayTo(string $id, $value)
    {
    }

    /**
     * Builds a HTML input[type="email"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function emailField($parameters): string
    {
    }

    /**
     * Builds a HTML close FORM tag
     *
     * @return string
     */
    public static function endForm(): string
    {
    }

    /**
     * Builds a HTML input[type="file"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function fileField($parameters): string
    {
    }

    /**
     * Builds a HTML FORM tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function form($parameters): string
    {
    }

    /**
     * Converts texts into URL-friendly titles
     *
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
     * @param array $params
     * @return null|\Phalcon\Escaper\EscaperInterface
     */
    public static function getEscaper(array $params): ?EscaperInterface
    {
    }

    /**
     * Internally gets the request dispatcher
     *
     * @return \Phalcon\Di\DiInterface
     */
    public static function getDI(): DiInterface
    {
    }

    /**
     * Returns an Escaper service from the default DI
     *
     * @return \Phalcon\Escaper\EscaperInterface
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
     * @return \Phalcon\Url\UrlInterface
     */
    public static function getUrlService(): UrlInterface
    {
    }

    /**
     * Every helper calls this function to check whether a component has a
     * predefined value using Phalcon\Tag::setDefault() or value from $_POST
     *
     * @param mixed $name
     * @param array $params
     */
    public static function getValue($name, array $params = array())
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
     * @param mixed $parameters
     * @return string
     */
    public static function hiddenField($parameters): string
    {
    }

    /**
     * Builds HTML IMG tags
     *
     * @param mixed $parameters
     * @param bool $local
     * @return string
     */
    public static function image($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds a HTML input[type="image"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function imageInput($parameters): string
    {
    }

    /**
     * Builds a SCRIPT[type="javascript"] tag
     *
     * @param mixed $parameters
     * @param bool $local
     * @return string
     */
    public static function javascriptInclude($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds a HTML A tag using framework conventions
     *
     * @param mixed $parameters
     * @param mixed $text
     * @param mixed $local
     * @return string
     */
    public static function linkTo($parameters, $text = null, $local = true): string
    {
    }

    /**
     * Builds a HTML input[type="month"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function monthField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="number"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function numericField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="password"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function passwordField($parameters): string
    {
    }

    /**
     * Prepends a text to current document title
     *
     * @param mixed $title
     */
    public static function prependTitle($title)
    {
    }

    /**
     * Builds a HTML input[type="radio"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function radioField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="range"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function rangeField($parameters): string
    {
    }

    /**
     * Renders parameters keeping order in their HTML attributes
     *
     * @param string $code
     * @param array $attributes
     * @return string
     */
    public static function renderAttributes(string $code, array $attributes): string
    {
    }

    /**
     * Renders the title with title tags. The title is automaticall escaped
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
     */
    public static function resetInput()
    {
    }

    /**
     * Builds a HTML input[type="search"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function searchField($parameters): string
    {
    }

    /**
     * Builds a HTML SELECT tag using a Phalcon\Mvc\Model resultset as options
     *
     * @param mixed $parameters
     * @param mixed $data
     * @return string
     */
    public static function select($parameters, $data = null): string
    {
    }

    /**
     * Builds a HTML SELECT tag using a PHP array for options
     *
     * @param mixed $parameters
     * @param mixed $data
     * @return string
     */
    public static function selectStatic($parameters, $data = null): string
    {
    }

    /**
     * Set autoescape mode in generated html
     *
     * @param bool $autoescape
     */
    public static function setAutoescape(bool $autoescape)
    {
    }

    /**
     * Assigns default values to generated tags by helpers
     *
     * @param string $id
     * @param mixed $value
     */
    public static function setDefault(string $id, $value)
    {
    }

    /**
     * Assigns default values to generated tags by helpers
     *
     * @param array $values
     * @param bool $merge
     */
    public static function setDefaults(array $values, bool $merge = false)
    {
    }

    /**
     * Sets the dependency injector container.
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public static function setDI(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Set the document type of content
     *
     * @param int $doctype
     */
    public static function setDocType(int $doctype)
    {
    }

    /**
     * Set the title of view content
     *
     * @param string $title
     */
    public static function setTitle(string $title)
    {
    }

    /**
     * Set the title separator of view content
     *
     * @param string $titleSeparator
     */
    public static function setTitleSeparator(string $titleSeparator)
    {
    }

    /**
     * Builds a LINK[rel="stylesheet"] tag
     *
     * @param mixed $parameters
     * @param bool $local
     * @return string
     */
    public static function stylesheetLink($parameters = null, bool $local = true): string
    {
    }

    /**
     * Builds a HTML input[type="submit"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function submitButton($parameters): string
    {
    }

    /**
     * Builds a HTML tag
     *
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
     * Builds a HTML input[type="tel"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function telField($parameters): string
    {
    }

    /**
     * Builds a HTML TEXTAREA tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function textArea($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="text"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function textField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="time"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function timeField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="url"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function urlField($parameters): string
    {
    }

    /**
     * Builds a HTML input[type="week"] tag
     *
     * @param mixed $parameters
     * @return string
     */
    public static function weekField($parameters): string
    {
    }

    /**
     * Builds generic INPUT tags
     *
     * @param string $type
     * @param mixed $parameters
     * @param bool $asValue
     * @return string
     */
    final protected static function inputField(string $type, $parameters, bool $asValue = false): string
    {
    }

    /**
     * Builds INPUT tags that implements the checked attribute
     *
     * @param string $type
     * @param mixed $parameters
     * @return string
     */
    final protected static function inputFieldChecked(string $type, $parameters): string
    {
    }
}
