<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms;

use Phalcon\Contracts\Forms\FormsTypes;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\CheckGroup;
use Phalcon\Forms\Element\Date;
use Phalcon\Forms\Element\ElementInterface;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Numeric;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Radio;
use Phalcon\Forms\Element\RadioGroup;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Exceptions\FormNotInLocator;
use Phalcon\Forms\Exceptions\UnknownFormElementType;

/**
 * A closure-based registry for named forms and element type factories.
 *
 * Form registry (`get`/`has`/`set`):
 * Each entry is a callable `fn(?object $entity): Form`. Without an entity the
 * resolved form is cached; with an entity a fresh form is always produced.
 *
 * Element registry (`getElement`/`hasElement`/`setElement`):
 * Maps type strings (e.g. 'text', 'email') to factories used by Form::load().
 * Each callable has the signature `fn(string $name, array $options, array $attributes): ElementInterface`.
 * Default types are seeded by `getDefaultServices()`. Users may add or override
 * types with `setElement()`.
 *
 * @phpstan-import-type forms_locator_element_factory from FormsTypes
 * @phpstan-import-type forms_locator_elements from FormsTypes
 * @phpstan-import-type forms_locator_factories from FormsTypes
 * @phpstan-import-type forms_locator_factory from FormsTypes
 */
class FormsLocator
{
    /**
     * Element type → factory callable.
     *
     * @phpstan-var forms_locator_elements
     */
    private array $elements = [];

    /**
     * Form name → factory callable.
     *
     * @phpstan-var forms_locator_factories
     */
    private array $factories = [];

    /**
     * Cached entity-less form instances.
     *
     * @phpstan-var array<string, Form>
     */
    private array $instances = [];

    /**
     * @phpstan-param forms_locator_factories $definitions
     * @param array $definitions
     */
    public function __construct(array $definitions = [])
    {
    }

    /**
     * Returns the named form.
     *
     * Without an entity the result is lazily created and cached.
     * With an entity a fresh form is always produced.
     *
     * @param object|null $entity
     *
     * @throws Exception
     * @param string $name
     * @return Form
     */
    public function get(string $name, $entity = null): Form
    {
    }

    /**
     * Returns the factory callable for the given element type.
     *
     * @phpstan-return forms_locator_element_factory
     * @param string $type
     */
    public function getElement(string $type)
    {
    }

    /**
     * Checks whether a named form factory is registered.
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Checks whether an element type is registered.
     *
     * @param string $type
     * @return bool
     */
    public function hasElement(string $type): bool
    {
    }

    /**
     * Registers or replaces a named form factory.
     *
     * The callable must accept one argument (?object $entity) and return a
     * Form instance. Replacing a registration clears any cached instance so
     * the next get() call rebuilds from the new factory.
     *
     * @phpstan-param forms_locator_factory $factory
     * @param string $name
     * @param mixed $factory
     * @return void
     */
    public function set(string $name, $factory): void
    {
    }

    /**
     * Registers or replaces an element type factory.
     *
     * The callable must accept (string $name, array $options, array $attributes)
     * and return an ElementInterface instance.
     *
     * @phpstan-param forms_locator_element_factory $factory
     * @param string $type
     * @param mixed $factory
     * @return void
     */
    public function setElement(string $type, $factory): void
    {
    }

    /**
     * Returns the built-in element type factories.
     *
     * Each value is a callable: fn(string $name, array $options, array $attributes): ElementInterface
     *
     * @phpstan-return forms_locator_elements
     * @return array
     */
    protected function getDefaultServices(): array
    {
    }
}
