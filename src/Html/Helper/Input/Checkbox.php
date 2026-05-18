<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

/**
 * Renders an `<input type="checkbox">`. Behavior (label wrapping, `unchecked`
 * companion, loose-by-default `checked` match) lives in `AbstractChecked`.
 */
class Checkbox extends \Phalcon\Html\Helper\Input\AbstractChecked
{
    /**
     * @var string
     */
    protected $type = 'checkbox';
}
