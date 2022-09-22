<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Di\DiInterface;

/**
 * Phalcon\Html\Breadcrumbs
 *
 * This component offers an easy way to create breadcrumbs for your application.
 * The resulting HTML when calling `render()` will have each breadcrumb enclosed
 * in `<dt>` tags, while the whole string is enclosed in `<dl>` tags.
 */
class Breadcrumbs
{
    /**
     * Keeps all the breadcrumbs
     *
     * @var array
     */
    private $elements = [];

    /**
     * Crumb separator
     *
     * @var string
     */
    private $separator = ' / ';

    /**
     * The HTML template to use to render the breadcrumbs.
     *
     * @var string
     */
    private $template = '<dt><a href=\\\"%link%\\\">%label%</a></dt>';

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
     * @param string $label
     * @param string $link
     * @return Breadcrumbs
     */
    public function add(string $label, string $link = ''): Breadcrumbs
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
     * Crumb separator
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
     * @param string $separator
     *
     * @return Breadcrumbs
     */
    public function setSeparator(string $separator): Breadcrumbs
    {
    }

    /**
     * Returns the internal breadcrumbs array
     *
     * @return array
     */
    public function toArray(): array
    {
    }
}
