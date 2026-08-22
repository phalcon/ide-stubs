<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Contracts\Html\HtmlTypes;

/**
 * Phalcon\Html\Breadcrumbs
 *
 * This component offers an easy way to create breadcrumbs for your application.
 * The resulting HTML when calling `render()` will have each breadcrumb enclosed
 * in `<dt>` tags, while the whole string is enclosed in `<dl>` tags.
 *
 * @phpstan-import-type html_breadcrumb_elements from HtmlTypes
 *
 * @deprecated Will be removed in future version
 * Use {@see \Phalcon\Html\Helper\Breadcrumbs} instead.
 */
class Breadcrumbs
{
    /**
     * Keeps all the breadcrumbs
     *
     * @phpstan-var html_breadcrumb_elements
     */
    private array $elements = [];

    /**
     * Crumb separator
     */
    private string $separator = ' / ';

    /**
     * The HTML template to use to render the breadcrumbs.
     */
    private string $template = '<dt><a href=\\\"%link%\\\">%label%</a></dt>';

    /**
     * Adds a new crumb.
     *
     * ```php
     * // Adding a crumb with a link
     * $breadcrumbs->add("Home", "/");
     *
     * // Adding a crumb without a link (normally the last one)
     * $breadcrumbs->add("Users");
     * ```
     *
     * Crumbs are stored keyed by their link, so adding two crumbs that share
     * the same link - including two link-less crumbs, which share the empty
     * string key - keeps only the last one.
     *
     * @param string $label
     * @param string $link
     * @return static
     */
    public function add(string $label, string $link = ''): static
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
     * Returns the separator
     *
     * @return string
     */
    public function getSeparator(): string
    {
    }

    /**
     * Removes crumb by url.
     *
     * ```php
     * $breadcrumbs->remove("/admin/user/create");
     *
     * // remove a crumb without an url (last link)
     * $breadcrumbs->remove();
     * ```
     *
     * @param string $link
     * @return void
     */
    public function remove(string $link): void
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
     * Set the separator
     *
     * @param string $separator
     * @return static
     */
    public function setSeparator(string $separator): static
    {
    }

    /**
     * Returns the internal breadcrumbs array
     *
     * @phpstan-return html_breadcrumb_elements
     * @return array
     */
    public function toArray(): array
    {
    }
}
