<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Exception;

/**
 * Class Title
 */
class Title extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @phpstan-var list<string>
     */
    protected array $append = [];

    /**
     * Untyped on purpose. A typed `array` default is shared by all instances
     * and `prepend()` mutates it in place, which corrupts the heap. See
     * team/Planning/2026-08-20-zephir-typed-array-property-shared-default.md
     *
     * @phpstan-var list<string>
     */
    protected $prepend = [];

    protected string $title = '';

    protected string $separator = '';

    /**
     * Sets the separator and returns the object back
     *
     * @param string $indent
     * @param string|null $delimiter
     * @return static
     */
    public function __invoke(string $indent = '    ', ?string $delimiter = null): static
    {
    }

    /**
     * Returns the title tags
     */
    public function __toString()
    {
    }

    /**
     * Appends text to current document title
     *
     * @param string $text
     * @param bool $raw
     * @return static
     */
    public function append(string $text, bool $raw = false): static
    {
    }

    /**
     * Returns the title
     *
     * @return string
     */
    public function get(): string
    {
    }

    /**
     * Prepends text to current document title
     *
     * @param string $text
     * @param bool $raw
     * @return static
     */
    public function prepend(string $text, bool $raw = false): static
    {
    }

    /**
     * Sets the title
     *
     * @param string $text
     * @param bool $raw
     * @return static
     */
    public function set(string $text, bool $raw = false): static
    {
    }

    /**
     * Sets the separator
     *
     * @param string $separator
     * @param bool $raw
     * @return static
     */
    public function setSeparator(string $separator, bool $raw = false): static
    {
    }
}
