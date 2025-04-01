<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Support\Helper\Str\Interpolate;
use Phalcon\Html\Escaper\EscaperInterface;

/**
 * This component offers an easy way to create breadcrumbs for your application.
 * The resulting HTML when calling `render()` will have each breadcrumb enclosed
 * in `<li>` tags, while the whole string is enclosed in `<nav>` and `<ol>` tags.
 *
 * @phpstan-type TTemplate = array{
 *      main: string,
 *      line: string,
 *      last: string,
 * }
 * @phpstan-type TElement = array{
 *      attributes: array<string, string>,
 *      icon: string,
 *      link: string,
 *      text: string,
 * }
 */
class Breadcrumbs extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @var array<string, string>
     */
    private $attributes = [];

    /**
     * Keeps all the breadcrumbs.
     *
     * @var array<int, TElement>
     */
    private $data = [];

    /**
     * Crumb separator.
     *
     * @var string
     */
    private $separator = '<li>/</li>';

    /**
     * The HTML template to use to render the breadcrumbs.
     *
     * @var TTemplate
     */
    private $template = ['main' => '
<nav%attributes%>
    <ol>
%items%
    </ol>
</nav>', 'line' => '<li%attributes%><a href=\\\"%link%\\\">%icon%%text%</a></li>', 'last' => '<li><span%attributes%>%text%</span></li>'];

    /**
     * The HTML template to use to render the breadcrumbs.
     *
     * @var Interpolate
     */
    private $interpolator;

    /**
     * AbstractHelper constructor.
     *
     * @param EscaperInterface $escaper
     * @param string $indent = ""
     * @param string|null $delimiter = null
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper)
    {
    }

    /**
     * Sets the indent and delimiter and returns the object back.
     *
     * @param string $indent
     * @param string $delimiter
     * @return Breadcrumbs
     */
    public function __invoke(string $indent = '    ', string $delimiter = null): Breadcrumbs
    {
    }

    /**
     * Adds a new crumb.
     *
     * ```php
     * // Adding a crumb with a link
     * $breadcrumbs->add("Home", "/");
     *
     * // Adding a crumb with added attributes
     * $breadcrumbs->add("Home", "/", ["class" => "main"]);
     *
     * // Adding a crumb without a link (normally the last one)
     * $breadcrumbs->add("Users");
     * ```
     *
     * @param string $text
     * @param string $link
     * @param string $icon
     * @param array $attributes
     * @return Breadcrumbs
     */
    public function add(string $text, string $link = '', string $icon = '', array $attributes = []): Breadcrumbs
    {
    }

    /**
     * Clears the crumbs.
     *
     * ```php
     * $breadcrumbs->clear()
     * ```
     *
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * Clear the attributes of the parent element.
     *
     * @return Breadcrumbs
     */
    public function clearAttributes(): Breadcrumbs
    {
    }

    /**
     * Get the attributes of the parent element.
     *
     * @return array<string, string>
     */
    public function getAttributes(): array
    {
    }

    /**
     * Returns the separator.
     *
     * @return string
     */
    public function getSeparator(): string
    {
    }

    /**
     * Return the current template.
     *
     * @return TTemplate
     */
    public function getTemplate(): array
    {
    }

    /**
     * Removes crumb by url.
     *
     * ```php
     * // Remove the second element
     * $breadcrumbs->remove(2);
     * ```
     *
     * @param int $index
     * @return void
     */
    public function remove(int $index): void
    {
    }

    /**
     * Renders and outputs breadcrumbs based on previously set template.
     *
     * ```php
     * echo $breadcrumbs->render();
     * ```
     *
     * @return string
     */
    public function render(): string
    {
    }

    /**
     * Set the attributes for the parent element.
     *
     * @param array $attributes
     * @return Breadcrumbs
     */
    public function setAttributes(array $attributes): Breadcrumbs
    {
    }

    /**
     * Set the separator.
     *
     * @param string $separator
     * @return Breadcrumbs
     */
    public function setSeparator(string $separator): Breadcrumbs
    {
    }

    /**
     * Set the HTML template.
     *
     * @param string $main
     * @param string $line
     * @param string $last
     * @return Breadcrumbs
     */
    public function setTemplate(string $main, string $line, string $last): Breadcrumbs
    {
    }

    /**
     * Returns the internal breadcrumbs array.
     *
     * @return array<int, TElement>
     */
    public function toArray(): array
    {
    }

    /**
     * @param TElement $element
     * @param string $template
     * @return string
     */
    private function getLink(string $template, array $element): string
    {
    }

    /**
     * Processes attributes
     *
     * @param array $attributes
     * @return string
     */
    private function processAttributes(array $attributes): string
    {
    }
}
