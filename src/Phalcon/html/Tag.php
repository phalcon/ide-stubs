<?php

namespace Phalcon\Html;

use Phalcon\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Escaper;
use Phalcon\EscaperInterface;
use Phalcon\Helper\Arr;
use Phalcon\Html\Exception;
use Phalcon\UrlInterface;

/**
 * Phalcon\Html\Tag
 *
 * Phalcon\Tag is designed to simplify building of HTML tags. It provides a set
 * of helpers to dynamically generate HTML.
 */
class Tag implements InjectionAwareInterface
{
	/**
	 * @var <DiInterface>
	 */
	protected $container;

	/**
	 * @var array
	 */
	private $append = [];

	/**
	 * @var int
	 */
	private $docType = 5; // HTML5

	/**
	 * @var <EscaperInterface>
	 */
	private $escaper;

	/**
	 * @var array
	 */
	private $prepend = [];

	/**
	 * @var string
	 */
	private $separator = "";

	/**
	 * @var string
	 */
	private $title = "";

	/**
	 * @var array
	 */
	private $values = [];

	/**
	 * @var <UrlInterface>
	 */
	private $url;

	/**
	 * Constants
	 */
	const HTML32               = 1;
	const HTML401_STRICT       = 2;
	const HTML401_TRANSITIONAL = 3;
	const HTML401_FRAMESET     = 4;
	const HTML5                = 5;
	const XHTML10_STRICT       = 6;
	const XHTML10_TRANSITIONAL = 7;
	const XHTML10_FRAMESET     = 8;
	const XHTML11              = 9;
	const XHTML20              = 10;
	const XHTML5               = 11;

	/**
	 * Appends a text to current document title
	 */
	public function appendTitle(array $title) : Tag
	{
	}

