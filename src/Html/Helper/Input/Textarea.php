<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Exception;

/**
 * Class Textarea
 */
class Textarea extends \Phalcon\Html\Helper\Input\AbstractInput
{
    /**
     * @var string
     */
    protected $type = 'textarea';

    /**
     * Returns the HTML for the input.
     *
     * @return string
     * @throws Exception
     */
    public function __toString()
    {
    }
}
