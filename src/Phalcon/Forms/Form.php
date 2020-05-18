<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms;

use Phalcon\Di\Injectable;
use Phalcon\Forms\Element\ElementInterface;
use Phalcon\Html\Attributes;
use Phalcon\Html\Attributes\AttributesInterface;
use Phalcon\Messages\Messages;

/**
 * This component allows to build forms using an object-oriented interface
 */
class Form extends Injectable implements \Countable, \Iterator, \Phalcon\Html\Attributes\AttributesInterface
{
    /**
     * @var Attributes | null
     */
    protected $attributes = null;


    protected $data;


    protected $elements = array();


    protected $elementsIndexed;


    protected $entity;


    protected $messages;


    protected $position;


    protected $options;


    protected $validation;


    /**
     * @param mixed $validation
     */
    public function setValidation($validation)
    {
    }


    public function getValidation()
    {
    }

    /**
     * Phalcon\Forms\Form constructor
     *
     * @param mixed $entity
     * @param array $userOptions
     */
    public function __construct($entity = null, array $userOptions = array())
    {
    }

    /**
     * Adds an element to the form
     *
     * @param \Phalcon\Forms\Element\ElementInterface $element
     * @param string $position
     * @param bool $type
     * @return Form
     */
    public function add(\Phalcon\Forms\Element\ElementInterface $element, string $position = null, bool $type = null): Form
    {
    }

    /**
     * Binds data to the entity
     *
     * @param object $entity
     * @param array $whitelist
     * @param array $data
     * @return Form
     */
    public function bind(array $data, $entity, $whitelist = null): Form
    {
    }

    /**
     * Clears every element in the form to its default value
     *
     * @param array|string|null $fields
     * @return Form
     */
    public function clear($fields = null): Form
    {
    }

    /**
     * Returns the number of elements in the form
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns the current element in the iterator
     *
     * @return bool|\Phalcon\Forms\Element\ElementInterface
     */
    public function current()
    {
    }

    /**
     * Returns an element added to the form by its name
     *
     * @param string $name
     * @return ElementInterface
     */
    public function get(string $name): ElementInterface
    {
    }

    /**
     * Returns the form's action
     *
     * @return string
     */
    public function getAction(): string
    {
    }

    /**
     * Get Form attributes collection
     *
     * @return Attributes
     */
    public function getAttributes(): Attributes
    {
    }

    /**
     * Returns the form elements added to the form
     *
     * @return array|\Phalcon\Forms\Element\ElementInterface[]
     */
    public function getElements(): array
    {
    }

    /**
     * Returns the entity related to the model
     *
     * @return object
     */
    public function getEntity()
    {
    }

    /**
     * Returns a label for an element
     *
     * @param string $name
     * @return string
     */
    public function getLabel(string $name): string
    {
    }

    /**
     * Returns the messages generated in the validation.
     *
     * ```php
     * if ($form->isValid($_POST) == false) {
     *     $messages = $form->getMessages();
     *
     *     foreach ($messages as $message) {
     *         echo $message, "<br>";
     *     }
     * }
     * ```
     *
     * @return array|\Phalcon\Messages\Messages
     */
    public function getMessages()
    {
    }

    /**
     * Returns the messages generated for a specific element
     *
     * @param string $name
     * @return Messages
     */
    public function getMessagesFor(string $name): Messages
    {
    }

    /**
     * Returns the value of an option if present
     *
     * @param string $option
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getUserOption(string $option, $defaultValue = null)
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
     * Gets a value from the internal related entity or from the default value
     *
     * @param string $name
     * @return mixed|null
     */
    public function getValue(string $name)
    {
    }

    /**
     * Check if the form contains an element
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Check if messages were generated for a specific element
     *
     * @param string $name
     * @return bool
     */
    public function hasMessagesFor(string $name): bool
    {
    }

    /**
     * Validates the form
     *
     * @param array $data
     * @param object $entity
     * @return bool
     */
    public function isValid($data = null, $entity = null): bool
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Generate the label of an element added to the form including HTML
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function label(string $name, array $attributes = null): string
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     *
     * @return void
     */
    public function next()
    {
    }

    /**
     * Renders a specific item in the form
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function render(string $name, array $attributes = array()): string
    {
    }

    /**
     * Removes an element from the form
     *
     * @param string $name
     * @return bool
     */
    public function remove(string $name): bool
    {
    }

    /**
     * Rewinds the internal iterator
     *
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * Sets the form's action
     *
     * @return Form
     * @param string $action
     */
    public function setAction(string $action): Form
    {
    }

    /**
     * Sets the entity related to the model
     *
     * @param object $entity
     * @return Form
     */
    public function setEntity($entity): Form
    {
    }

    /**
     * Set form attributes collection
     *
     * @param \Phalcon\Html\Attributes $attributes
     * @return AttributesInterface
     */
    public function setAttributes(\Phalcon\Html\Attributes $attributes): AttributesInterface
    {
    }

    /**
     * Sets an option for the form
     *
     * @param string $option
     * @param mixed $value
     * @return Form
     */
    public function setUserOption(string $option, $value): Form
    {
    }

    /**
     * Sets options for the element
     *
     * @param array $options
     * @return Form
     */
    public function setUserOptions(array $options): Form
    {
    }

    /**
     * Check if the current element in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }
}
