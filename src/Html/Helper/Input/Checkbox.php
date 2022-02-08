<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Escaper\EscaperInterface;

/**
 * Class Checkbox
 *
 * @property array $label
 */
class Checkbox extends \Phalcon\Html\Helper\Input\AbstractInput
{
    /**
     * @var array
     */
    protected $label = [];

    /**
     * @var string
     */
    protected $type = 'checkbox';

    /**
     * AbstractHelper constructor.
     *
     * @param EscaperInterface $escaper
     */
    public function __construct(\Phalcon\Html\Escaper\EscaperInterface $escaper)
    {
    }

    /**
     * Returns the HTML for the input.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Attaches a label to the element
     *
     * @param array $attributes
     *
     * @return Checkbox
     */
    public function label(array $attributes = []): Checkbox
    {
    }

    /**
     * Processes the checked value
     *
     * @return void
     */
    private function processChecked(): void
    {
    }

    /**
     * Returns the unchecked hidden element if available
     *
     * @return string
     */
    private function processUnchecked(): string
    {
    }
}
