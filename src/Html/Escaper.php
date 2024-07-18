<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html;

use Phalcon\Html\Escaper\EscaperInterface;

/**
 * Phalcon\Html\Escaper
 *
 * Escapes different kinds of text securing them. By using this component you
 * may prevent XSS attacks.
 *
 * This component only works with UTF-8. The PREG extension needs to be compiled
 * with UTF-8 support.
 *
 * ```php
 * $escaper = new \Phalcon\Html\Escaper();
 *
 * $escaped = $escaper->escapeCss("font-family: <Verdana>");
 *
 * echo $escaped; // font\2D family\3A \20 \3C Verdana\3E
 * ```
 */
class Escaper implements \Phalcon\Html\Escaper\EscaperInterface
{
    /**
     * @var bool
     */
    protected $doubleEncode = true;

    /**
     * @var string
     */
    protected $encoding = 'utf-8';

    /**
     * ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
     *
     * @var int
     */
    protected $flags = 11;

    /**
     * Escapes a HTML attribute string or array
     *
     * If the input is an array, the keys are the attribute names and the
     * values are attribute values. If a value is boolean (true/false) then
     * the attribute will have no value:
     * `['disabled' => true]` -> `'disabled``
     *
     * The resulting string will have attribute pairs separated by a space.
     *
     * @param array|string $input
     *
     * @return string
     */
    public function attributes($input): string
    {
    }

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $input
     *
     * @return string
     */
    public function css(string $input): string
    {
    }

    /**
     * Detect the character encoding of a string to be handled by an encoder.
     * Special-handling for chr(172) and chr(128) to chr(159) which fail to be
     * detected by mb_detect_encoding()
     *
     * @param string $input
     *
     * @return string|null
     */
    final public function detectEncoding(string $input): string|null
    {
    }

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $input
     *
     * @return string
     * @deprecated
     */
    public function escapeCss(string $input): string
    {
    }

    /**
     * Escape JavaScript strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $input
     *
     * @return string
     * @deprecated
     */
    public function escapeJs(string $input): string
    {
    }

    /**
     * Escapes a HTML string. Internally uses htmlspecialchars
     *
     * @param string|null $input
     *
     * @return string
     * @deprecated
     */
    public function escapeHtml(string $input = null): string
    {
    }

    /**
     * Escapes a HTML attribute string
     *
     * @param string|null $input
     *
     * @return string
     * @deprecated
     */
    public function escapeHtmlAttr(string $input = null): string
    {
    }

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $input
     *
     * @return string
     * @deprecated
     */
    public function escapeUrl(string $input): string
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
     * Escapes a HTML string. Internally uses htmlspecialchars
     *
     * @param string|null $input
     *
     * @return string
     */
    public function html(string $input = null): string
    {
    }

    /**
     * Escape javascript strings by replacing non-alphanumeric chars by their
     * hexadecimal escaped representation
     *
     * @param string $input
     *
     * @return string
     */
    public function js(string $input): string
    {
    }

    /**
     * Utility to normalize a string's encoding to UTF-32.
     *
     * @param string $input
     *
     * @return string
     */
    final public function normalizeEncoding(string $input): string
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
     * @return Escaper
     */
    public function setDoubleEncode(bool $doubleEncode): Escaper
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
     * @return EscaperInterface
     */
    public function setEncoding(string $encoding): EscaperInterface
    {
    }

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * ```php
     * $escaper->setFlags(ENT_XHTML);
     * ```
     *
     * @param int $flags
     * @return EscaperInterface
     */
    public function setFlags(int $flags): EscaperInterface
    {
    }

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * ```php
     * $escaper->setHtmlQuoteType(ENT_XHTML);
     * ```
     *
     * @param int $flags
     * @deprecated
     * @return EscaperInterface
     */
    public function setHtmlQuoteType(int $flags): EscaperInterface
    {
    }

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $input
     *
     * @return string
     */
    public function url(string $input): string
    {
    }

    /**
     * Proxy method for testing
     *
     * @param string $input
     *
     * @return string
     */
    protected function phpHtmlSpecialChars(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     */
    private function doEscapeCss(string $input): string
    {
    }

    /**
     * @param string $input
     *
     * @return string
     */
    private function doEscapeJs(string $input): string
    {
    }
}
