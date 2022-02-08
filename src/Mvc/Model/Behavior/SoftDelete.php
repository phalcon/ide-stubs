<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Behavior;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Behavior;
use Phalcon\Mvc\Model\Exception;

/**
 * Phalcon\Mvc\Model\Behavior\SoftDelete
 *
 * Instead of permanently delete a record it marks the record as deleted
 * changing the value of a flag column
 */
class SoftDelete extends Behavior
{
    /**
     * Listens for notifications from the models manager
     *
     * @param string $type
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function notify(string $type, \Phalcon\Mvc\ModelInterface $model)
    {
    }
}
