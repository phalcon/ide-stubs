<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Ioc;

/**
 * [_IocContainer_][] affords obtaining services by name.
 *
 * - Notes:
 *
 *     -This interface does not afford service management. The container
 *       will need to obtain services somehow, e.g. from a [Service-Interop][]
 *       implementation.
 *
 * @phpstan-import-type ioc_service_name_string from IocTypeAliases
 * @phpstan-import-type ioc_service_object from IocTypeAliases
 */
interface IocContainer
{
    /**
     * Is the container able to return an instance of the `$serviceName`?
     *
     * - Notes:
     *
     *     -The logic for this method is expressly unspecified. The ability
     *       check may be accomplished by querying a service management subsystem,
     *       or by some other means.
     *
     * @param ioc_service_name_string $serviceName
     * @return bool
     */
    public function hasService(string $serviceName): bool;

    /**
     * Returns an instance of the `$serviceName`.
     *
     * - Directives:
     *
     *     - Implementations MUST throw [_IocThrowable_][] if the container
     *       cannot return an instance of the `$serviceName`.
     *
     * - Notes:
     *
     *     -The logic for this method is expressly unspecified. Retrieval
     *       may be accomplished via a service management subsystem, or by some
     *       other means.
     *
     *     -The returned instance may be new or shared. The retrieval
     *       logic defines the service lifetime, not the container (per se) and
     *       not the caller requesting the service.
     *
     * @param ioc_service_name_string $serviceName
     * @return ioc_service_object
     */
    public function getService(string $serviceName): object;
}
