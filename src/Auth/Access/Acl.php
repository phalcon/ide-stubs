<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Access;

use Phalcon\Acl\Adapter\AdapterInterface;
use Phalcon\Acl\RoleAwareInterface;
use Phalcon\Auth\Exception;
use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Contracts\Auth\AuthUser;
use Phalcon\Contracts\Auth\Guard\Guard;

/**
 * ACL-backed access gate. Checks the authenticated user's role against a
 * Phalcon\Acl adapter: the ACL component is taken from the 'handler' context
 * key (prefixed with 'module' and the module separator when present) and the
 * ACL access is the action name. The 'params' context key is passed through
 * to the ACL adapter for callable rules.
 *
 * Filter semantics differ from the binary gates: except = bypass the gate
 * for the listed actions; only = the gate applies to the listed actions
 * exclusively (everything else is allowed).
 *
 * Role resolution: no user resolves to the configured guest role; a user
 * implementing Phalcon\Acl\RoleAwareInterface supplies its role name; any
 * other user is rejected with an exception.
 *
 * @phpstan-import-type AccessContext from Access
 */
class Acl extends \Phalcon\Auth\Access\AbstractAccess
{
    /**
     * @var AdapterInterface
     */
    protected $acl;

    /**
     * @var string
     */
    protected $guestRole = 'guest';

    /**
     * @var string
     */
    protected $moduleSeparator = ':';

    /**
     * @phpstan-param array{guestRole?: string, moduleSeparator?: string} $options
     * @param \Phalcon\Acl\Adapter\AdapterInterface $acl
     * @param array $options
     */
    public function __construct(\Phalcon\Acl\Adapter\AdapterInterface $acl, array $options = [])
    {
    }

    /**
     * @phpstan-param AccessContext $context
     *
     * @throws Exception
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @param string $actionName
     * @param array $context
     * @return bool
     */
    public function isAllowed(\Phalcon\Contracts\Auth\Guard\Guard $guard, string $actionName, array $context = []): bool
    {
    }

    /**
     * Unused: this gate overrides isAllowed() in full. Fail closed to
     * satisfy the abstract.
     *
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @return bool
     */
    protected function allowedIf(\Phalcon\Contracts\Auth\Guard\Guard $guard): bool
    {
    }

    /**
     * @throws Exception
     * @param \Phalcon\Contracts\Auth\Guard\Guard $guard
     * @return string
     */
    protected function resolveRole(\Phalcon\Contracts\Auth\Guard\Guard $guard): string
    {
    }
}
