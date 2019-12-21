<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Escaper;

/**
 * Interface for Phalcon\Escaper
 */
interface EscaperInterface
{

    /**
     * Escape CSS strings by replacing non-alphanumeric chars by their
     * hexadecimal representation
     *
     * @param string $css
     * @return string
     */
    public function escapeCss(string $css): string;

    /**
     * Escapes a HTML string
     *
     * @param string $text
     * @return string
     */
    public function escapeHtml(string $text): string;

    /**
     * Escapes a HTML attribute string
     *
     * @param string $text
     * @return string
     */
    public function escapeHtmlAttr(string $text): string;

    /**
     * Escape Javascript strings by replacing non-alphanumeric chars by their
     * hexadecimal representation
     *
     * @param string $js
     * @return string
     */
    public function escapeJs(string $js): string;

    /**
     * Escapes a URL. Internally uses rawurlencode
     *
     * @param string $url
     * @return string
     */
    public function escapeUrl(string $url): string;

    /**
     * Returns the internal encoding used by the escaper
     *
     * @return string
     */
    public function getEncoding(): string;

    /**
     * Sets the encoding to be used by the escaper
     *
     * @param string $encoding
     * @return void
     */
    public function setEncoding(string $encoding);

    /**
     * Sets the HTML quoting type for htmlspecialchars
     *
     * @param int $quoteType
     * @return void
     */
    public function setHtmlQuoteType(int $quoteType);
}
