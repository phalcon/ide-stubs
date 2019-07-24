<?php

namespace Phalcon\Mvc\Model\Query;

/**
 * Phalcon\Mvc\Model\Query\StatusInterface
 *
 * Interface for Phalcon\Mvc\Model\Query\Status
 */
interface StatusInterface
{

    /**
     * Returns the messages produced by an operation failed
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Returns the model which executed the action
     *
     * @return \Phalcon\Mvc\ModelInterface
     */
    public function getModel(): ModelInterface;

    /**
     * Allows to check if the executed operation was successful
     *
     * @return bool
     */
    public function success(): bool;

}
