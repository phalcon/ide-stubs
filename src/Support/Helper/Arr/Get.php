<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Arr;

use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * Gets an array element by key and if it does not exist returns the default.
 * It also allows for casting the returned value to a specific type using
 * `settype` internally
 */
class Get
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;



    /**
     * @phpstan-param array<array-key, mixed> $collection
     * @phpstan-param array-key               $index
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @param string|null $cast
     * @return mixed
     */
    public function __invoke(array $collection, $index, $defaultValue = null, ?string $cast = null): mixed
    {
    }
}
