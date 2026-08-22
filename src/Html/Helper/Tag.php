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
 * Generic open-tag escape hatch. Renders just `<name attr="...">` for any
 * tag name without a dedicated helper. For an open + content + close tag
 * use `Element` instead. For self-closing void tags (img, br, hr, etc.)
 * use `VoidTag`.
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Tag extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @phpstan-param html_attributes $attributes
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function __invoke(string $name, array $attributes = []): string
    {
    }
}
