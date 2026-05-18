<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Html\Escaper\EscaperInterface;
use Phalcon\Html\Exception;

/**
 * Class Button
 *
 * @property bool $forceRaw
 */
class Button extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @var bool
     */
    protected $forceRaw = false;

    /**
     * @param EscaperInterface $escaper
     * @param Doctype          $doctype
     * @param bool             $forceRaw
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper, Doctype $doctype = null, bool $forceRaw = false)
    {
    }

    /**
     * Produce a `<button>` tag.
     *
     * @param string $text
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return string
     * @throws Exception
     */
    public function __invoke(string $text, array $attributes = [], bool $raw = false): string
    {
    }
}
