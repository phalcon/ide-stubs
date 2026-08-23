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
 * Class Element
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Element extends \Phalcon\Html\Helper\AbstractHelper
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
     * Produce a tag.
     *
     * @phpstan-param html_attributes $attributes
     * @param string $tag
     * @param string $text
     * @param array $attributes
     * @param bool $raw
     * @return string
     */
    public function __invoke(string $tag, string $text, array $attributes = [], bool $raw = false): string
    {
    }
}
