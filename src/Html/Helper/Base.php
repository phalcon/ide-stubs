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

/**
 * Class Base
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Base extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * Produce a `<base/>` tag.
     *
     * @phpstan-param html_attributes $attributes
     * @param string|null $href
     * @param array $attributes
     * @return string
     */
    public function __invoke(?string $href = null, array $attributes = []): string
    {
    }
}
