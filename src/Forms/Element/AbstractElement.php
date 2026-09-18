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
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Filter\Validation\ValidatorInterface;
use Phalcon\Forms\Exception;
use Phalcon\Forms\Exceptions\FormElementNameRequired;
use Phalcon\Forms\Exceptions\InvalidFilterType;
use Phalcon\Forms\Form;
use Phalcon\Html\TagFactory;
use Phalcon\Messages\MessageInterface;
use Phalcon\Messages\Messages;
use Stringable;

/**
 * This is a base class for form elements
 *
 * @phpstan-import-type forms_attributes from FormsTypes
 * @phpstan-import-type forms_filters from FormsTypes
 * @phpstan-import-type forms_options from FormsTypes
 * @phpstan-import-type forms_validators from FormsTypes
 * @phpstan-import-type html_attributes from HtmlTypes
 */
abstract class AbstractElement implements \Phalcon\Forms\Element\ElementInterface
{
    /**
     * @phpstan-var forms_attributes
     */
    protected array $attributes = [];

    /**
     * @phpstan-var forms_filters
     */
    protected array $filters = [];

    protected ?\Phalcon\Forms\Form $form = null;

    protected ?string $label = null;

    protected \Phalcon\Messages\Messages $messages;

    protected string $method = 'inputText';

    protected string $name;

    /**
     * @phpstan-var forms_options
     */
    protected array $options = [];

    protected ?\Phalcon\Html\TagFactory $tagFactory = null;

    /**
     * @phpstan-var forms_validators
     */
    protected array $validators = [];

    /**
     * @var mixed|null
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @phpstan-param forms_attributes $attributes
     * @param string $name
     * @param array $attributes
     */
    public function __construct(string $name, array $attributes = [])
    {
    }

    /**
     * Magic method __toString renders the widget without attributes
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Adds a filter to current list of filters
     *
     * @param string $filter
     * @return ElementInterface
     */
    public function addFilter(string $filter): ElementInterface
    {
    }

    /**
     * Adds a validator to the element
     *
     * @param \Phalcon\Filter\Validation\ValidatorInterface $validator
     * @return ElementInterface
     */
    public function addValidator(\Phalcon\Filter\Validation\ValidatorInterface $validator): ElementInterface
    {
    }

    /**
     * Adds a group of validators
     *
     * @phpstan-param array<array-key, mixed> $validators
     * @param array $validators
     * @param bool $merge
     * @return ElementInterface
     */
    public function addValidators(array $validators, bool $merge = true): ElementInterface
    {
    }

    /**
     * Appends a message to the internal message list
     *
     * @param \Phalcon\Messages\MessageInterface $message
     * @return ElementInterface
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message): ElementInterface
    {
    }

    /**
     * Clears element to its default value
     *
     * @return ElementInterface
     */
    public function clear(): ElementInterface
    {
    }

    /**
     * Returns the value of an attribute if present
     *
     * @param string $attribute
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getAttribute(string $attribute, $defaultValue = null): mixed
    {
    }

    /**
     * Returns the default attributes for the element
     *
     * @phpstan-return forms_attributes
     * @return array
     */
    public function getAttributes(): array
    {
    }

    /**
     * Returns the default value assigned to the element
     *
     * @return mixed
     */
    public function getDefault(): mixed
    {
    }

    /**
     * Returns the element filters
     *
     * @phpstan-return forms_filters
     */
    public function getFilters()
    {
    }

    /**
     * Returns the parent form to the element
     *
     * @return Form
     */
    public function getForm(): Form
    {
    }

    /**
     * Returns the element label
     *
     * @return string|null
     */
    public function getLabel(): string|null
    {
    }

    /**
     * Returns the messages that belongs to the element
     * The element needs to be attached to a form
     *
     * @return Messages
     */
    public function getMessages(): Messages
    {
    }

    /**
     * Returns the element name
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Returns the tagFactory; throws exception if not present
     *
     * @return TagFactory|null
     */
    public function getTagFactory(): TagFactory|null
    {
    }

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null): mixed
    {
    }

    /**
     * Returns the options for the element
     *
     * @phpstan-return forms_options
     * @return array
     */
    public function getUserOptions(): array
    {
    }

    /**
     * Returns the validators registered for the element
     *
     * @phpstan-return forms_validators
     * @return array|\Phalcon\Filter\Validation\ValidatorInterface[]
     */
    public function getValidators(): array
    {
    }

    /**
     * Returns the element's value
     *
     * @return mixed
     */
    public function getValue(): mixed
    {
    }

    /**
     * Checks whether there are messages attached to the element
     *
     * @return bool
     */
    public function hasMessages(): bool
    {
    }

    /**
     * Generate the HTML to label the element
     *
     * @phpstan-param html_attributes $attributes
     * @param array $attributes
     * @return string
     */
    public function label(array $attributes = []): string
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
     * Sets a default attribute for the element
     *
     * @param string $attribute
     * @param mixed $value
     * @return ElementInterface
     */
    public function setAttribute(string $attribute, $value): ElementInterface
    {
    }

    /**
     * Sets default attributes for the element
     *
     * @phpstan-param forms_attributes $attributes
     * @param array $attributes
     * @return ElementInterface
     */
    public function setAttributes(array $attributes): ElementInterface
    {
    }

    /**
     * Sets a default value in case the form does not use an entity
     * or there is no value available for the element in _POST
     *
     * @param mixed $value
     * @return ElementInterface
     */
    public function setDefault($value): ElementInterface
    {
    }

    /**
     * Sets the element filters
     *
     * @phpstan-param forms_filters|string $filters
     * @param mixed $filters
     * @return ElementInterface
     */
    public function setFilters($filters): ElementInterface
    {
    }

    /**
     * Sets the parent form to the element
     *
     * @param \Phalcon\Forms\Form $form
     * @return ElementInterface
     */
    public function setForm(\Phalcon\Forms\Form $form): ElementInterface
    {
    }

    /**
     * Sets the element label
     *
     * @param string $label
     * @return ElementInterface
     */
    public function setLabel(string $label): ElementInterface
    {
    }

    /**
     * Sets the validation messages related to the element
     *
     * @param \Phalcon\Messages\Messages $messages
     * @return ElementInterface
     */
    public function setMessages(\Phalcon\Messages\Messages $messages): ElementInterface
    {
    }

    /**
     * Sets the element name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function setName(string $name): ElementInterface
    {
    }

    /**
     * Sets the TagFactory
     *
     * @param \Phalcon\Html\TagFactory $tagFactory
     * @return static
     */
    public function setTagFactory(\Phalcon\Html\TagFactory $tagFactory): static
    {
    }

    /**
     * Sets an option for the element
     *
     * @param string $option
     * @param mixed $value
     * @return ElementInterface
     */
    public function setUserOption(string $option, $value): ElementInterface
    {
    }

    /**
     * Sets options for the element
     *
     * @phpstan-param forms_options $options
     * @param array $options
     * @return ElementInterface
     */
    public function setUserOptions(array $options): ElementInterface
    {
    }

    /**
     * Returns the tagFactory; throws exception if not present
     *
     * @return TagFactory
     */
    protected function getLocalTagFactory(): TagFactory
    {
    }
}
