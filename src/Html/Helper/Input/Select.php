<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Helper\AbstractList;

/**
 * Class Select
 */
class Select extends AbstractList
{
    /**
     * @var string
     */
    protected $elementTag = 'option';

    /**
     * @var bool
     */
    protected $inOptGroup = false;

    /**
     * @var string
     */
    protected $selected = '';

    /**
     * Add an element to the list
     *
     * @param string      $text
     * @param string|null $value
     * @param array       $attributes
     * @param bool        $raw
     *
     * @return Select
     */
    public function add(string $text, string $value = null, array $attributes = [], bool $raw = false): Select
    {
    }

    /**
     * Add a placeholder to the element
     *
     * @param string $text
     * @param string $value
     * @param array  $attributes
     * @param bool   $raw
     *
     * @return Select
     */
    public function addPlaceholder(string $text, $value = null, array $attributes = [], bool $raw = false): Select
    {
    }

    /**
     * Creates an option group
     *
     * @param string $label
     * @param array  $attributes
     *
     * @return Select
     */
    public function optGroup(string $label = null, array $attributes = []): Select
    {
    }

    /**
     * @param string $selected
     *
     * @return Select
     */
    public function selected(string $selected): Select
    {
    }

    /**
     * @return string
     */
    protected function getTag(): string
    {
    }

    /**
     * @return string
     */
    protected function optGroupEnd(): string
    {
    }

    /**
     * @param string $label
     * @param array  $attributes
     *
     * @return string
     */
    protected function optGroupStart(string $label, array $attributes): string
    {
    }

    /**
     * Checks if the value has been passed and if it is the same as the
     * value stored in the object
     *
     * @param array  $attributes
     * @param string $value
     *
     * @return array
     */
    private function processValue(array $attributes, $value = null): array
    {
    }
}
