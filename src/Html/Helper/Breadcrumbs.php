<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Mvc\Url\UrlInterface;
use Phalcon\Traits\Support\Helper\Str\InterpolateTrait;

/**
 * This component offers an easy way to create breadcrumbs for your application.
 * The resulting HTML when calling `render()` will have each breadcrumb enclosed
 * in `<li>` tags, while the whole string is enclosed in `<nav>` and `<ol>` tags.
 *
 * @phpstan-import-type html_breadcrumb_attributes from HtmlTypes
 * @phpstan-import-type html_breadcrumb_data from HtmlTypes
 * @phpstan-import-type html_breadcrumb_element from HtmlTypes
 * @phpstan-import-type html_breadcrumb_template from HtmlTypes
 */
class Breadcrumbs extends \Phalcon\Html\Helper\AbstractHelper
{
    use \Phalcon\Traits\Support\Helper\Str\InterpolateTrait;


    /**
     * @phpstan-var html_breadcrumb_attributes
     */
    private array $attributes = [];

    /**
     * Keeps all the breadcrumbs.
     *
     * @var html_breadcrumb_data
     */
    private array $data = [];

    /**
     * Link prefix prepended to every non-empty link during rendering.
     * Auto-populated from the Url service when one is injected.
     */
    private string $prefix = '';

    /**
     * Crumb separator.
     */
    private string $separator = '<li>/</li>';

    /**
     * The HTML template to use to render the breadcrumbs.
     *
     * @phpstan-var html_breadcrumb_template
     */
    private $template = ['main' => '
<nav%attributes%>
    <ol>
%items%
    </ol>
</nav>', 'line' => '<li%attributes%><a href=\\\"%link%\\\">%icon%%text%</a></li>', 'last' => '<li><span%attributes%>%text%</span></li>'];

    /**
     * Optional Url service used to resolve links via get().
     * When set, takes priority over the string prefix.
     */
    private ?\Phalcon\Mvc\Url\UrlInterface $url = null;

    /**
     * AbstractHelper constructor.
     *
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     * @param \Phalcon\Mvc\Url\UrlInterface|null $url
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?\Phalcon\Mvc\Url\UrlInterface $url = null)
    {
    }

    /**
     * Sets the indent and delimiter and returns the object back.
     *
     * @param string $indent
     * @param string|null $delimiter
     * @return static
     */
    public function __invoke(string $indent = '    ', ?string $delimiter = null): static
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
     * @phpstan-param html_breadcrumb_attributes $attributes
     * @param string $text
     * @param string $link
     * @param string $icon
     * @param array $attributes
     * @return static
     */
    public function add(string $text, string $link = '', string $icon = '', array $attributes = []): static
    {
    }

    /**
     * Clears the crumbs
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
     * Clear the attributes of the parent element
     *
     * @return static
     */
    public function clearAttributes(): static
    {
    }

    /**
     * Get the attributes of the parent element
     *
     * @phpstan-return html_breadcrumb_attributes
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Returns the link prefix.
     *
     * @return string
     */
    public function getPrefix(): string
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
     * @phpstan-return html_breadcrumb_template
     * @return array
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
     * Set the attributes for the parent element
     *
     * @phpstan-param html_breadcrumb_attributes $attributes
     * @param array $attributes
     * @return static
     */
    public function setAttributes(array $attributes): static
    {
    }

    /**
     * Set the link prefix prepended to every non-empty link during rendering.
     * When a Url service was injected, calling this method replaces it.
     *
     * @param string $prefix
     * @return static
     */
    public function setPrefix(string $prefix): static
    {
    }

    /**
     * Set the separator
     *
     * @param string $separator
     * @return static
     */
    public function setSeparator(string $separator): static
    {
    }

    /**
     * Set the HTML template
     *
     * @param string $main
     * @param string $line
     * @param string $last
     * @return static
     */
    public function setTemplate(string $main, string $line, string $last): static
    {
    }

    /**
     * Returns the internal breadcrumbs array
     *
     * @phpstan-return html_breadcrumb_data
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * @phpstan-param html_breadcrumb_element $element
     * @param string $template
     * @param array $element
     * @return string
     */
    private function getLink(string $template, array $element): string
    {
    }

    /**
     * Processes attributes
     *
     * @phpstan-param html_breadcrumb_attributes $attributes
     * @param array $attributes
     * @return string
     */
    private function processAttributes(array $attributes): string
    {
    }
}
