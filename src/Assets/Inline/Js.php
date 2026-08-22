<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets\Inline;

use Phalcon\Assets\Inline as InlineBase;
use Phalcon\Contracts\Assets\AssetsTypes;

/**
 * Represents an inline JavaScript
 *
 * @phpstan-import-type assets_attributes from AssetsTypes
 */
class Js extends \Phalcon\Assets\Inline
{
    /**
     * Js constructor.
     *
     * @param assets_attributes $attributes
     * @param string $content
     * @param bool $filter
     */
    public function __construct(string $content, bool $filter = true, array $attributes = [])
    {
    }
}
