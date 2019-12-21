<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\Behavior
 *
 * This is an optional base class for ORM behaviors
 */
abstract class Behavior implements BehaviorInterface
{
    /**
     * @var array
     */
    protected $options;


    /**
     * Phalcon\Mvc\Model\Behavior
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Returns the behavior options related to an event
     *
     * @return array
     * @param string $eventName
     */
    protected function getOptions(string $eventName = null)
    {
    }

    /**
     * Acts as fallbacks when a missing method is called on the model
     *
     * @param ModelInterface $model
     * @param string $method
     * @param array $arguments
     */
    public function missingMethod(ModelInterface $model, string $method, array $arguments = array())
    {
    }

    /**
     * Checks whether the behavior must take action on certain event
     *
     * @param string $eventName
     * @return bool
     */
    protected function mustTakeAction(string $eventName): bool
    {
    }

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param ModelInterface $model
     */
    public function notify(string $type, ModelInterface $model)
    {
    }
}
