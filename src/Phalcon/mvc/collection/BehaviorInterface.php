<?php

namespace Phalcon\Mvc\Collection;

/**
 * Phalcon\Mvc\Collection\BehaviorInterface
 *
 * Interface for Phalcon\Mvc\Collection\Behavior
 */
interface BehaviorInterface
{

    /**
     * Calls a method when it's missing in the collection
     *
     * @param \Phalcon\Mvc\CollectionInterface $collection
     * @param string $method
     * @param array $arguments
     */
    public function missingMethod(\Phalcon\Mvc\CollectionInterface $collection, string $method, array $arguments = array());

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type
     * @param \Phalcon\Mvc\CollectionInterface $collection
     */
    public function notify(string $type, \Phalcon\Mvc\CollectionInterface $collection);

}
