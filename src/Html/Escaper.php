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
use Phalcon\Html\Escaper\AttributeEscaper;
use Phalcon\Html\Escaper\CssEscaper;
use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Escaper\HtmlEscaper;
use Phalcon\Html\Escaper\JsEscaper;
use Phalcon\Html\Escaper\UrlEscaper;

/**
 * Phalcon\Html\Escaper
 *
 * Escapes different kinds of text securing them. By using this component you
 * may prevent XSS attacks.
 *
 * The class is a façade over five per-context escapers (`HtmlEscaper`,
 * `AttributeEscaper`, `CssEscaper`, `JsEscaper`, `UrlEscaper`). Each can be
 * retrieved via the matching `getXxxEscaper()` accessor and substituted via
 * the matching `setXxxEscaper()` setter. The legacy `setEncoding`,
 * `setFlags`, and `setDoubleEncode` continue to fan out to all sub-objects
 * so existing code keeps working.
 *
 * This component only works with UTF-8. The PREG extension needs to be compiled
 * with UTF-8 support.
 *
 * ```php
 * $escaper = new \Phalcon\Html\Escaper();
 *
 * $escaped = $escaper->css("font-family: <Verdana>");
 *
 * echo $escaped; // font\2D family\3A \20 \3C Verdana\3E
 * ```
 *
 * @phpstan-import-type html_escaper_input from HtmlTypes
 */
class Escaper implements \Phalcon\Html\Escaper\EscaperInterface
{
    protected \Phalcon\Html\Escaper\AttributeEscaper $attributeEscaper;

    protected \Phalcon\Html\Escaper\CssEscaper $cssEscaper;

    protected \Phalcon\Html\Escaper\HtmlEscaper $htmlEscaper;

    protected \Phalcon\Html\Escaper\JsEscaper $jsEscaper;

    protected \Phalcon\Html\Escaper\UrlEscaper $urlEscaper;

    /**
     * Constructor. Accepts the legacy scalar params for backward compatibility
     * and fans them out to every sub-escaper so existing code keeps working.
     *
     * @param string $encoding
     * @param int $flags
     * @param bool $doubleEncode
     */
    public function __construct(string $encoding = 'utf-8', int $flags = 11, bool $doubleEncode = true)
    {
    }

    /**
     * Escapes a HTML attribute string or array. Delegates to `AttributeEscaper`.
     *
     * @phpstan-param html_escaper_input $input
     * @param mixed $input
     * @return string
     */
    public function attributes($input = null): string
    {
    }

    /**
     * Escape CSS strings. Delegates to `CssEscaper`.
     *
     * @param string $input
     * @return string
     */
    public function css(string $input): string
    {
    }

    /**
     * Detects the character encoding of a string. Delegates to `HtmlEscaper`.
     *
     * @param string $input
     * @return string|null
     */
    final public function detectEncoding(string $input): string|null
    {
    }

    /**
     * @deprecated
     * @param string $input
     * @return string
     */
    public function escapeCss(string $input): string
    {
    }

    /**
     * @deprecated
     * @param string|null $input
     * @return string
     */
    public function escapeHtml(?string $input = null): string
    {
    }

    /**
     * @deprecated
     * @param string|null $input
     * @return string
     */
    public function escapeHtmlAttr(?string $input = null): string
    {
    }

    /**
     * @deprecated
     * @param string $input
     * @return string
     */
    public function escapeJs(string $input): string
    {
    }

    /**
     * @deprecated
     * @param string $input
     * @return string
     */
    public function escapeUrl(string $input): string
    {
    }

    /**
     * @return AttributeEscaper
     */
    public function getAttributeEscaper(): AttributeEscaper
    {
    }

    /**
     * @return CssEscaper
     */
    public function getCssEscaper(): CssEscaper
    {
    }

    /**
     * Returns the encoding from the HtmlEscaper.
     *
     * @return string
     */
    public function getEncoding(): string
    {
    }

    /**
     * Returns the flags from the HtmlEscaper.
     *
     * @return int
     */
    public function getFlags(): int
    {
    }

    /**
     * @return HtmlEscaper
     */
    public function getHtmlEscaper(): HtmlEscaper
    {
    }

    /**
     * @return JsEscaper
     */
    public function getJsEscaper(): JsEscaper
    {
    }

    /**
     * @return UrlEscaper
     */
    public function getUrlEscaper(): UrlEscaper
    {
    }

    /**
     * Escapes a HTML string. Delegates to `HtmlEscaper`.
     *
     * @param string|null $input
     *
     * @return string
     */
    public function html(?string $input = null): string
    {
    }

    /**
     * Escape javascript strings. Delegates to `JsEscaper`.
     *
     * @param string $input
     * @return string
     */
    public function js(string $input): string
    {
    }

    /**
     * Normalizes a string's encoding to UTF-32. Delegates to `HtmlEscaper`.
     *
     * @param string $input
     * @return string
     */
    final public function normalizeEncoding(string $input): string
    {
    }

    /**
     * @param AttributeEscaper $escaper
     * @return static
     */
    public function setAttributeEscaper(\Phalcon\Html\Escaper\AttributeEscaper $escaper): static
    {
    }

    /**
     * @param CssEscaper $escaper
     * @return static
     */
    public function setCssEscaper(\Phalcon\Html\Escaper\CssEscaper $escaper): static
    {
    }

    /**
     * Sets the double_encode flag. Fans out to all sub-escapers.
     *
     * @param bool $doubleEncode
     * @return static
     */
    public function setDoubleEncode(bool $doubleEncode): static
    {
    }

    /**
     * Sets the encoding. Fans out to all sub-escapers.
     *
     * @param string $encoding
     * @return static
     */
    public function setEncoding(string $encoding): static
    {
    }

    /**
     * Sets the htmlspecialchars flags. Fans out to all sub-escapers.
     *
     * @param int $flags
     * @return static
     */
    public function setFlags(int $flags): static
    {
    }

    /**
     * @param HtmlEscaper $escaper
     * @return static
     */
    public function setHtmlEscaper(\Phalcon\Html\Escaper\HtmlEscaper $escaper): static
    {
    }

    /**
     * Sets the HTML quoting type for htmlspecialchars.
     *
     * @deprecated
     * @param int $flags
     * @return static
     */
    public function setHtmlQuoteType(int $flags): static
    {
    }

    /**
     * @param JsEscaper $escaper
     * @return static
     */
    public function setJsEscaper(\Phalcon\Html\Escaper\JsEscaper $escaper): static
    {
    }

    /**
     * @param UrlEscaper $escaper
     * @return static
     */
    public function setUrlEscaper(\Phalcon\Html\Escaper\UrlEscaper $escaper): static
    {
    }

    /**
     * Escapes a URL. Delegates to `UrlEscaper`.
     *
     * @param string $input
     * @return string
     */
    public function url(string $input): string
    {
    }
}
