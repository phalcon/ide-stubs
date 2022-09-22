<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

/**
 * Creates Doctype tags
 */
class Doctype
{
    const HTML32 = 1;

    const HTML401_STRICT = 2;

    const HTML401_TRANSITIONAL = 3;

    const HTML401_FRAMESET = 4;

    const HTML5 = 5;

    const XHTML10_STRICT = 6;

    const XHTML10_TRANSITIONAL = 7;

    const XHTML10_FRAMESET = 8;

    const XHTML11 = 9;

    const XHTML20 = 10;

    const XHTML5 = 11;

    /**
     * @var string
     */
    private $delimiter;

    /**
     * @var int
     */
    private $flag;

    public function __construct()
    {
    }

    /**
     * Produce a <doctype> tag
     *
     * @param int    $flag
     * @param string $delimiter
     * @return Doctype
     */
    public function __invoke(int $flag = self::HTML5, string $delimiter = '\\n'): Doctype
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }
}
