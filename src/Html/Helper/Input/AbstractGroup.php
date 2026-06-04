<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Html\Helper\AbstractHelper;

/**
 * Shared base for rendering a group of same-named inputs (checkbox or radio)
 * from an options array.
 *
 * Each option in the $options array may be either:
 *   - a scalar string label:  ['value' => 'Label text']
 *   - a rich definition:      ['value' => ['label' => 'Label text', 'disabled' => true, ...]]
 *
 * The $checked parameter is resolved by the concrete subclass:
 *   - CheckboxGroup compares against an array of selected values
 *   - RadioGroup compares against a single scalar value
 */
abstract class AbstractGroup extends AbstractHelper
{
    /**
     * @var mixed
     */
    protected $checked = null;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $sharedAttributes = [];

    /**
     * @var string
     */
    protected $type = 'checkbox';

    /**
     * @param string $name
     * @param array  $options
     * @param mixed  $checked
     * @param array  $attributes
     *
     * @return static
     */
    public function __invoke(string $name, array $options, $checked = null, array $attributes = []): static
    {
    }

    /**
     * Renders the group of inputs as a string.
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Determines whether the given value is considered checked.
     *
     * @param string $value
     *
     * @return bool
     */
    abstract protected function isChecked(string $value): bool;

    /**
     * Renders a single input + optional label pair.
     *
     * @param string       $value
     * @param string|array $definition
     *
     * @return string
     */
    protected function renderItem(string $value, $definition): string
    {
    }
}
