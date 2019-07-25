<?php

namespace Phalcon;

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


    static protected $autoEscape = true;

    /**
     * Framework Dispatcher
     */
    static protected $container;

    /**
     * Pre-assigned values for components
     */
    static protected $displayValues;


    static protected $dispatcherService = null;


    static protected $documentAppendTitle = null;


    static protected $documentPrependTitle = null;

    /**
     * HTML document title
     */
    static protected $documentTitle = null;


    static protected $documentTitleSeparator = null;


    static protected $documentType = 11;


    static protected $escaperService = null;


    static protected $urlService = null;


    /**
     * Appends a text to current document title
     *
     * @param mixed $title
     */
    public static function appendTitle($title) {}

    /**
     * Builds a HTML input[type="check"] tag
     *
     * ```php
     * echo Phalcon\Tag::checkField(
     *     [
     *         "terms",
     *         "value" => "Y",
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ check_field("terms") }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function checkField($parameters): string {}

    /**
     * Builds a HTML input[type="color"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function colorField($parameters): string {}

    /**
     * Builds a HTML input[type="date"] tag
     *
     * ```php
     * echo Phalcon\Tag::dateField(
     *     [
     *         "born",
     *         "value" => "14-12-1980",
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function dateField($parameters): string {}

    /**
     * Builds a HTML input[type="datetime"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function dateTimeField($parameters): string {}

    /**
     * Builds a HTML input[type="datetime-local"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function dateTimeLocalField($parameters): string {}

    /**
     * Alias of Phalcon\Tag::setDefault()
     *
     * @param string $id
     * @param string $value
     */
    public static function displayTo(string $id, $value) {}

    /**
     * Builds a HTML input[type="email"] tag
     *
     * ```php
     * echo Phalcon\Tag::emailField("email");
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function emailField($parameters): string {}

    /**
     * Builds a HTML close FORM tag
     *
     * @return string
     */
    public static function endForm(): string {}

    /**
     * Builds a HTML input[type="file"] tag
     *
     * ```php
     * echo Phalcon\Tag::fileField("file");
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function fileField($parameters): string {}

    /**
     * Builds a HTML FORM tag
     *
     * ```php
     * echo Phalcon\Tag::form("posts/save");
     *
     * echo Phalcon\Tag::form(
     *     [
     *         "posts/save",
     *         "method" => "post",
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ form("posts/save") }}
     * {{ form("posts/save", "method": "post") }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function form($parameters): string {}

    /**
     * Converts texts into URL-friendly titles
     *
     * ```php
     * echo Phalcon\Tag::friendlyTitle("These are big important news", "-")
     * ```
     *
     * @param string $text
     * @param string $separator
     * @param bool $lowercase
     * @param mixed $replace
     * @return string
     */
    public static function friendlyTitle(string $text, string $separator = '-', bool $lowercase = true, $replace = null): string {}

    /**
     * Get the document type declaration of content
     *
     * @return string
     */
    public static function getDocType(): string {}

    /**
     * Obtains the 'escaper' service if required
     *
     * @param array $params
     * @return null|\Phalcon\Escaper\EscaperInterface
     */
    public static function getEscaper(array $params): ?EscaperInterface {}

    /**
     * Internally gets the request dispatcher
     *
     * @return \Phalcon\Di\DiInterface
     */
    public static function getDI(): DiInterface {}

    /**
     * Returns an Escaper service from the default DI
     *
     * @return \Phalcon\Escaper\EscaperInterface
     */
    public static function getEscaperService(): EscaperInterface {}

    /**
     * Gets the current document title.
     * The title will be automatically escaped.
     *
     * ```php
     * Tag::prependTitle('Hello');
     * Tag::setTitle('World');
     * Tag::appendTitle('from Phalcon');
     *
     * echo Tag::getTitle();             // Hello World from Phalcon
     * echo Tag::getTitle(false);        // World from Phalcon
     * echo Tag::getTitle(true, false);  // Hello World
     * echo Tag::getTitle(false, false); // World
     * ```
     *
     * ```php
     * {{ get_title() }}
     * ```
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public static function getTitle(bool $prepend = true, bool $append = true): string {}

    /**
     * Gets the current document title separator
     *
     * ```php
     * echo Phalcon\Tag::getTitleSeparator();
     * ```
     *
     * ```php
     * {{ get_title_separator() }}
     * ```
     *
     * @return string
     */
    public static function getTitleSeparator(): string {}

    /**
     * Returns a URL service from the default DI
     *
     * @return \Phalcon\Url\UrlInterface
     */
    public static function getUrlService(): UrlInterface {}

    /**
     * Every helper calls this function to check whether a component has a
     * predefined value using Phalcon\Tag::setDefault() or value from $_POST
     *
     * @param string $name
     * @param array $params
     * @return mixed
     */
    public static function getValue($name, array $params = array()) {}

    /**
     * Check if a helper has a default value set using Phalcon\Tag::setDefault()
     * or value from $_POST
     *
     * @param string $name
     * @return bool
     */
    public static function hasValue($name): bool {}

    /**
     * Builds a HTML input[type="hidden"] tag
     *
     * ```php
     * echo Phalcon\Tag::hiddenField(
     *     [
     *         "name",
     *         "value" => "mike",
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function hiddenField($parameters): string {}

    /**
     * Builds HTML IMG tags
     *
     * ```php
     * echo Phalcon\Tag::image("img/bg.png");
     *
     * echo Phalcon\Tag::image(
     *     [
     *         "img/photo.jpg",
     *         "alt" => "Some Photo",
     *     ]
     * );
     * ```
     *
     * Volt Syntax:
     * ```php
     * {{ image("img/bg.png") }}
     * {{ image("img/photo.jpg", "alt": "Some Photo") }}
     * {{ image("http://static.mywebsite.com/img/bg.png", false) }}
     * ```
     *
     * @param array $parameters
     * @param bool $local
     * @return string
     */
    public static function image($parameters = null, bool $local = true): string {}

    /**
     * Builds a HTML input[type="image"] tag
     *
     * ```php
     * echo Phalcon\Tag::imageInput(
     *     [
     *         "src" => "/img/button.png",
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ image_input("src": "/img/button.png") }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function imageInput($parameters): string {}

    /**
     * Builds a SCRIPT[type="javascript"] tag
     *
     * ```php
     * echo Phalcon\Tag::javascriptInclude(
     *     "http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js",
     *     false
     * );
     *
     * echo Phalcon\Tag::javascriptInclude("javascript/jquery.js");
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ javascript_include("http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js", false) }}
     * {{ javascript_include("javascript/jquery.js") }}
     * ```
     *
     * @param array $parameters
     * @param bool $local
     * @return string
     */
    public static function javascriptInclude($parameters = null, bool $local = true): string {}

    /**
     * Builds a HTML A tag using framework conventions
     *
     * ```php
     * echo Phalcon\Tag::linkTo("signup/register", "Register Here!");
     *
     * echo Phalcon\Tag::linkTo(
     *     [
     *         "signup/register",
     *         "Register Here!"
     *     ]
     * );
     *
     * echo Phalcon\Tag::linkTo(
     *     [
     *         "signup/register",
     *         "Register Here!",
     *         "class" => "btn-primary",
     *     ]
     * );
     *
     * echo Phalcon\Tag::linkTo("http://phalconphp.com/", "Phalcon", false);
     *
     * echo Phalcon\Tag::linkTo(
     *     [
     *         "http://phalconphp.com/",
     *         "Phalcon Home",
     *         false,
     *     ]
     * );
     *
     * echo Phalcon\Tag::linkTo(
     *     [
     *         "http://phalconphp.com/",
     *         "Phalcon Home",
     *         "local" => false,
     *     ]
     * );
     *
     * echo Phalcon\Tag::linkTo(
     *     [
     *         "action" => "http://phalconphp.com/",
     *         "text"   => "Phalcon Home",
     *         "local"  => false,
     *         "target" => "_new"
     *     ]
     * );
     *
     * ```
     *
     * @param array|string $parameters
     * @param string $text
     * @param bool $local
     * @return string
     */
    public static function linkTo($parameters, $text = null, $local = true): string {}

    /**
     * Builds a HTML input[type="month"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function monthField($parameters): string {}

    /**
     * Builds a HTML input[type="number"] tag
     *
     * ```php
     * echo Phalcon\Tag::numericField(
     *     [
     *         "price",
     *         "min" => "1",
     *         "max" => "5",
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function numericField($parameters): string {}

    /**
     * Builds a HTML input[type="password"] tag
     *
     * ```php
     * echo Phalcon\Tag::passwordField(
     *     [
     *         "name",
     *         "size" => 30,
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function passwordField($parameters): string {}

    /**
     * Prepends a text to current document title
     *
     * @param mixed $title
     */
    public static function prependTitle($title) {}

    /**
     * Builds a HTML input[type="radio"] tag
     *
     * ```php
     * echo Phalcon\Tag::radioField(
     *     [
     *         "weather",
     *         "value" => "hot",
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ radio_field("Save") }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function radioField($parameters): string {}

    /**
     * Builds a HTML input[type="range"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function rangeField($parameters): string {}

    /**
     * Renders parameters keeping order in their HTML attributes
     *
     * @param string $code
     * @param array $attributes
     * @return string
     */
    public static function renderAttributes(string $code, array $attributes): string {}

    /**
     * Renders the title with title tags. The title is automaticall escaped
     *
     * ```php
     * Tag::prependTitle('Hello');
     * Tag::setTitle('World');
     * Tag::appendTitle('from Phalcon');
     *
     * echo Tag::renderTitle();             // <title>Hello World from Phalcon</title>
     * echo Tag::renderTitle(false);        // <title>World from Phalcon</title>
     * echo Tag::renderTitle(true, false);  // <title>Hello World</title>
     * echo Tag::renderTitle(false, false); // <title>World</title>
     * ```
     *
     * ```php
     * {{ render_title() }}
     * ```
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public static function renderTitle(bool $prepend = true, bool $append = true): string {}

    /**
     * Resets the request and internal values to avoid those fields will have
     * any default value.
     *
     * @deprecated Will be removed in 4.0.0
     * @deprecated
     */
    public static function resetInput() {}

    /**
     * Builds a HTML input[type="search"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function searchField($parameters): string {}

    /**
     * Builds a HTML SELECT tag using a Phalcon\Mvc\Model resultset as options
     *
     * ```php
     * echo Phalcon\Tag::select(
     *     [
     *         "robotId",
     *         Robots::find("type = "mechanical""),
     *         "using" => ["id", "name"],
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ select("robotId", robots, "using": ["id", "name"]) }}
     * ```
     *
     * @param array $parameters
     * @param array $data
     * @return string
     */
    public static function select($parameters, $data = null): string {}

    /**
     * Builds a HTML SELECT tag using a PHP array for options
     *
     * ```php
     * echo Phalcon\Tag::selectStatic(
     *     "status",
     *     [
     *         "A" => "Active",
     *         "I" => "Inactive",
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @param array $data
     * @return string
     */
    public static function selectStatic($parameters, $data = null): string {}

    /**
     * Set autoescape mode in generated html
     *
     * @param bool $autoescape
     */
    public static function setAutoescape(bool $autoescape) {}

    /**
     * Assigns default values to generated tags by helpers
     *
     * ```php
     * // Assigning "peter" to "name" component
     * Phalcon\Tag::setDefault("name", "peter");
     *
     * // Later in the view
     * echo Phalcon\Tag::textField("name"); // Will have the value "peter" by default
     * ```
     *
     * @param string $id
     * @param string $value
     */
    public static function setDefault(string $id, $value) {}

    /**
     * Assigns default values to generated tags by helpers
     *
     * ```php
     * // Assigning "peter" to "name" component
     * Phalcon\Tag::setDefaults(
     *     [
     *         "name" => "peter",
     *     ]
     * );
     *
     * // Later in the view
     * echo Phalcon\Tag::textField("name"); // Will have the value "peter" by default
     * ```
     *
     * @param array $values
     * @param bool $merge
     */
    public static function setDefaults(array $values, bool $merge = false) {}

    /**
     * Sets the dependency injector container.
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public static function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Set the document type of content
     *
     * @param int $doctype
     */
    public static function setDocType(int $doctype) {}

    /**
     * Set the title of view content
     *
     * ```php
     * Phalcon\Tag::setTitle("Welcome to my Page");
     * ```
     *
     * @param string $title
     */
    public static function setTitle(string $title) {}

    /**
     * Set the title separator of view content
     *
     * ```php
     * Phalcon\Tag::setTitleSeparator("-");
     * ```
     *
     * @param string $titleSeparator
     */
    public static function setTitleSeparator(string $titleSeparator) {}

    /**
     * Builds a LINK[rel="stylesheet"] tag
     *
     * ```php
     * echo Phalcon\Tag::stylesheetLink(
     *     "http://fonts.googleapis.com/css?family=Rosario",
     *     false
     * );
     *
     * echo Phalcon\Tag::stylesheetLink("css/style.css");
     * ```
     *
     * Volt Syntax:
     * ```php
     * {{ stylesheet_link("http://fonts.googleapis.com/css?family=Rosario", false) }}
     * {{ stylesheet_link("css/style.css") }}
     * ```
     *
     * @param array $parameters
     * @param bool $local
     * @return string
     */
    public static function stylesheetLink($parameters = null, bool $local = true): string {}

    /**
     * Builds a HTML input[type="submit"] tag
     *
     * ```php
     * echo Phalcon\Tag::submitButton("Save")
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ submit_button("Save") }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function submitButton($parameters): string {}

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
    public static function tagHtml(string $tagName, $parameters = null, bool $selfClose = false, bool $onlyStart = false, bool $useEol = false): string {}

    /**
     * Builds a HTML tag closing tag
     *
     * ```php
     * echo Phalcon\Tag::tagHtmlClose("script", true);
     * ```
     *
     * @param string $tagName
     * @param bool $useEol
     * @return string
     */
    public static function tagHtmlClose(string $tagName, bool $useEol = false): string {}

    /**
     * Builds a HTML input[type="tel"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function telField($parameters): string {}

    /**
     * Builds a HTML TEXTAREA tag
     *
     * ```php
     * echo Phalcon\Tag::textArea(
     *     [
     *         "comments",
     *         "cols" => 10,
     *         "rows" => 4,
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {{ text_area("comments", "cols": 10, "rows": 4) }}
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function textArea($parameters): string {}

    /**
     * Builds a HTML input[type="text"] tag
     *
     * ```php
     * echo Phalcon\Tag::textField(
     *     [
     *         "name",
     *         "size" => 30,
     *     ]
     * );
     * ```
     *
     * @param array $parameters
     * @return string
     */
    public static function textField($parameters): string {}

    /**
     * Builds a HTML input[type="time"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function timeField($parameters): string {}

    /**
     * Builds a HTML input[type="url"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function urlField($parameters): string {}

    /**
     * Builds a HTML input[type="week"] tag
     *
     * @param array $parameters
     * @return string
     */
    public static function weekField($parameters): string {}

    /**
     * Builds generic INPUT tags
     *
     * @param string $type
     * @param array $parameters
     * @param bool $asValue
     * @return string
     */
    static final protected function inputField(string $type, $parameters, bool $asValue = false): string {}

    /**
     * Builds INPUT tags that implements the checked attribute
     *
     * @param string $type
     * @param array $parameters
     * @return string
     */
    static final protected function inputFieldChecked(string $type, $parameters): string {}

}
