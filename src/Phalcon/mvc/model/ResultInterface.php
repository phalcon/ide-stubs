<?php

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
     * @return bool|\Phalcon\Mvc\ModelInterface
     */
    public function setDirtyState(int $dirtyState);
}
