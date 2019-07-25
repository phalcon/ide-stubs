<?php

namespace Phalcon\Forms;

/**
 * Forms Manager
 */
class Manager
{

    protected $forms = array();


    /**
     * Creates a form registering it in the forms manager
     *
     * @param string $name
     * @param object $entity
     * @return Form
     */
    public function create(string $name, $entity = null): Form {}

    /**
     * Returns a form by its name
     *
     * @param string $name
     * @return Form
     */
    public function get(string $name): Form {}

    /**
     * Checks if a form is registered in the forms manager
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool {}

    /**
     * Registers a form in the Forms Manager
     *
     * @param string $name
     * @param Form $form
     * @return FormManager
     */
    public function set(string $name, Form $form): FormManager {}

}
