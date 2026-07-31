<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Responder;

/**
 * Base for content-type responders: composes Status, Redirect and Format
 * responders into a chain. Subclasses bind the formatter(s).
 */
abstract class AbstractFormattedResponder extends \Phalcon\ADR\Responder\ChainResponder
{
    /**
     * @param array $formatters
     */
    public function __construct(array $formatters = [])
    {
    }
}
