<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms;

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
     * Checks if a form is registered in the forms manager
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Registers a form in the Forms Manager
     *
     * @param string $name
     * @param Form $form
     * @return Manager
     */
    public function set(string $name, Form $form): Manager
    {
    }
}
