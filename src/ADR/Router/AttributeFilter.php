<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Router;

use Phalcon\ADR\Exceptions\RouteNotFound;
use Phalcon\Contracts\ADR\ADRTypes;
use Phalcon\Contracts\ADR\Router\AttributeFilter as AttributeFilterInterface;

/**
 * Reads an Action's optional static `params()` declaration and transforms the
 * router's positional tail segments: regex match (miss => RouteNotFound), cast
 * to a scalar type, then an optional converter closure. Declaration order names
 * the attributes; a declared parameter with no segment is skipped; surplus
 * segments pass through under their positional keys. An Action without
 * `params()` is returned unchanged.
 *
 * @phpstan-import-type adr_filtered_attributes from ADRTypes
 * @phpstan-import-type adr_route_attributes from ADRTypes
 */
final class AttributeFilter implements AttributeFilterInterface
{
    /**
     * @phpstan-param class-string          $actionClass
     * @phpstan-param adr_route_attributes  $attributes
     *
     * @phpstan-return adr_filtered_attributes
     * @param string $actionClass
     * @param array $attributes
     * @return array
     */
    public function filter(string $actionClass, array $attributes): array
    {
    }

    /**
     * @param string $value
     * @param string $type
     * @return double|int|string
     */
    protected function cast(string $value, string $type): int|float|string
    {
    }
}
