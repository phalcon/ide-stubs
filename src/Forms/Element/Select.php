<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Element;

use Phalcon\Contracts\Forms\FormsTypes;
use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Tag\Select as SelectTag;

/**
 * Component SELECT (choice) for forms
 *
 * @phpstan-import-type forms_attributes from FormsTypes
 * @phpstan-import-type forms_select_options from FormsTypes
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class Select extends \Phalcon\Forms\Element\AbstractElement
{
    /**
     * @var array|object|null
     *
     * @phpstan-var forms_select_options|object|null
     */
    protected $optionsValues = null;

    /**
     * Constructor
     *
     * @phpstan-param forms_select_options|object|null $options
     * @phpstan-param forms_attributes $attributes
     * @param string $name
     * @param mixed $options
     * @param array $attributes
     */
    public function __construct(string $name, $options = null, array $attributes = [])
    {
    }

    /**
     * Adds an option to the current options
     *
     * @param mixed $option
     * @return ElementInterface
     */
    public function addOption($option): ElementInterface
    {
    }

    /**
     * Returns the choices' options
     *
     * @phpstan-return forms_select_options|object|null
     */
    public function getOptions()
    {
    }

    /**
     * Renders the element widget returning HTML
     *
     * @phpstan-param html_attributes $attributes
     * @param array $attributes
     * @return string
     */
    public function render(array $attributes = []): string
    {
    }

    /**
     * Set the choice's options
     *
     * @phpstan-param forms_select_options|object $options
     * @param mixed $options
     * @return ElementInterface
     */
    public function setOptions($options): ElementInterface
    {
    }

    /**
     * Returns an array of prepared attributes for Phalcon\Html\TagFactory
     * helpers according to the element parameters
     *
     * @phpstan-param html_attributes $attributes
     * @phpstan-return array<array-key, mixed>
     * @param array $attributes
     * @return array
     */
    protected function prepareAttributes(array $attributes = []): array
    {
    }
}
