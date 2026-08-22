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
 * Class Form
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Form extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * Produce a <form> tag.
     *
     * @phpstan-param html_attributes $attributes
     *
     * @return string
     * @param array $attributes
     */
    public function __invoke(array $attributes = []): string
    {
    }
}
