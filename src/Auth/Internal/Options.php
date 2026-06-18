<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Internal;

use Phalcon\Auth\Exception;

/**
 * Internal option-parsing helpers shared by adapter / guard fromOptions()
 * implementations. Not part of the public API.
 */
final class Options
{
    /**
     * @phpstan-param array<string, mixed>                              $options
     * @phpstan-param list<array{id?: int|string}&array<string, mixed>> $defaultValue
     *
     * @phpstan-return list<array{id?: int|string}&array<string, mixed>>
     * @param array $options
     * @param string $key
     * @param array $defaultValue
     * @return array
     */
    public static function arrayOption(array $options, string $key, array $defaultValue): array
    {
    }

    /**
     * @phpstan-param array<string, mixed> $options
     *
     * @phpstan-return array<string, mixed>
     * @throws Exception
     * @param array $options
     * @param string $key
     * @param string $context
     * @return array
     */
    public static function requireArray(array $options, string $key, string $context): array
    {
    }

    /**
     * @phpstan-param array<string, mixed> $options
     *
     * @throws Exception
     * @param array $options
     * @param string $key
     * @param string $context
     * @return string
     */
    public static function requireString(array $options, string $key, string $context): string
    {
    }

    /**
     * @param array<string, mixed> $options
     * @param string $key
     * @return string|null
     */
    public static function stringOrNull(array $options, string $key): string|null
    {
    }
}
