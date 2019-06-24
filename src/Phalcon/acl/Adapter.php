<?php

namespace Phalcon\Acl;

use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Phalcon\Acl\Adapter
 *
 * Adapter for Phalcon\Acl adapters
 */
abstract class Adapter implements AdapterInterface, EventsAwareInterface
{
    /**
     * Events manager
     *
     * @var mixed
     */
    protected $eventsManager;

    /**
     * Default access
     *
     * @var bool
     */
    protected $defaultAccess = true;

    /**
     * Access Granted
     *
     * @var bool
     */
    protected $accessGranted = false;

    /**
     * Role which the list is checking if it's allowed to certain resource/access
     *
     * @var string
     */
    protected $activeRole;

    /**
     * Resource which the list is checking if some role can access it
     *
     * @var string
     */
    protected $activeComponent;

    /**
     * Active access which the list is checking if some role can access it
     *
     * @var string
     */
    protected $activeAccess;


    /**
     * Role which the list is checking if it's allowed to certain resource/access
     *
     * @return string
     */
    public function getActiveRole() : string {}

    /**
     * Resource which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveComponents() {}

    /**
     * Active access which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveAccess() : string {}

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager
     */
    public function setEventsManager(ManagerInterface $eventsManager) {}

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager() : ManagerInterface {}

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     */
    public function setDefaultAction(int $defaultAccess) : void {}

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction() : int {}

}