	/**
	 * Builds a HTML input[type="button"] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->button('Click Me')
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ button('Click Me) }}
	 * </code>
	 */
	public function button(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Resets the request and internal values to avoid those fields will have
	 * any default value.
	 */
	public function clear() : void
	{
	}

	/**
	 * Builds a HTML tag
	 *
	 * Parameters
	 * `onlyStart` Only process the start of th element
	 * `selfClose` It is a self close element
	 * `useEol`    Append PHP_EOL at the end
	 *
	 */
	public function element(string $tag, array $parameters = []) : string
	{
	}

	/**
	 * Builds the closing tag of an html element
	 *
	 * Parameters
	 * `useEol`    Append PHP_EOL at the end
	 *
	 * <code>
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
	 * </code>
	 *
	 */
	public function elementClose(string $tag, array $parameters = []) : string
	{
	}

	/**
	 * Returns the closing tag of a form element
	 */
	public function endForm(bool $eol = true) : string
	{
	}

	/**
	 * Builds a HTML FORM tag
	 *
	 * <code>
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
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ form('posts/save') }}
	 * {{ form('posts/save', ['method': 'post') }}
	 * </code>
	 */
	public function form(string $action, array $parameters = []) : string
	{
	}

	/**
	 * Converts text to URL-friendly strings
	 *
	 * Parameters
	 * `text`      The text to be processed
	 * `separator` Separator to use (default '-')
	 * `lowercase` Convert to lowercase
	 * `replace`
	 *
	 * <code>
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
	 * </code>
	 *
	 * Volt Syntax:
	 * <code>
	 * {{ friendly_title(['text': 'These are big important news', 'separator': '-']) }}
	 * </code>
	 */
	public function friendlyTitle(string $text, array $parameters = []) : string
	{
	}

	/**
	 * Returns the internal dependency injector
	 */
	public function getDI() : DiInterface
	{
	}

	/**
	 * Get the document type declaration of content. If the docType has not
	 * been set properly, XHTML5 is returned
	 */
	public function getDocType() : string
	{
	}

	/**
	 * Gets the current document title. The title will be automatically escaped.
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * $tag
	 *		->setTitleSeparator(' ')
	 * 		->prependTitle(['Hello'])
	 * 		->setTitle('World')
	 * 		->appendTitle(['from Phalcon']);
	 *
	 * echo $tag->getTitle();             // Hello World from Phalcon
	 * echo $tag->getTitle(false);        // World from Phalcon
	 * echo $tag->getTitle(true, false);  // Hello World
	 * echo $tag->getTitle(false, false); // World
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ get_title() }}
	 * </code>
	 */
	public function getTitle(bool $prepend = true, bool $append = true) : string
	{
	}

	/**
	 * Gets the current document title separator
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->getTitleSeparator();
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ get_title_separator() }}
	 * </code>
	 */
	public function getTitleSeparator() : string
	{
	}

	/**
	 * Every helper calls this function to check whether a component has a predefined
	 * value using `setAttribute` or value from $_POST
	 */
	public function getValue(string $name, array $parameters = [])	{
	}

	/**
	 * Check if a helper has a default value set using `setAttribute()` or
	 * value from $_POST
	 */
	public function hasValue(string $name) : bool
	{
	}

	/**
	 * Builds HTML IMG tags
	 *
	 * Parameters
	 * `local` Local resource or not (default `true`)
	 *
	 * <code>
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
	 * </code>
	 *
	 * Volt Syntax:
	 * <code>
	 * {{ image('img/bg.png') }}
	 * {{ image('img/photo.jpg', ['alt': 'Some Photo') }}
	 * {{ image('http://static.mywebsite.com/img/bg.png', ['local': false]) }}
	 * </code>
	 */
	public function image(string $url = "", array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type="check"] tag
	 *
	 *<code>
	 * echo $tag->inputCheckbox(
	 *     [
	 *         'name'  => 'terms,
	 *         'value' => 'Y',
	 *     ]
	 * );
	 *</code>
	 *
	 * Volt syntax:
	 *<code>
	 * {{ input_checkbox(['name': 'terms, 'value': 'Y']) }}
	 *</code>
	 *
	 * @param array parameters
	 */
	public function inputCheckbox(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='color'] tag
	 */
	public function inputColor(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='date'] tag
	 *
	 * <code>
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
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_date(['name':'born', 'value':'14-12-1980']) }}
	 * </code>
	 */
	public function inputDate(string $name, array $parameters = []) : string
	{
	}

	/**
	* Builds a HTML input[type='datetime'] tag
	*
	 * <code>
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
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_date_time(['name':'born', 'value':'14-12-1980']) }}
	 * </code>
	*/
	public function inputDateTime(string $name, array $parameters = []) : string
	{
	}

	/**
	* Builds a HTML input[type='datetime-local'] tag
	*
	 * <code>
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
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_date_time_local(['name':'born', 'value':'14-12-1980']) }}
	 * </code>
	*/
	public function inputDateTimeLocal(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='email'] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->inputEmail(
	 *     [
	 *         'name' => 'email',
 	 *     ]
	 * );
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_email(['name': 'email']);
	 * </code>
	 */
	public function inputEmail(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='file'] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->inputFile(
	 *     [
	 *         'name' => 'file',
 	 *     ]
	 * );
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_file(['name': 'file']);
	 * </code>
	 */
	public function inputFile(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='hidden'] tag
	 *
	 * <code>
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
	 * </code>
	 */
	public function inputHidden(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type="image"] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 * echo $tag->inputImage(
	 *     [
	 *         'src' => '/img/button.png',
	 *     ]
	 * );
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_image(['src': '/img/button.png']) }}
	 * </code>
	 */
	public function inputImage(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='month'] tag
	 */
	public function inputMonth(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='number'] tag
	 *
	 * <code>
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
	 * </code>
	 */
	public function inputNumeric(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='password'] tag
	 *
	 * <code>
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
	 * </code>
	 */
	public function inputPassword(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type="radio"] tag
	 *
	 * <code>
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
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ input_radio(['name': 'weather', 'value": 'hot']) }}
	 * </code>
	 */
	public function inputRadio(string $name, array $parameters = []) : string
	{
	}

	/**
	* Builds a HTML input[type='range'] tag
	*/
	public function inputRange(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='search'] tag
	 */
	public function inputSearch(string $name, array $parameters = []) : string
	{
	}

	/**
	* Builds a HTML input[type='tel'] tag
	*/
	public function inputTel(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='text'] tag
	 *
	 * <code>
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
	 * </code>
	 */
	public function inputText(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='time'] tag
	 */
	public function inputTime(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='url'] tag
	 */
	public function inputUrl(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type='week'] tag
	 */
	public function inputWeek(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a script[type="javascript"] tag
	 *
	 * Parameters
	 * `local` Local resource or not (default `true`)
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 * echo $tag->javascript(
	 *     'http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js',
	 * 	   ['local' => false]
	 * );
	 * echo $tag->javascript('javascript/jquery.js');
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ javascript('http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', ['local': false]) }}
	 * {{ javascript('javascript/jquery.js') }}
	 * </code>
	 */
	public function javascript(string $url, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML A tag using framework conventions
	 *
	 * Parameters
	 * `local` Local resource or not (default `true`)
	 *
	 * <code>
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
	 * echo $tag->linkTo(
	 *     'https://phalconphp.com/',
	 *     'Phalcon!',
	 *     [
	 *         'local'  => false,
	 *         'target' => '_new'
	 *     ]
	 * );
	 *
	 *</code>
	 */
	public function link(string $url, string $text = "", array $parameters = []) : string
	{
	}

	/**
	 * Prepends a text to current document title
	 */
	public function prependTitle(array $title) : Tag
	{
	}

	/**
	 * Renders the title with title tags. The title is automaticall escaped
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * $tag
	 *		->setTitleSeparator(' ')
	 * 		->prependTitle(['Hello'])
	 * 		->setTitle('World')
	 * 		->appendTitle(['from Phalcon']);
	 *
	 * echo $tag->renderTitle();             // <title>Hello World from Phalcon</title>
	 * echo $tag->renderTitle(false);        // <title>World from Phalcon</title>
	 * echo $tag->renderTitle(true, false);  // <title>Hello World</title>
	 * echo $tag->renderTitle(false, false); // <title>World</title>
	 * </code>
	 *
	 * <code>
	 * {{ render_title() }}
	 * </code>
	 */
	public function renderTitle(bool $prepend = true, bool $append = true) : string
	{
	}

	/**
	 * Builds a HTML input[type="reset"] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->reset('Reset')
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ reset('Save') }}
	 * </code>
	 */
	public function reset(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a select element. It accepts an array or a resultset from
	 * a Phalcon\Mvc\Model
	 *
	 *<code>
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
	 *
	 *</code>
	 *
	 * @param array parameters
	 * @param array data
	 */
	public function select(string $name, array $parameters = [], $data = null) : string
	{
	}

	/**
	 * Assigns default values to generated tags by helpers
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * // Assigning 'peter' to 'name' component
	 * $tag->setAttribute('name', 'peter');
	 *
	 * // Later in the view
	 * echo $tag->inputText('name'); // Will have the value 'peter' by default
	 * </code>
	 */
	public function setAttribute(string $name, $value) : Tag
	{
	}

	/**
	 * Assigns default values to generated tags by helpers
	 *
	 * <code>
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
	 * </code>
	 */
	public function setAttributes(array $values, bool $merge = false) : Tag
	{
	}

	/**
	 * Sets the dependency injector
	 */
	public function setDI(DiInterface $container) : void
	{
	}

	/**
	 * Set the document type of content
	 *
	 * @param int doctype A valid doctype for the content
	 *
	 * @return <Tag>
	 */
	public function setDocType(int $doctype) : Tag
	{
	}

	/**
	 * Set the title separator of view content
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * $tag->setTitle('Phalcon Framework');
	 * </code>
	 */
	public function setTitle(string $title) : Tag
	{
	}

	/**
	 * Set the title separator of view content
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *
	 * echo $tag->setTitleSeparator('-');
	 * </code>
	 */
	public function setTitleSeparator(string $separator) : Tag
	{
	}

	/**
	 * Builds a LINK[rel="stylesheet"] tag
	 *
	 * Parameters
	 * `local` Local resource or not (default `true`)
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 * echo $tag->stylesheet(
	 *     'http://fonts.googleapis.com/css?family=Rosario',
	 * 	   ['local' => false]
	 * );
	 * echo $tag->stylesheet('css/style.css');
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ stylesheet('http://fonts.googleapis.com/css?family=Rosario', ['local': false]) }}
	 * {{ stylesheet('css/style.css') }}
	 * </code>
	 */
	public function stylesheet(string $url, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML input[type="submit"] tag
	 *
	 * <code>
	 * use Phalcon\Html\Tag;
	 *
	 * $tag = new Tag();
	 *public
	 * echo $tag->submit('Save')
	 * </code>
	 *
	 * Volt syntax:
	 * <code>
	 * {{ submit('Save') }}
	 * </code>
	 */
	public function submit(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Builds a HTML TEXTAREA tag
	 *
	 *<code>
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
	 *</code>
	 *
	 * Volt syntax:
	 *<code>
	 * {{ text_area('comments', ['cols': 10, 'rows': 4]) }}
	 *</code>
	 */
	public function textArea(string $name, array $parameters = []) : string
	{
	}

	/**
	 * Returns the escaper service from the DI container
	 */
	private function getService(string $name)
	{
	}

	/**
	 * Renders the attributes of an HTML element
	 */
	private function renderAttributes(string $code, array $attributes) : string
	{
	}

	/**
	 * Returns the closing tag depending on the doctype
	 */
	private function renderCloseTag(bool $addEol = false) : string
	{
	}

	/**
	 * Builds `input` elements
	 */
	private function renderInput(string $type, string $name, array $parameters = []) : string
	{
	}
	/**
	 * Builds INPUT tags that implements the checked attribute
	 */
	private function renderInputChecked(string $type, string $name, array $parameters = []) : string
	{
	}

	/**
	 * Generates the option values or optgroup from an array
	 */
	private function renderSelectArray(array $options, $value, string $closeOption) : string
	{
	}

	/**
	 * Generates the option values from a resultset
	 */
	private function renderSelectResultset(ResulsetInterface $resultset, $using, $value, string $closeOption) : string
	{
	}
}
