<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Escaper\EscaperInterface;

/**
 * Class Ol
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Ol extends \Phalcon\Html\Helper\AbstractList
{
    protected bool $forceRaw = false;

    /**
     * @param \Phalcon\Html\Escaper\EscaperInterface $escaper
     * @param Doctype|null $doctype
     * @param bool $forceRaw
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, ?Doctype $doctype = null, bool $forceRaw = false)
    {
    }

    /**
     * Add an element to the list
     *
     * @phpstan-param html_attributes $attributes
     * @param string $text
     * @param array $attributes
     * @param bool $raw
     * @return static
     */
    public function add(string $text, array $attributes = [], bool $raw = false): static
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
