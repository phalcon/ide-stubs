<?php

namespace Phalcon\Html;

/**
 * Phalcon\Html\Tag
 *
 * Phalcon\Html\Tag is designed to simplify building of HTML tags. It provides a
 * set of helpers to dynamically generate HTML.
 */
class Tag implements \Phalcon\Di\InjectionAwareInterface
{
    /**
     * Constants
     */
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

    /**
     * @var DiInterface
     */
    protected $container;

    /**
     * @var array
     */
    private $append = array();

    /**
     * @var int
     */
    private $docType = 5;

    /**
     * @var <EscaperInterface>
     */
    private $escaper;

    /**
     * @var array
     */
    private $prepend = array();

    /**
     * @var string
     */
    private $separator = '';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var array
     */
    private $values = array();

    /**
     * @var <UrlInterface>
     */
    private $url;


    /**
     * Constructor
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaper
     * @param \Phalcon\Url\UrlInterface $url
     */
    public function __construct(\Phalcon\Escaper\EscaperInterface $escaper = null, \Phalcon\Url\UrlInterface $url = null) {}

    /**
     * Appends a text to current document title
     *
     * @param mixed $title
     * @return Tag
     */
    public function appendTitle($title): Tag {}

    /**
     * Builds a HTML input[type="button"] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->button('Click Me');
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ button('Click Me') }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function button(string $name, array $parameters = array()): string {}

    /**
     * Resets the request and internal values to avoid those fields will have
     * any default value.
     */
    public function clear() {}

    /**
     * Builds a HTML tag
     *
     * Parameters
     * `onlyStart` Only process the start of th element
     * `selfClose` It is a self close element
     * `useEol`    Append PHP_EOL at the end
     *
     * @param string $tag
     * @param array $parameters
     * @return string
     */
    public function element(string $tag, array $parameters = array()): string {}

    /**
     * Builds the closing tag of an html element
     *
     * Parameters
     * `useEol`    Append PHP_EOL at the end
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tab = new Tag();
     *
     * echo $tag->elementClose(
     *     [
     *         'name' => 'aside',
     *     ]
     * ); // </aside>
     *
     * echo $tag->elementClose(
     *     [
     *         'name'   => 'aside',
     *         'useEol' => true,
     *     ]
     * ); // '</aside>' . PHP_EOL
     * ```
     *
     * @param string $tag
     * @param array $parameters
     * @return string
     */
    public function elementClose(string $tag, array $parameters = array()): string {}

    /**
     * Returns the closing tag of a form element
     *
     * @param bool $eol
     * @return string
     */
    public function endForm(bool $eol = true): string {}

    /**
     * Builds a HTML FORM tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tab = new Tag();
     *
     * echo $tag->form('posts/save');
     *
     * echo $tag->form(
     *     'posts/save',
     *     [
     *         "method" => "post",
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ form('posts/save') }}{% endraw %}
     * {% raw %}{{ form('posts/save', ['method': 'post') }}{% endraw %}
     * ```
     *
     * @param string $action
     * @param array $parameters
     * @return string
     */
    public function form(string $action, array $parameters = array()): string {}

    /**
     * Converts text to URL-friendly strings
     *
     * Parameters
     * `text`      The text to be processed
     * `separator` Separator to use (default '-')
     * `lowercase` Convert to lowercase
     * `replace`
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tab = new Tag();
     *
     * echo $tag->friendlyTitle(
     *     [
     *         'text'       => 'These are big important news',
     *         'separator' => '-',
     *     ]
     * );
     * ```
     *
     * Volt Syntax:
     * ```php
     * {% raw %}{{ friendly_title(['text': 'These are big important news', 'separator': '-']) }}{% endraw %}
     * ```
     *
     * @param string $text
     * @param array $parameters
     * @return string
     */
    public function friendlyTitle(string $text, array $parameters = array()): string {}

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface {}

    /**
     * Get the document type declaration of content. If the docType has not
     * been set properly, XHTML5 is returned
     *
     * @return string
     */
    public function getDocType(): string {}

