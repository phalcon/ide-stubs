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
 * Class Anchor
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Anchor extends \Phalcon\Html\Helper\AbstractHelper
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
     * Produce a <a> tag
     *
     * @phpstan-param html_attributes $attributes
     * @param string $href
     * @param string $text
     * @param array $attributes
     * @param bool $raw
     * @return string
     */
    public function __invoke(string $href, string $text, array $attributes = [], bool $raw = false): string
    {
    }
}
