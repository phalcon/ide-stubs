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
use Phalcon\Contracts\Html\Helper\Input\SelectData;

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
     * @var bool
     */
    protected $strict = false;

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
     * Populates the select from a data provider.
     *
     * Flat entries: key = option value, value = label string.
     * Optgroup entries: key = group label, value = [value => label] array.
     *
     * @param SelectData $data *
     * @return Select
     */
    public function fromData(\Phalcon\Contracts\Html\Helper\Input\SelectData $data): Select
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
     * Adds a non-selectable placeholder option as the first entry. Renders
     * as `<option value="" disabled selected>$text</option>`, matching the
     * common HTML idiom for "Choose…"-style prompts.
     *
     * @param string $text
     *
     * @return Select
     */
    public function placeholder(string $text): Select
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
     * Toggles strict (`===`) comparison between an option's `value` and
     * the previously stored `selected` value. Defaults to loose (`==`),
     * matching the round-tripping fix in `AbstractChecked` so mixed
     * int/string form data marks the right option as selected.
     *
     * @param bool $flag
     *
     * @return Select
     */
    public function strict(bool $flag = true): Select
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
