<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Html\Helper\Input;

/**
 * Interface for SELECT option data providers.
 *
 * Return format: [value => label] for flat options;
 * [groupLabel => [value => label, ...]] for optgroups.
 */
interface SelectData
{
    /**
     * Returns the per-option attribute map.
     *
     * Format: [optionValue => [attrName => stringValue, ...]].
     * Implementations must return resolved string values; no escaping,
     * ordering, or rendering is performed here.
     *
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @return array
     */
    public function getOptions(): array;
}
