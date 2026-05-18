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
 * Generic open-tag escape hatch. Renders just `<name attr="...">` for any
 * tag name without a dedicated helper. For an open + content + close tag
 * use `Element` instead. For self-closing void tags (img, br, hr, etc.)
 * use `VoidTag`.
 */
class Tag extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @param string $name
     * @param array  $attributes
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $name, array $attributes = []): string
    {
    }
}
