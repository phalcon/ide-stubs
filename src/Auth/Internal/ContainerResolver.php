<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Internal;

use Phalcon\Container\Exceptions\Exception as ContainerException;
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception as DiException;

/**
 * Internal single source of truth for resolving services from either the
 * new Phalcon\Container\Container or the legacy Phalcon\Di\Di. Not part of
 * the public API.
 *
 * Intent is Container-first; the legacy Di is supported "with provisions":
 * definitions must be pre-registered (no autowiring), the one exception
 * being the fresh path, which lets Di build an unregistered but existing
 * class via its class builder.
 *
 * All legacy-Di failures are normalized to Phalcon\Container\Exceptions so
 * callers and userland catch a single exception family.
 */
final class ContainerResolver
{
    /**
     * Validates that the value is a supported container.
     *
     * @throws \TypeError
     * @param mixed $container
     * @return void
     */
    public static function ensureContainer($container): void
    {
    }

    /**
     * Resolves a fresh instance: new() on the Container (bypasses the
     * instance cache); get() on the legacy Di (fresh for unregistered or
     * non-shared services). On Di, an unregistered but existing class is
     * still built via the class builder.
     *
     * @throws ContainerException
     * @param mixed $container
     * @param string $name
     * @return object
     */
    public static function resolveFresh($container, string $name): object
    {
    }

    /**
     * Resolves the first candidate service name that the container can
     * provide, as a shared instance. Used for framework services (request,
     * cookies, session) whose container key may vary between application
     * setups.
     *
     * @param list<string> $candidates
     *
     * @throws ContainerException
     * @param mixed $container
     * @param string $context
     * @return object
     */
    public static function requireService($container, array $candidates, string $context): object
    {
    }

    /**
     * Builds the ordered candidate list for a framework service:
     * an explicit override from options['services'][key] if present,
     * otherwise the interface FQN followed by the conventional short name.
     *
     * @param array<string, mixed> $options
     *
     * @return list<string>
     * @param string $key
     * @param string $fqn
     * @param string $shortName
     */
    public static function serviceCandidates(array $options, string $key, string $fqn, string $shortName): array
    {
    }

    /**
     * Resolves a shared instance: get() on the Container; getShared() on the
     * legacy Di. Legacy-Di failures are normalized to a Container exception
     * with the original chained as the cause.
     *
     * @throws ContainerException
     * @param mixed $container
     * @param string $name
     * @return object
     */
    private static function resolveShared($container, string $name): object
    {
    }
}
