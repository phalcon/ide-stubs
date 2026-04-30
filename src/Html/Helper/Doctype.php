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
    /**
     * @var int
     */
    const int HTML32 = 1;

    /**
     * @var int
     */
    const int HTML401_STRICT = 2;

    /**
     * @var int
     */
    const int HTML401_TRANSITIONAL = 3;

    /**
     * @var int
     */
    const int HTML401_FRAMESET = 4;

    /**
     * @var int
     */
    const int HTML5 = 5;

    /**
     * @var int
     */
    const int XHTML10_STRICT = 6;

    /**
     * @var int
     */
    const int XHTML10_TRANSITIONAL = 7;

    /**
     * @var int
     */
    const int XHTML10_FRAMESET = 8;

    /**
     * @var int
     */
    const int XHTML11 = 9;

    /**
     * @var int
     */
    const int XHTML20 = 10;

    /**
     * @var int
     */
    const int XHTML5 = 11;

    /**
     * @var string
     */
    private $delimiter;

    /**
     * @var int
     */
    private $type;

    public function __construct()
    {
    }

    /**
     * Produce a <doctype> tag
     *
     * @param int    $type
     * @param string $delimiter
     * @return Doctype
     */
    public function __invoke(int $type = self::HTML5, string $delimiter = '\\n'): Doctype
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * @return int
     */
    public function getType(): int
    {
    }
}
