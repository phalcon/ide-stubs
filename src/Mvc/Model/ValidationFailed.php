<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Messages\Message;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\ValidationFailed
 *
 * This exception is generated when a model fails to save a record
 * Phalcon\Mvc\Model must be set up to have this behavior
 */
class ValidationFailed extends \Phalcon\Mvc\Model\Exception
{
    /**
     * @var array
     */
    protected $messages = [];

    /**
     * @var ModelInterface
     */
    protected $model;

    /**
     * Phalcon\Mvc\Model\ValidationFailed constructor
     *
     * @param ModelInterface $model
     * @param Message[] $validationMessages
     */
    public function __construct(\Phalcon\Mvc\ModelInterface $model, array $validationMessages)
    {
    }

    /**
     * Returns the complete group of messages produced in the validation
     *
     * @return array|\Phalcon\Messages\Message[]
     */
    public function getMessages(): array
    {
    }

    /**
     * Returns the model that generated the messages
     *
     * @return ModelInterface
     */
    public function getModel(): ModelInterface
    {
    }
}