    /**
     * Gets the current document title. The title will be automatically escaped.
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * $tag
     *        ->setTitleSeparator(' ')
     *         ->prependTitle(['Hello'])
     *         ->setTitle('World')
     *         ->appendTitle(['from Phalcon']);
     *
     * echo $tag->getTitle();             // Hello World from Phalcon
     * echo $tag->getTitle(false);        // World from Phalcon
     * echo $tag->getTitle(true, false);  // Hello World
     * echo $tag->getTitle(false, false); // World
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ get_title() }}{% endraw %}
     * ```
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public function getTitle(bool $prepend = true, bool $append = true): string {}

    /**
     * Gets the current document title separator
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->getTitleSeparator();
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ get_title_separator() }}{% endraw %}
     * ```
     *
     * @return string
     */
    public function getTitleSeparator(): string {}

    /**
     * Every helper calls this function to check whether a component has a
     * predefined value using `setAttribute` or value from $_POST
     *
     * @param string $name
     * @param array $parameters
     * @return mixed|null
     */
    public function getValue(string $name, array $parameters = array()): ? {}

    /**
     * Check if a helper has a default value set using `setAttribute()` or
     * value from $_POST
     *
     * @param string $name
     * @return bool
     */
    public function hasValue(string $name): bool {}

    /**
     * Builds HTML IMG tags
     *
     * Parameters
     * `local` Local resource or not (default `true`)
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->image('img/bg.png');
     *
     * echo $tag->image(
     *     'img/photo.jpg',
     *     [
     *         'alt' => 'Some Photo',
     *     ]
     * );
     *
     * echo $tag->image(
     *     'http://static.mywebsite.com/img/bg.png',
     *     [
     *         'local' => false,
     *     ]
     * );
     * ```
     *
     * Volt Syntax:
     * ```php
     * {% raw %}{{ image('img/bg.png') }}{% endraw %}
     * {% raw %}{{ image('img/photo.jpg', ['alt': 'Some Photo') }}{% endraw %}
     * {% raw %}{{ image('http://static.mywebsite.com/img/bg.png', ['local': false]) }}{% endraw %}
     * ```
     *
     * @param string $url
     * @param array $parameters
     * @return string
     */
    public function image(string $url = '', array $parameters = array()): string {}

    /**
     * Builds a HTML input[type="check"] tag
     *
     * ```php
     * echo $tag->inputCheckbox(
     *     [
     *         'name'  => 'terms,
     *         'value' => 'Y',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_checkbox(['name': 'terms, 'value': 'Y']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputCheckbox(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='color'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputColor(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='date'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputDate(
     *     [
     *         'name'  => 'born',
     *         'value' => '14-12-1980',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_date(['name':'born', 'value':'14-12-1980']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputDate(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='datetime'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputDateTime(
     *     [
     *         'name'  => 'born',
     *         'value' => '14-12-1980',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_date_time(['name':'born', 'value':'14-12-1980']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputDateTime(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='datetime-local'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputDateTimeLocal(
     *     [
     *         'name'  => 'born',
     *         'value' => '14-12-1980',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_date_time_local(['name':'born', 'value':'14-12-1980']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputDateTimeLocal(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='email'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputEmail(
     *     [
     *         'name' => 'email',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_email(['name': 'email']);{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputEmail(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='file'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputFile(
     *     [
     *         'name' => 'file',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_file(['name': 'file']){% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputFile(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='hidden'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputHidden(
     *     [
     *         'name'  => 'my-field',
     *         'value' => 'mike',
     *     ]
     * );
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputHidden(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type="image"] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     * echo $tag->inputImage(
     *     [
     *         'src' => '/img/button.png',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_image(['src': '/img/button.png']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputImage(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='month'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputMonth(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='number'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->numericField(
     *     [
     *         'name' => 'price',
     *         'min'  => '1',
     *         'max'  => '5',
     *     ]
     * );
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputNumeric(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='password'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->passwordField(
     *     [
     *         'name' => 'my-field',
     *         'size' => 30,
     *     ]
     * );
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputPassword(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type="radio"] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputRadio(
     *     [
     *         'name'  => 'weather',
     *         'value" => 'hot',
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ input_radio(['name': 'weather', 'value": 'hot']) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputRadio(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='range'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputRange(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='search'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputSearch(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='tel'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputTel(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='text'] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->inputText(
     *     [
     *         'name' => 'my-field',
     *         'size' => 30,
     *     ]
     * );
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputText(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='time'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputTime(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='url'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputUrl(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type='week'] tag
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function inputWeek(string $name, array $parameters = array()): string {}

    /**
     * Builds a script[type="javascript"] tag
     *
     * Parameters
     * `local` Local resource or not (default `true`)
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->javascript(
     *     'http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js',
     *        [
     *         'local' => false,
     *     ]
     * );
     *
     * echo $tag->javascript('javascript/jquery.js');
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ javascript('http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', ['local': false]) }}{% endraw %}
     * {% raw %}{{ javascript('javascript/jquery.js') }}{% endraw %}
     * ```
     *
     * @param string $url
     * @param array $parameters
     * @return string
     */
    public function javascript(string $url, array $parameters = array()): string {}

