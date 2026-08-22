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
 * Class AbstractList
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 * @phpstan-import-type html_element_store from HtmlTypes
 */
abstract class AbstractList extends \Phalcon\Html\Helper\AbstractHelper
{
    /**
     * @phpstan-var html_attributes
     */
    protected array $attributes = [];

    protected string $elementTag = 'li';

    /**
     * @phpstan-var html_element_store
     */
    protected array $store = [];

    /**
     * @phpstan-param html_attributes $attributes
     * @param string $indent
     * @param string|null $delimiter
     * @param array $attributes
     * @return static
     */
    public function __invoke(string $indent = '    ', ?string $delimiter = null, array $attributes = []): static
    {
    }

    /**
     * Generates and returns the HTML for the list.
     */
    public function __toString()
    {
    }

    /**
     *
     * Returns the tag name.
     *
     * @return string
     */
    abstract protected function getTag(): string;
}
