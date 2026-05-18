<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Escaper;

/**
 * Shared base for the per-context escaper objects. Holds the encoding,
 * htmlspecialchars flag, and double-encode toggle, plus the encoding
 * detection / normalization utilities used by the CSS and JS escapers.
 *
 * Each concrete context (`HtmlEscaper`, `AttributeEscaper`, `CssEscaper`,
 * `JsEscaper`, `UrlEscaper`) extends this so that callers can configure
 * one context without affecting the others.
 *
 * @property bool   $doubleEncode
 * @property string $encoding
 * @property int    $flags
 */
abstract class AbstractEscaper
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
     * Detects the character encoding of a string. Special-handling for
     * chr(172) and chr(128) to chr(159) which fail to be detected by
     * `mb_detect_encoding()`.
     *
     * @param string $input
     *
     * @return string|null
     */
    final public function detectEncoding(string $input): string|null
    {
    }

    /**
     * @return bool
     */
    public function getDoubleEncode(): bool
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
     * Normalizes a string's encoding to UTF-32, used by the CSS and JS
     * escapers before invoking the C-level escape routines.
     *
     * @param string $input
     *
     * @return string
     */
    final public function normalizeEncoding(string $input): string
    {
    }

    /**
     * @param bool $doubleEncode
     */
    public function setDoubleEncode(bool $doubleEncode)
    {
    }

    /**
     * @param string $encoding
     */
    public function setEncoding(string $encoding)
    {
    }

    /**
     * @param int $flags
     */
    public function setFlags(int $flags)
    {
    }
}
