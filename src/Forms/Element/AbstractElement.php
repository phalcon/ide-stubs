<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Element;

use InvalidArgumentException;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Di;
use Phalcon\Filter\Validation\ValidatorInterface;
use Phalcon\Forms\Form;
use Phalcon\Forms\Exception;
use Phalcon\Html\Escaper;
use Phalcon\Html\TagFactory;
use Phalcon\Messages\MessageInterface;
use Phalcon\Messages\Messages;

/**
 * This is a base class for form elements
 */
abstract class AbstractElement implements \Phalcon\Forms\Element\ElementInterface
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @var Form|null
     */
    protected $form = null;

    /**
     * @var string|null
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $method = 'inputText';

    /**
     * @var Messages
     */
    protected $messages;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var TagFactory|null
     */
    protected $tagFactory = null;

    /**
     * @var array
     */
    protected $validators = [];

    /**
     * @var mixed|null
     */
    protected $value = null;

    /**
     * Constructor
     *
     * @param string $name Attribute name (value of 'name' attribute of HTML element)
     * @param array $attributes Additional HTML element attributes
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
     * @param \Phalcon\Filter\Validation\ValidatorInterface[] $validators
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
     * @return mixed
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
     * @return string
     */
    public function getLabel(): string
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
     * @return array
     */
    public function getUserOptions(): array
    {
    }

    /**
     * Returns the validators registered for the element
     *
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
     * @param array $attributes
     * @return string
     */
    public function label(array $attributes = []): string
    {
    }

    /**
     * Renders the element widget returning HTML
     *
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
     * @param array|string $filters
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
     * @return AbstractElement
     */
    public function setTagFactory(\Phalcon\Html\TagFactory $tagFactory): AbstractElement
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
