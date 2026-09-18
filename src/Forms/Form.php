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
use Phalcon\Contracts\Forms\FormsTypes;
use Phalcon\Contracts\Forms\Schema;
use Phalcon\Contracts\Html\HtmlTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Filter\FilterInterface;
use Phalcon\Filter\Validation;
use Phalcon\Filter\Validation\ValidationInterface;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\ElementInterface;
use Phalcon\Forms\Exceptions\ElementNotInForm;
use Phalcon\Forms\Exceptions\InvalidEntity;
use Phalcon\Forms\Exceptions\NoFormElements;
use Phalcon\Html\Attributes;
use Phalcon\Html\Attributes\AttributesInterface;
use Phalcon\Html\TagFactory;
use Phalcon\Messages\Messages;
use Phalcon\Support\Settings;
use Phalcon\Tag;

/**
 * This component allows to build forms using an object-oriented interface
 *
 * @phpstan-import-type forms_data from FormsTypes
 * @phpstan-import-type forms_elements from FormsTypes
 * @phpstan-import-type forms_elements_indexed from FormsTypes
 * @phpstan-import-type forms_options from FormsTypes
 * @phpstan-import-type forms_schema_definition from FormsTypes
 * @phpstan-import-type forms_whitelist from FormsTypes
 * @phpstan-import-type html_attributes from HtmlTypes
 *
 * @implements Iterator<int, ElementInterface>
 */
class Form extends Injectable implements \Countable, \Iterator, \Phalcon\Html\Attributes\AttributesInterface
{
    /**
     * @var AttributesInterface|null
     */
    protected $attributes = null;

    /**
     * @phpstan-var forms_data
     */
    protected array $data = [];

    /**
     * @phpstan-var forms_elements
     */
    protected array $elements = [];

    /**
     * @phpstan-var forms_elements_indexed
     */
    protected array $elementsIndexed = [];

    /**
     * @var object|null
     */
    protected $entity = null;

    /**
     * @phpstan-var forms_data
     */
    protected array $filteredData = [];

    protected \Phalcon\Messages\Messages $messages;

    /**
     * @phpstan-var forms_options
     */
    protected array $options = [];

    protected int $position = 0;

    protected ?\Phalcon\Html\TagFactory $tagFactory = null;

    protected ?\Phalcon\Filter\Validation\ValidationInterface $validation = null;

    /**
     * @phpstan-var forms_whitelist
     */
    protected array $whitelist = [];

    /**
     * Phalcon\Forms\Form constructor
     *
     * @phpstan-param forms_options $userOptions
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
     * @param string|null $position
     * @param bool|null $type
     * @return static
     */
    public function add(\Phalcon\Forms\Element\ElementInterface $element, ?string $position = null, ?bool $type = null): static
    {
    }

    /**
     * Binds data to the entity
     *
     * @phpstan-param forms_data      $data
     * @param object|null             $entity
     * @phpstan-param forms_whitelist $whitelist
     * @param array $data
     * @param array $whitelist
     * @return static
     */
    public function bind(array $data, $entity = null, array $whitelist = []): static
    {
    }

    /**
     * Clears every element in the form to its default value
     *
     * @phpstan-param array<array-key, string>|string|null $fields
     * @param mixed $fields
     * @return static
     */
    public function clear($fields = null): static
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
     * @psalm-suppress LessSpecificImplementedReturnType
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
     * @return object|null
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
     * @return Messages
     */
    public function getMessages(): Messages
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
     * @phpstan-return forms_options
     * @return array
     */
    public function getUserOptions(): array
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
     * Gets a value from the internal related entity or from the default value
     *
     * @param string $name
     * @return mixed|null
     */
    public function getValue(string $name): mixed
    {
    }

    /**
     * @phpstan-return forms_whitelist
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
     * @phpstan-param forms_data      $data
     * @phpstan-param object|null     $entity
     * @phpstan-param forms_whitelist $whitelist
     * @param mixed $data
     * @param mixed $entity
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
     * @phpstan-param html_attributes $attributes
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function label(string $name, array $attributes = []): string
    {
    }

    /**
     * Loads elements into the form from a Schema source.
     *
     * Each definition in the schema must have at least 'type' and 'name'.
     * The locator resolves the type string to an element factory; custom
     * types can be registered on the locator with setElement().
     *
     * @throws Exception
     * @param \Phalcon\Contracts\Forms\Schema $schema
     * @param FormsLocator $locator
     * @return static
     */
    public function load(\Phalcon\Contracts\Forms\Schema $schema, FormsLocator $locator): static
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
     * Removes an element from the form
     *
     * @param string $name
     * @return bool
     */
    public function remove(string $name): bool
    {
    }

    /**
     * Renders a specific item in the form
     *
     * @phpstan-param html_attributes $attributes
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public function render(string $name, array $attributes = []): string
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
     * @param string $action
     * @return static
     */
    public function setAction(string $action): static
    {
    }

    /**
     * Set form attributes collection
     *
     * @param \Phalcon\Html\Attributes $attributes
     * @return static
     */
    public function setAttributes(\Phalcon\Html\Attributes $attributes): static
    {
    }

    /**
     * Sets the entity related to the model
     *
     * @param object $entity
     * @return static
     */
    public function setEntity($entity): static
    {
    }

    /**
     * Sets the tagFactory for the form
     *
     * @param \Phalcon\Html\TagFactory $tagFactory
     * @return static
     */
    public function setTagFactory(\Phalcon\Html\TagFactory $tagFactory): static
    {
    }

    /**
     * Sets an option for the form
     *
     * @param string $option
     * @param mixed $value
     * @return static
     */
    public function setUserOption(string $option, $value): static
    {
    }

    /**
     * Sets options for the element
     *
     * @phpstan-param forms_options $options
     * @param array $options
     * @return static
     */
    public function setUserOptions(array $options): static
    {
    }

    /**
     * Sets the default validation
     *
     * @param ValidationInterface $validation
     * @return static
     */
    public function setValidation(\Phalcon\Filter\Validation\ValidationInterface $validation): static
    {
    }

    /**
     * Sets the default whitelist
     *
     * @phpstan-param forms_whitelist $whitelist
     * @param array $whitelist
     * @return static
     */
    public function setWhitelist(array $whitelist): static
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
