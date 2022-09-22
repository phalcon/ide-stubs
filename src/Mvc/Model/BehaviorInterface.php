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
 * Phalcon\Mvc\Model\BehaviorInterface
 *
 * Interface for Phalcon\Mvc\Model\Behavior
 */
interface BehaviorInterface
{
    /**
     * Calls a method when it's missing in the model
     *
     * @param \Phalcon\Mvc\ModelInterface $model
     * @param string $method
     * @param array $arguments
     */
    public function missingMethod(\Phalcon\Mvc\ModelInterface $model, string $method, array $arguments = []);

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notify(string $type, \Phalcon\Mvc\ModelInterface $model);
}
