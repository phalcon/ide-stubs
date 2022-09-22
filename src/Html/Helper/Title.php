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
 *
 * @property array  $append
 * @property string $delimiter
 * @property string $indent
 * @property array  $prepend
 * @property string $title
 * @property string $separator
 */
class Title extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @var array
     */
    protected $append = [];

    /**
     * @var array
     */
    protected $prepend = [];

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $separator = '';

    /**
     * Sets the separator and returns the object back
     *
     * @param string      $indent
     * @param string|null $delimiter
     *
     * @return Title
     */
    public function __invoke(string $indent = '    ', string $delimiter = null): Title
    {
    }

    /**
     * Returns the title tags
     *
     * @return string
     * @throws Exception
     */
    public function __toString()
    {
    }

    /**
     * Appends text to current document title
     *
     * @param string $text
     * @param bool   $raw
     *
     * @return Title
     */
    public function append(string $text, bool $raw = false): Title
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
     * Sets the title
     *
     * @param string $text
     * @param bool   $raw
     *
     * @return Title
     */
    public function set(string $text, bool $raw = false): Title
    {
    }

    /**
     * Sets the separator
     *
     * @param string $separator
     * @param bool   $raw
     *
     * @return Title
     */
    public function setSeparator(string $separator, bool $raw = false): Title
    {
    }

    /**
     * Prepends text to current document title
     *
     * @param string $text
     * @param bool   $raw
     *
     * @return Title
     */
    public function prepend(string $text, bool $raw = false): Title
    {
    }
}
