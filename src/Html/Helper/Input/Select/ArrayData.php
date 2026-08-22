<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input\Select;

use Phalcon\Contracts\Html\Helper\Input\SelectData;
use Phalcon\Contracts\Html\HtmlTypes;

/**
 * Wraps a plain PHP array as a SELECT data provider.
 *
 * Keys are option values; string values are labels;
 * array values define optgroups.
 *
 * @phpstan-import-type html_select_attributes from HtmlTypes
 * @phpstan-import-type html_select_options from HtmlTypes
 */
class ArrayData implements \Phalcon\Contracts\Html\Helper\Input\SelectData
{
    /**
     * @param html_select_attributes
     */
    protected array $attributes = [];

    /**
     * @param html_select_options
     */
    protected array $data = [];

    /**
     * @param html_select_options    $data
     * @param html_select_attributes $attributes
     */
    public function __construct(array $data = [], array $attributes = [])
    {
    }

    /**
     * @return html_select_attributes
     */
    public function getAttributes(): array
    {
    }

    /**
     * @return html_select_options
     */
    public function getOptions(): array
    {
    }
}
