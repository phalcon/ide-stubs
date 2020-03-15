<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

/**
 * Phalcon\Mvc\Model\ResultInterface
 *
 * All single objects passed as base objects to Resultsets must implement this interface
 */
interface ResultInterface
{

    /**
     * Sets the object's state
     *
     * @param int $dirtyState
     * @return mixed
     */
    public function setDirtyState(int $dirtyState);
}
