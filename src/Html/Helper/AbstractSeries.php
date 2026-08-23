<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper;

use Phalcon\Contracts\Html\HtmlTypes;

/**
 * @phpstan-import-type html_attributes from HtmlTypes
 * @phpstan-import-type html_element_entry from HtmlTypes
 * @phpstan-import-type html_element_store from HtmlTypes
 */
abstract class AbstractSeries extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @phpstan-var html_attributes
     */
    protected array $attributes = [];

    /**
     * @phpstan-var html_element_store
     */
    protected array $store = [];

    /**
     * @param string $indent
     * @param string|null $delimiter
     * @return static
     */
    public function __invoke(string $indent = '    ', ?string $delimiter = null): static
    {
    }

    /**
     * Generates and returns the HTML for the list. Entries are sorted by
     * their integer key first, so an asset registered with a lower position
     * renders before one registered with a higher position regardless of
     * registration order.
     */
    public function __toString()
    {
    }

    /**
     * Resets the internal store.
     *
     * @return static
     */
    public function reset(): static
    {
    }

    /**
     * Returns the tag name.
     *
     * @return string
     */
    abstract protected function getTag(): string;

    /**
     * Appends an entry to the store, optionally at a specific integer
     * position. When `$pos` is negative the entry is pushed onto the next
     * available auto-increment slot. When `$pos` is non-negative the entry
     * is placed at that key, advancing past any already-occupied slots so
     * existing entries are not overwritten. The store is ksort()ed in
     * `__toString`, so positions act as a sort key, not a strict address.
     *
     * @phpstan-param html_element_entry $entry
     * @param array $entry
     * @param int $position
     * @return void
     */
    protected function pushOrPlace(array $entry, int $position = -1): void
    {
    }
}
