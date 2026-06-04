<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms;

use Phalcon\Contracts\Forms\Schema;
use Phalcon\Forms\Exceptions\FormNotRegistered;
use Phalcon\Forms\Form;

/**
 * Forms Manager
 */
class Manager
{
    /**
     * @var array
     */
    protected $forms = [];

    /**
     * @var FormsLocator
     */
    protected $locator;

    /**
     * Manager constructor.
     *
     * @param FormsLocator|null $locator
     */
    public function __construct(?FormsLocator $locator = null)
    {
    }

    /**
     * Creates a form registering it in the forms manager
     *
     * @param object $entity
     * @param string $name
     * @return Form
     */
    public function create(string $name, $entity = null): Form
    {
    }

    /**
     * Returns a form by its name
     *
     * @param string $name
     * @return Form
     */
    public function get(string $name): Form
    {
    }

    /**
     * Returns the FormsLocator instance.
     *
     * @return FormsLocator
     */
    public function getLocator(): FormsLocator
    {
    }

    /**
     * Checks if a form is registered in the forms manager
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Creates a form from a Schema source, registers it in the manager,
     * and registers a factory in the locator for entity-aware retrieval.
     *
     * @param string      $name
     * @param Schema      $schema
     * @param object|null $entity
     *
     * @return Form
     * @throws Exception
     */
    public function loadForm(string $name, \Phalcon\Contracts\Forms\Schema $schema, $entity = null): Form
    {
    }

    /**
     * Registers a form in the Forms Manager
     *
     * @param string $name
     * @param \Phalcon\Forms\Form $form
     * @return static
     */
    public function set(string $name, \Phalcon\Forms\Form $form): static
    {
    }
}
