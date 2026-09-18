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
use Phalcon\Html\Helper\Input\RadioGroup as RadioGroupHelper;
use Phalcon\Html\TagFactory;

/**
 * Component for a group of INPUT[type=radio] elements.
 *
 * Options are passed as an associative array:
 *   ['value' => 'Label']
 * or with per-item attributes:
 *   ['value' => ['label' => 'Label', 'disabled' => true]]
 *
 * @phpstan-import-type forms_attributes from FormsTypes
 * @phpstan-import-type forms_group_options from FormsTypes
 * @phpstan-import-type html_attributes from HtmlTypes
 */
class RadioGroup extends \Phalcon\Forms\Element\AbstractElement
{
    /**
     * @phpstan-var forms_group_options
     */
    protected array $optionsValues = [];

    /**
     * Constructor
     *
     * @phpstan-param forms_group_options $options
     * @phpstan-param forms_attributes $attributes
     * @param string $name
     * @param array $options
     * @param array $attributes
     */
    public function __construct(string $name, array $options = [], array $attributes = [])
    {
    }

    /**
     * Returns the group options
     *
     * @phpstan-return forms_group_options
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Renders the radio group returning HTML
     *
     * @phpstan-param html_attributes $attributes
     * @param array $attributes
     * @return string
     */
    public function render(array $attributes = []): string
    {
    }

    /**
     * Sets the group options
     *
     * @phpstan-param forms_group_options $options
     * @param array $options
     * @return ElementInterface
     */
    public function setOptions(array $options): ElementInterface
    {
    }
}