    /**
     * Builds a HTML A tag using framework conventions
     *
     * Parameters
     * `local` Local resource or not (default `true`)
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->link('signup/register', 'Register Here!');
     *
     * echo $tag->link(
     *     'signup/register',
     *     'Register Here!',
     *     [
     *         'class' => 'btn-primary',
     *     ]
     * );
     *
     * echo $tag->link(
     *     'https://phalconphp.com/',
     *     'Phalcon!',
     *     [
     *         'local' => false,
     *     ]
     * );
     *
     * echo $tag->link(
     *     'https://phalconphp.com/',
     *     'Phalcon!',
     *     [
     *         'local'  => false,
     *         'target' => '_new',
     *     ]
     * );
     * ```
     *
     * @param string $url
     * @param string $text
     * @param array $parameters
     * @return string
     */
    public function link(string $url, string $text = '', array $parameters = array()): string {}

    /**
     * Prepends a text to current document title
     *
     * @param mixed $title
     * @return Tag
     */
    public function prependTitle($title): Tag {}

    /**
     * Renders the title with title tags. The title is automaticall escaped
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * $tag
     *        ->setTitleSeparator(' ')
     *         ->prependTitle(['Hello'])
     *         ->setTitle('World')
     *         ->appendTitle(['from Phalcon']);
     *
     * echo $tag->renderTitle();             // <title>Hello World from Phalcon</title>
     * echo $tag->renderTitle(false);        // <title>World from Phalcon</title>
     * echo $tag->renderTitle(true, false);  // <title>Hello World</title>
     * echo $tag->renderTitle(false, false); // <title>World</title>
     * ```
     *
     * ```php
     * {% raw %}{{ render_title() }}{% endraw %}
     * ```
     *
     * @param bool $prepend
     * @param bool $append
     * @return string
     */
    public function renderTitle(bool $prepend = true, bool $append = true): string {}

    /**
     * Builds a HTML input[type="reset"] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->reset('Reset')
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ reset('Save') }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function reset(string $name, array $parameters = array()): string {}

    /**
     * Builds a select element. It accepts an array or a resultset from
     * a Phalcon\Mvc\Model
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->select(
     *     'status',
     *     [
     *         'id'        => 'status-id',
     *         'useEmpty'  => true,
     *         'emptyValue => '',
     *         'emptyText' => 'Choose Status...',
     *     ],
     *     [
     *         'A' => 'Active',
     *         'I' => 'Inactive',
     *     ]
     * );
     *
     * echo $tag->select(
     *     'status',
     *     [
     *         'id'        => 'status-id',
     *         'useEmpty'  => true,
     *         'emptyValue => '',
     *         'emptyText' => 'Choose Type...',
     *         'using'     => [
     *             'id,
     *             'name',
     *         ],
     *     ],
     *     Robots::find(
     *         [
     *             'conditions' => 'type = :type:',
     *             'bind'       => [
     *                 'type' => 'mechanical',
     *             ]
     *         ]
     *     )
     * );
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @param mixed $data
     * @return string
     */
    public function select(string $name, array $parameters = array(), $data = null): string {}

    /**
     * Assigns default values to generated tags by helpers
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * // Assigning 'peter' to 'name' component
     * $tag->setAttribute('name', 'peter');
     *
     * // Later in the view
     * echo $tag->inputText('name'); // Will have the value 'peter' by default
     * ```
     *
     * @param string $name
     * @param mixed $value
     * @return Tag
     */
    public function setAttribute(string $name, $value): Tag {}

