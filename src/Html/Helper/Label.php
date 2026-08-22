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
 * Class Label
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Label extends \Phalcon\Html\Helper\AbstractHelper
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
     * Produce a `<label>` tag.
     *
     * @phpstan-param html_attributes $attributes
     * @param string $label
     * @param array $attributes
     * @param bool $raw
     * @return string
     */
    public function __invoke(string $label, array $attributes = [], bool $raw = false): string
    {
    }
}
