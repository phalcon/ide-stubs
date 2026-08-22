<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Contracts\Html\Helper\Input\SelectData;
use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Helper\AbstractList;

/**
 * Class Select
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 * @phpstan-import-type html_select_attributes from HtmlTypes
 */
class Select extends AbstractList
{
    protected string $elementTag = 'option';

    protected bool $inOptGroup = false;

    protected string $selected = '';

    protected bool $strict = false;

    /**
     * Add an element to the list
     *
     * @phpstan-param html_attributes $attributes
     * @param string $text
     * @param string|null $value
     * @param array $attributes
     * @param bool $raw
     * @return static
     */
    public function add(string $text, ?string $value = null, array $attributes = [], bool $raw = false): static
    {
    }

    /**
     * Add a placeholder to the element
     *
     * @phpstan-param html_attributes $attributes
     * @param string $text
     * @param string|null $value
     * @param array $attributes
     * @param bool $raw
     * @return static
     */
    public function addPlaceholder(string $text, ?string $value = null, array $attributes = [], bool $raw = false): static
    {
    }

    /**
     * Populates the select from a data provider.
     *
     * Flat entries: key = option value, value = label string.
     * Optgroup entries: key = group label, value = [value => label] array.
     *
     * @param \Phalcon\Contracts\Html\Helper\Input\SelectData $data
     * @return static
     */
    public function fromData(\Phalcon\Contracts\Html\Helper\Input\SelectData $data): static
    {
    }

    /**
     * Creates an option group
     *
     * @phpstan-param html_attributes $attributes
     * @param string|null $label
     * @param array $attributes
     * @return static
     */
    public function optGroup(?string $label = null, array $attributes = []): static
    {
    }

    /**
     * Adds a non-selectable placeholder option as the first entry. Renders
     * as `<option value="" disabled selected>$text</option>`, matching the
     * common HTML idiom for "Choose..."-style prompts.
     *
     * @param string $text
     * @return static
     */
    public function placeholder(string $text): static
    {
    }

    /**
     * @param string $selected
     * @return static
     */
    public function selected(string $selected): static
    {
    }

    /**
     * Toggles strict (`===`) comparison between an option's `value` and
     * the previously stored `selected` value. Defaults to loose (`==`),
     * matching the round-tripping fix in `AbstractChecked` so mixed
     * int/string form data marks the right option as selected.
     *
     * @param bool $flag
     * @return static
     */
    public function strict(bool $flag = true): static
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
     * @phpstan-param html_attributes $attributes
     * @param string $label
     * @param array $attributes
     * @return string
     */
    protected function optGroupStart(string $label, array $attributes): string
    {
    }

    /**
     * Checks if the value has been passed and if it is the same as the
     * value stored in the object
     *
     * @phpstan-param html_attributes $attributes
     *
     * @phpstan-return html_attributes
     * @param array $attributes
     * @param string|null $value
     * @return array
     */
    private function processValue(array $attributes, ?string $value = null): array
    {
    }
}