    /**
     * Assigns default values to generated tags by helpers
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * // Assigning 'peter' to 'name' component
     * $tag->setAttribute(
     *     [
     *         'name' => 'peter',
     *     ]
     * );
     *
     * // Later in the view
     * echo $tag->inputText('name'); // Will have the value 'peter' by default
     * ```
     *
     * @param array $values
     * @param bool $merge
     * @return Tag
     */
    public function setAttributes(array $values, bool $merge = false): Tag {}

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Set the document type of content
     *
     * @param int $doctype
     * @return Tag
     */
    public function setDocType(int $doctype): Tag {}

    /**
     * Set the title separator of view content
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * $tag->setTitle('Phalcon Framework');
     * ```
     *
     * @param string $title
     * @return Tag
     */
    public function setTitle(string $title): Tag {}

    /**
     * Set the title separator of view content
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->setTitleSeparator('-');
     * ```
     *
     * @param string $separator
     * @return Tag
     */
    public function setTitleSeparator(string $separator): Tag {}

    /**
     * Builds a LINK[rel="stylesheet"] tag
     *
     * Parameters
     * `local` Local resource or not (default `true`)
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->stylesheet(
     *     'http://fonts.googleapis.com/css?family=Rosario',
     *     [
     *         'local' => false,
     *     ]
     * );
     *
     * echo $tag->stylesheet('css/style.css');
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ stylesheet('http://fonts.googleapis.com/css?family=Rosario', ['local': false]) }}{% endraw %}
     * {% raw %}{{ stylesheet('css/style.css') }}{% endraw %}
     * ```
     *
     * @param string $url
     * @param array $parameters
     * @return string
     */
    public function stylesheet(string $url, array $parameters = array()): string {}

    /**
     * Builds a HTML input[type="submit"] tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->submit('Save');
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ submit('Save') }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function submit(string $name, array $parameters = array()): string {}

    /**
     * Builds a HTML TEXTAREA tag
     *
     * ```php
     * use Phalcon\Html\Tag;
     *
     * $tag = new Tag();
     *
     * echo $tag->textArea(
     *     'comments',
     *     [
     *         'cols' => 10,
     *         'rows' => 4,
     *     ]
     * );
     * ```
     *
     * Volt syntax:
     * ```php
     * {% raw %}{{ text_area('comments', ['cols': 10, 'rows': 4]) }}{% endraw %}
     * ```
     *
     * @param string $name
     * @param array $parameters
     * @return string
     */
    public function textArea(string $name, array $parameters = array()): string {}

    /**
     * Returns the escaper service from the DI container
     *
     * @param string $name
     */
    private function getService(string $name) {}

    /**
     * Renders the attributes of an HTML element
     *
     * @param string $code
     * @param array $attributes
     * @return string
     */
    private function renderAttributes(string $code, array $attributes): string {}

    /**
     * Returns the closing tag depending on the doctype
     *
     * @param bool $addEol
     * @return string
     */
    private function renderCloseTag(bool $addEol = false): string {}

    /**
     * Builds `input` elements
     *
     * @param string $type
     * @param string $name
     * @param array $parameters
     * @return string
     */
    private function renderInput(string $type, string $name, array $parameters = array()): string {}

    /**
     * Builds INPUT tags that implements the checked attribute
     *
     * @param string $type
     * @param string $name
     * @param array $parameters
     * @return string
     */
    private function renderInputChecked(string $type, string $name, array $parameters = array()): string {}

    /**
     * Generates the option values or optgroup from an array
     *
     * @param array $options
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private function renderSelectArray(array $options, $value, string $closeOption): string {}

    /**
     * Generates the option values from a resultset
     *
     * @param \Phalcon\Mvc\Model\ResultsetInterface $resultset
     * @param mixed $using
     * @param mixed $value
     * @param string $closeOption
     * @return string
     */
    private function renderSelectResultset(\Phalcon\Mvc\Model\ResultsetInterface $resultset, $using, $value, string $closeOption): string {}

}
