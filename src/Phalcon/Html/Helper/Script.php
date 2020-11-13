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
 * Class Script
 */
class Script extends \Phalcon\Html\Helper\Style
{

    /**
     * Returns the necessary attributes
     *
     * @param string $src
     * @param array  $attributes
     *
     * @return array
     */
    protected function getAttributes(string $src, array $attributes): array
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }
}
