<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input;

use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Html\Helper\AbstractHelper;
use Phalcon\Html\Helper\Doctype;

/**
 * Class AbstractInput
 *
 * @phpstan-import-type html_attributes from HtmlTypes
 */
abstract class AbstractInput extends AbstractHelper
{
    /**
     * @phpstan-var html_attributes
     */
    protected array $attributes = [];

    protected string $type = 'text';

    /**
     * @phpstan-param html_attributes $attributes
     * @param string $name
     * @param string|null $value
     * @param array $attributes
     * @return static
     */
    public function __invoke(string $name, ?string $value = null, array $attributes = []): static
    {
    }

    /**
     * Returns the HTML for the input.
     */
    public function __toString()
    {
    }

    /**
     * Sets the value of the element
     *
     * @param string|null $value
     * @return static
     */
    public function setValue(?string $value = null): static
    {
    }
}
