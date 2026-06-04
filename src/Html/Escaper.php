<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

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
 * @property AttributeEscaper $attributeEscaper
 * @property CssEscaper       $cssEscaper
 * @property HtmlEscaper      $htmlEscaper
 * @property JsEscaper        $jsEscaper
 * @property UrlEscaper       $urlEscaper
 */
class Escaper implements \Phalcon\Html\Escaper\EscaperInterface
{
    /**
     * @var AttributeEscaper
     */
    protected $attributeEscaper;

    /**
     * @var CssEscaper
     */
    protected $cssEscaper;

    /**
     * @var HtmlEscaper
     */
    protected $htmlEscaper;

    /**
     * @var JsEscaper
     */
    protected $jsEscaper;

    /**
     * @var UrlEscaper
     */
    protected $urlEscaper;

    /**
     * @param string $encoding
     * @param int $flags
     * @param bool $doubleEncode
     */
    public function __construct(string $encoding = 'utf-8', int $flags = 11, bool $doubleEncode = true)
    {
    }

    /**
     * Escapes a HTML attribute string or array. Delegates to the configured
     * `AttributeEscaper`.
     *
     * @param array|string $input
     *
     * @return string
     */
    public function attributes($input = null): string
    {
    }

    /**
     * Escape CSS strings. Delegates to the configured `CssEscaper`.
     *
     * @param string $input
     *
     * @return string
     */
    public function css(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string|null
     */
    final public function detectEncoding(string $input): string|null
    {
    }

    /**
     * @param string $input
     *
     * @return string
     * @deprecated
     */
    public function escapeCss(string $input): string
    {
    }

    /**
     * @param string|null $input
     *
     * @return string
     * @deprecated
     */
    public function escapeHtml(?string $input = null): string
    {
    }

    /**
     * @param string|null $input
     *
     * @return string
     * @deprecated
     */
    public function escapeHtmlAttr(?string $input = null): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     * @deprecated
     */
    public function escapeJs(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     * @deprecated
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
     * @return string
     */
    public function getEncoding(): string
    {
    }

    /**
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
     * Escapes a HTML string. Delegates to the configured `HtmlEscaper`.
     *
     * @param string|null $input
     *
     * @return string
     */
    public function html(?string $input = null): string
    {
    }

    /**
     * Escape javascript strings. Delegates to the configured `JsEscaper`.
     *
     * @param string $input
     *
     * @return string
     */
    public function js(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     */
    final public function normalizeEncoding(string $input): string
    {
    }

    /**
     * @param AttributeEscaper $escaper
     *
     * @return static
     */
    public function setAttributeEscaper(\Phalcon\Html\Escaper\AttributeEscaper $escaper): static
    {
    }

    /**
     * @param CssEscaper $escaper
     *
     * @return static
     */
    public function setCssEscaper(\Phalcon\Html\Escaper\CssEscaper $escaper): static
    {
    }

    /**
     * Sets the double_encode flag. Fans out to all sub-objects.
     *
     * @param bool $doubleEncode
     * @return static
     */
    public function setDoubleEncode(bool $doubleEncode): static
    {
    }

    /**
     * Sets the encoding. Fans out to all sub-objects.
     *
     * @param string $encoding
     * @return static
     */
    public function setEncoding(string $encoding): static
    {
    }

    /**
     * Sets the htmlspecialchars flags. Fans out to all sub-objects.
     *
     * @param int $flags
     * @return static
     */
    public function setFlags(int $flags): static
    {
    }

    /**
     * @param HtmlEscaper $escaper
     *
     * @return static
     */
    public function setHtmlEscaper(\Phalcon\Html\Escaper\HtmlEscaper $escaper): static
    {
    }

    /**
     * @param int $flags
     *
     * @deprecated
     * @return static
     */
    public function setHtmlQuoteType(int $flags): static
    {
    }

    /**
     * @param JsEscaper $escaper
     *
     * @return static
     */
    public function setJsEscaper(\Phalcon\Html\Escaper\JsEscaper $escaper): static
    {
    }

    /**
     * @param UrlEscaper $escaper
     *
     * @return static
     */
    public function setUrlEscaper(\Phalcon\Html\Escaper\UrlEscaper $escaper): static
    {
    }

    /**
     * Escapes a URL. Delegates to the configured `UrlEscaper`.
     *
     * @param string $input
     *
     * @return string
     */
    public function url(string $input): string
    {
    }
}
