<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Escaper\Traits;

/**
 * Shared encoding/flags state and the encoding detection/normalization
 * utilities used by the per-context escaper objects (`HtmlEscaper`,
 * `AttributeEscaper`, `CssEscaper`, `JsEscaper`, `UrlEscaper`).
 */
trait EscaperTrait
{
    protected bool $doubleEncode = true;

    protected string $encoding = 'utf-8';

    /**
     * ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
     */
    protected int $flags = 11;

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
     * @return string
     */
    final public function normalizeEncoding(string $input): string
    {
    }

    /**
     * @param bool $doubleEncode
     * @return static
     */
    public function setDoubleEncode(bool $doubleEncode): static
    {
    }

    /**
     * @param string $encoding
     * @return static
     */
    public function setEncoding(string $encoding): static
    {
    }

    /**
     * @param int $flags
     * @return static
     */
    public function setFlags(int $flags): static
    {
    }
}
