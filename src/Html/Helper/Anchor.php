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
 * Class Anchor
 */
class Anchor extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * Produce a <a> tag
     *
     * @param string $href
     * @param string $text
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $href, string $text, array $attributes = [], bool $raw = false): string
    {
    }

    /**
     * @param string $href
     * @param array  $attributes
     *
     * @return array
     */
    protected function processAttributes(string $href, array $attributes): array
    {
    }
}
