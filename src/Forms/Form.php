<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms;

use Countable;
use Iterator;
use Phalcon\Di\Injectable;
use Phalcon\Di\DiInterface;
use Phalcon\Filter\FilterInterface;
use Phalcon\Forms\Element\ElementInterface;
use Phalcon\Html\Attributes;
use Phalcon\Html\Attributes\AttributesInterface;
use Phalcon\Html\TagFactory;
use Phalcon\Messages\Messages;
use Phalcon\Tag;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\ValidationInterface;

/**
 * This component allows to build forms using an object-oriented interface
 */
class Form extends Injectable implements \Countable, \Iterator, \Phalcon\Html\Attributes\AttributesInterface
{
    /**
     * @var AttributesInterface|null
     */
    protected $attributes = null;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var array
     */
    protected $filteredData = [];

    /**
     * @var array
     */
    protected $elements = [];

    /**
     * @var array
     */
    protected $elementsIndexed = [];

    /**
     * @var object|null
     */
    protected $entity = null;

    /**
     * @var Messages|array|null
     */
    protected $messages = null;

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var TagFactory|null
     */
    protected $tagFactory = null;

    /**
     * @var ValidationInterface|null
     */
    protected $validation = null;

    /**
     * @var array
     */
    protected $whitelist = [];

    /**
     * Phalcon\Forms\Form constructor
     *
     * @param mixed $entity
     * @param array $userOptions
     */
    public function __construct($entity = null, array $userOptions = [])
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
    public function bind(array $data, $entity = null, array $whitelist = []): Form
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
     * @return mixed
     */
    public function current(): mixed
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
     * Gets a value from the internal filtered data or calls getValue(name)
     *
     * @param string $name
     * @return mixed|null
     */
    public function getFilteredValue(string $name): mixed
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
     * @return array|Messages
     */
    public function getMessages(): Messages|array
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
     * Returns the tagFactory object
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
     * Gets a value from the internal related entity or from the default value
     *
     * @param string $name
     * @return mixed|null
     */
    public function getValue(string $name): mixed
    {
    }

    /**
     * return ValidationInterface|null
     *
     * @return ValidationInterface|null
     */
    public function getValidation(): ValidationInterface|null
    {
    }

    /**
     * return array
     *
     * @return array
     */
    public function getWhitelist(): array
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
     * @param array $whitelist
     * @return bool
     */
    public function isValid($data = null, $entity = null, array $whitelist = []): bool
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
    public function label(string $name, array $attributes = []): string
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     *
     * @return void
     */
    public function next(): void
    {
    }

    /**
     * Renders a specific item in the form
     *
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function render(string $name, array $attributes = []): string
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
    public function rewind(): void
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
     * Set form attributes collection
     *
     * @param \Phalcon\Html\Attributes $attributes
     * @return AttributesInterface
     */
    public function setAttributes(\Phalcon\Html\Attributes $attributes): AttributesInterface
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
     * Sets the tagFactory for the form
     *
     * @param \Phalcon\Html\TagFactory $tagFactory
     * @return Form
     */
    public function setTagFactory(\Phalcon\Html\TagFactory $tagFactory): Form
    {
    }

    /**
     * Sets the default validation
     *
     * @param ValidationInterface $validation
     * @return Form
     */
    public function setValidation(\Phalcon\Filter\Validation\ValidationInterface $validation): Form
    {
    }

    /**
     * Sets the default whitelist
     *
     * @param array $whitelist
     * @return Form
     */
    public function setWhitelist(array $whitelist): Form
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
