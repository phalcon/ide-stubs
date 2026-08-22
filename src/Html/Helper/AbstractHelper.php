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
use Phalcon\Html\Exception;

/**
 * @phpstan-import-type html_attributes from HtmlTypes
 * @phpstan-import-type html_element_store from HtmlTypes
 */
abstract class AbstractHelper
{
    protected string $delimiter = '';

    protected ?Doctype $doctype = null;

    protected \Phalcon\Html\Escaper\EscaperInterface $escaper;

    protected string $indent = '    ';

    protected int $indentLevel = 1;

    /**
     * AbstractHelper constructor.
     *
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     * @param Doctype|null $doctype
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?Doctype $doctype = null)
    {
    }

    /**
     * Produces a closing tag
     *
     * @param string $tag
     * @param bool $raw
     * @return string
     */
    protected function close(string $tag, bool $raw = false): string
    {
    }

    /**
     * Replicates the indent x times as per indentLevel
     *
     * @return string
     */
    protected function indent(): string
    {
    }

    /**
     * Forces `$key => $value` to the front of the attributes array,
     * removing any existing entry for that key. This guarantees the
     * attribute is always present and appears first in the rendered output.
     *
     * @phpstan-param html_attributes $attributes
     *
     * @phpstan-return html_attributes
     * @param string $key
     * @param string $value
     * @param array $attributes
     * @return array
     */
    protected function injectAttribute(string $key, string $value, array $attributes): array
    {
    }

    /**
     * Keeps all the attributes sorted - same order all the time
     *
     * @phpstan-param html_attributes $overrides
     * @phpstan-param html_attributes $attributes
     *
     * @phpstan-return html_attributes
     * @param array $overrides
     * @param array $attributes
     * @return array
     */
    protected function orderAttributes(array $overrides, array $attributes): array
    {
    }

    /**
     * Traverses an array and calls the method defined in the first element
     * with attributes as the second, returning the resulting string
     *
     * @phpstan-param html_element_store $elements
     * @param array $elements
     * @param string $delimiter
     * @return string
     */
    protected function renderArrayElements(array $elements, string $delimiter): string
    {
    }

    /**
     * Renders all the attributes
     *
     * @phpstan-param html_attributes $attributes
     * @param array $attributes
     * @return string
     */
    protected function renderAttributes(array $attributes): string
    {
    }

    /**
     * Renders an element
     *
     * @phpstan-param html_attributes $attributes
     * @param string $tag
     * @param array $attributes
     * @return string
     */
    protected function renderElement(string $tag, array $attributes = []): string
    {
    }

    /**
     * Renders an element
     *
     * @phpstan-param html_attributes $attributes
     * @param string $tag
     * @param string $text
     * @param array $attributes
     * @param bool $raw
     * @return string
     */
    protected function renderFullElement(string $tag, string $text, array $attributes = [], bool $raw = false): string
    {
    }

    /**
     * Renders a tag
     *
     * @phpstan-param html_attributes $attributes
     * @param string $tag
     * @param array $attributes
     * @param string $close
     * @return string
     */
    protected function renderTag(string $tag, array $attributes = [], string $close = ''): string
    {
    }

    /**
     * Produces a self close tag i.e. <img />
     *
     * @phpstan-param html_attributes $attributes
     * @param string $tag
     * @param array $attributes
     * @return string
     */
    protected function selfClose(string $tag, array $attributes = []): string
    {
    }
}
