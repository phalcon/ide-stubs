<?php

namespace Phalcon\Html;

use Phalcon\DiInterface;

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
    private $separator = " / ";

    /**
     * The HTML template to use to render the breadcrumbs.
     * 
     * @var string
     */
    private $template = "<dt><a href=\"%link%\">%label%</a></dt>";

    /**
     * Adds a new crumb.
     *
     * <code>
     * // Adding a crumb with a link
     * $breadcrumbs->add("Home", "/");
     *
     * // Adding a crumb without a link (normally the last one)
     * $breadcrumbs->add("Users");
     * </code>
     */
    public function add(string $label, string $link = "") : Breadcrumbs
    {
    }

    /**
     * Clears the crumbx
     *
     * <code>
     * $breadcrumbs->clear()
     * </code>
     */
    public function clear() : void
    {
    }

    /**
     * Removes crumb by url.
     *
     * <code>
     * $breadcrumbs->remove("/admin/user/create");
     *
     * // remove a crumb without an url (last link)
     * $breadcrumbs->remove();
     * </code>
     */
    public function remove(string $link) : void
    {
    }

    /**
     * Renders and outputs breadcrumbs based on previously set template.
     *
     * <code>
     * // Php Engine
     * echo $breadcrumbs->render();
     * </code>
     */
    public function render() : string
    {
    }

    /**
     * Returns the internal breadcrumbs array
     */
    public function toArray() : array
    {
    }
}
