<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

/**
 * Phalcon\Escaper
 *
 * Escapes different kinds of text securing them. By using this component you
 * may prevent XSS attacks.
 *
 * This component only works with UTF-8. The PREG extension needs to be compiled
 * with UTF-8 support.
 *
 * ```php
 * $escaper = new \Phalcon\Escaper();
 *
 * $escaped = $escaper->escapeCss("font-family: <Verdana>");
 *
 * echo $escaped; // font\2D family\3A \20 \3C Verdana\3E
 * ```
 */
class Escaper implements \Phalcon\Escaper\EscaperInterface
{
    /**
     * @var bool
     */
    protected $doubleEncode = true;

    /**
     * @var string
     */
    protected $encoding = 'utf-8';


    protected $htmlEscapeMap = null;


    protected $htmlQuoteType = 3;


    /**
     * Detect the character encoding of a string to be handled by an encoder.
     * Special-handling for chr(172) and chr(128) to chr(159) which fail to be
     * detected by mb_detect_encoding()
     *
     * @param string $str
     * @return string|null
     */
    final public function detectEncoding(string $str): ?string
    {
    }

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $css
     * @return string
     */
    public function escapeCss(string $css): string
    {
    }

    /**
     * Escape JavaScript strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $js
     * @return string
     */
    public function escapeJs(string $js): string
    {
    }

    /**
     * Escapes a HTML string. Internally uses htmlspecialchars
     *
     * @param string $text
     * @return string
     */
    public function escapeHtml(string $text = null): string
    {
    }

    /**
     * Escapes a HTML attribute string
     *
     * @param string $attribute
     * @return string
     */
    public function escapeHtmlAttr(string $attribute = null): string
    {
    }

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $url
     * @return string
     */
    public function escapeUrl(string $url): string
    {
    }

    /**
     * Returns the internal encoding used by the escaper
     *
     * @return string
     */
    public function getEncoding(): string
    {
    }

    /**
     * Utility to normalize a string's encoding to UTF-32.
     *
     * @param string $str
     * @return string
     */
    final public function normalizeEncoding(string $str): string
    {
    }

    /**
     * Sets the double_encode to be used by the escaper
     *
     * ```php
     * $escaper->setDoubleEncode(false);
     * ```
     *
     * @param bool $doubleEncode
     * @return void
     */
    public function setDoubleEncode(bool $doubleEncode)
    {
    }

    /**
     * Sets the encoding to be used by the escaper
     *
     * ```php
     * $escaper->setEncoding("utf-8");
     * ```
     *
     * @param string $encoding
     * @return void
     */
    public function setEncoding(string $encoding)
    {
    }

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * ```php
     * $escaper->setHtmlQuoteType(ENT_XHTML);
     * ```
     *
     * @param int $quoteType
     * @return void
     */
    public function setHtmlQuoteType(int $quoteType)
    {
    }
}
