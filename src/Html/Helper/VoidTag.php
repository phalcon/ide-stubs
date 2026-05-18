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
 * Generic void-tag escape hatch. Renders a self-closing tag for any name
 * without a dedicated helper. The trailing `/` is emitted only for XHTML
 * doctypes, matching the `Input/AbstractInput::__toString` convention.
 */
class VoidTag extends \Phalcon\Html\Helper\AbstractHelper
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
