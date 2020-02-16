<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Escaper\EscaperInterface;

/**
 * Phalcon\Html\Helper\AbstractHelper
 *
 * Abstract class for all HTML helpers
 */
abstract class AbstractHelper
{
    /**
     * @var EscaperInterface
     */
    protected $escaper;


    /**
     * Constructor
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaper
     */
    public function __construct(\Phalcon\Escaper\EscaperInterface $escaper)
    {
    }

    /**
     * Renders an element
     *
     * @param string $tag
     * @param string $text
     * @param array $attributes
     * @param bool $raw
     * @return string
     */
    protected function renderFullElement(string $tag, string $text, array $attributes = array(), bool $raw = false): string
    {
    }

    /**
     * Renders an element
     *
     * @param string $tag
     * @param array $attributes
     * @return string
     */
    protected function renderElement(string $tag, array $attributes = array()): string
    {
    }

    /**
     * Keeps all the attributes sorted - same order all the tome
     *
     * @param array $overrides
     * @param array $attributes *
     * @return array
     */
    protected function orderAttributes(array $overrides, array $attributes): array
    {
    }

    /**
     * Renders all the attributes
     *
     * @param array $attributes
     * @return string
     */
    protected function renderAttributes(array $attributes): string
    {
    }

    /**
     * Produces a self close tag i.e. <img />
     *
     * @param string $tag
     * @param array $attributes
     * @return string
     */
    protected function selfClose(string $tag, array $attributes = array()): string
    {
    }
}
