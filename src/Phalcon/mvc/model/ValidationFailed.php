<?php

namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\ValidationFailed
 *
 * This exception is generated when a model fails to save a record
 * Phalcon\Mvc\Model must be set up to have this behavior
 */
class ValidationFailed extends \Phalcon\Mvc\Model\Exception
{

    protected $messages;


    protected $model;


    /**
     * Phalcon\Mvc\Model\ValidationFailed constructor
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param Message[] $validationMessages
     */
    public function __construct(\Phalcon\Mvc\ModelInterface $model, array $validationMessages) {}

    /**
     * Returns the complete group of messages produced in the validation
     *
     * @return array|Message[]
     */
    public function getMessages(): array {}

    /**
     * Returns the model that generated the messages
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getModel(): ModelInterface {}

}
