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

/**
 * Wraps a plain PHP array as a SELECT data provider.
 *
 * Keys are option values; string values are labels;
 * array values define optgroups.
 */
class ArrayData implements \Phalcon\Contracts\Html\Helper\Input\SelectData
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     * @param array $attributes
     */
    public function __construct(array $data = [], array $attributes = [])
    {
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
    }
}
