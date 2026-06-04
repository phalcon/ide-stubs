<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Exception;

/**
 * @property string           $delimiter
 * @property EscaperInterface $escaper
 * @property string           $indent
 * @property int              $indentLevel
 */
abstract class AbstractHelper
{
    /**
     * @var string
     */
    protected $delimiter = '';

    /**
     * @var Doctype|null
     */
    protected $doctype = null;

    /**
     * @var EscaperInterface
     */
    protected $escaper;

    /**
     * @var string
     */
    protected $indent = '    ';

    /**
     * @var int
     */
    protected $indentLevel = 1;

    /**
     * AbstractHelper constructor.
     *
     * @param EscaperInterface $escaper
     * @param Doctype|null $doctype
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?Doctype $doctype = null)
    {
    }

    /**
     * Produces a closing tag
     *
     * @param string $tag
     * @param bool   $raw
     *
     * @return string
     */
    protected function close(string $tag, bool $raw = false): string
    {
    }

    /**
     * Forces a single key into the attribute array, stripping any user-supplied
     * value for that key first. Used by helpers whose first positional argument
     * is itself an attribute (`href` for Anchor, `src` for Img, etc.) to make
     * sure that argument always wins.
     *
     * @param string $key
     * @param string $value
     * @param array  $attributes
     *
     * @return array
     */
    protected function injectAttribute(string $key, string $value, array $attributes): array
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
     * Keeps all the attributes sorted - same order all the time
     *
     * @param array $overrides
     * @param array $attributes
     *
     * @return array
     */
    protected function orderAttributes(array $overrides, array $attributes): array
    {
    }

    /**
     * Traverses an array and calls the method defined in the first element
     * with attributes as the second, returning the resulting string
     *
     * @param array  $elements
     * @param string $delimiter
     *
     * @return string
     */
    protected function renderArrayElements(array $elements, string $delimiter): string
    {
    }

    /**
     * Renders all the attributes
     *
     * @param array $attributes
     *
     * @return string
     */
    protected function renderAttributes(array $attributes): string
    {
    }

    /**
     * Renders an element
     *
     * @param string $tag
     * @param array  $attributes
     *
     * @return string
     * @throws Exception
     */
    protected function renderElement(string $tag, array $attributes = []): string
    {
    }

    /**
     * Renders an element
     *
     * @param string $tag
     * @param string $text
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return string
     * @throws Exception
     */
    protected function renderFullElement(string $tag, string $text, array $attributes = [], bool $raw = false): string
    {
    }

    /**
     * Renders a tag
     *
     * @param string $tag
     * @param array  $attributes
     * @param string $close
     *
     * @return string
     */
    protected function renderTag(string $tag, array $attributes = [], string $close = ''): string
    {
    }

    /**
     * Produces a self close tag i.e. <img />
     *
     * @param string $tag
     * @param array  $attributes
     *
     * @return string
     */
    protected function selfClose(string $tag, array $attributes = []): string
    {
    }
}
