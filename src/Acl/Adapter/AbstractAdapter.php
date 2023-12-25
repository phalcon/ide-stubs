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
use Phalcon\Events\AbstractEventsAware;
use Phalcon\Events\EventsAwareInterface;

/**
 * Adapter for Phalcon\Acl adapters
 */
abstract class AbstractAdapter extends AbstractEventsAware implements \Phalcon\Acl\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Access Granted
     *
     * @var bool
     */
    protected $accessGranted = false;

    /**
     * Active access which the list is checking if some role can access it
     *
     * @var string|null
     */
    protected $activeAccess = null;

    /**
     * Component which the list is checking if some role can access it
     *
     * @var string|null
     */
    protected $activeComponent = null;

    /**
     * Role which the list is checking if it's allowed to certain
     * component/access
     *
     * @var string|null
     */
    protected $activeRole = null;

    /**
     * Default access
     *
     * @var int
     */
    protected $defaultAccess = Enum::DENY;

    /**
     * Active access which the list is checking if some role can access it
     *
     * @return string|null
     */
    public function getActiveAccess(): string|null
    {
    }

    /**
     * Component which the list is checking if some role can access it
     *
     * @return string|null
     */
    public function getActiveComponent(): string|null
    {
    }

    /**
     * Role which the list is checking if it's allowed to certain
     * component/access
     *
     * @return string|null
     */
    public function getActiveRole(): string|null
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
     * Sets the default access level (Phalcon\Acl\Enum::ALLOW or Phalcon\Acl\Enum::DENY)
     *
     * @param int $defaultAccess
     * @return void
     */
    public function setDefaultAction(int $defaultAccess): void
    {
    }
}
