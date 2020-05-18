<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Acl\Adapter;

use Phalcon\Acl\Enum;
use Phalcon\Events\ManagerInterface;

/**
 * Adapter for Phalcon\Acl adapters
 */
abstract class AbstractAdapter implements \Phalcon\Acl\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Active access which the list is checking if some role can access it
     *
     * @var string|null
     */
    protected $activeAccess;

    /**
     * Access Granted
     *
     * @var bool
     */
    protected $accessGranted = false;

    /**
     * Role which the list is checking if it's allowed to certain
     * component/access
     *
     * @var string|null
     */
    protected $activeRole;

    /**
     * Component which the list is checking if some role can access it
     *
     * @var string|null
     */
    protected $activeComponent;

    /**
     * Default access
     *
     * @var int
     */
    protected $defaultAccess = Enum::DENY;

    /**
     * Events manager
     *
     * @var ManagerInterface|null
     */
    protected $eventsManager;


    /**
     * Active access which the list is checking if some role can access it
     *
     * @return string|null
     */
    public function getActiveAccess(): ?string
    {
    }

    /**
     * Role which the list is checking if it's allowed to certain
     *
     * component/access
     *
     * @return string|null
     */
    public function getActiveRole(): ?string
    {
    }

    /**
     * Component which the list is checking if some role can access it
     *
     * @return string|null
     */
    public function getActiveComponent(): ?string
    {
    }

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction(): int
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     * @return void
     */
    public function setDefaultAction(int $defaultAccess)
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }
}
