<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Service;

use Phalcon\Contracts\Container\ContainerTypes;

/**
 * @phpstan-import-type container_service_names from ContainerTypes
 */
interface Enumerable
{
    /**
     * Returns the names of every registered service definition. Names that
     * only exist as an alias, a pre-set instance or a parameter are not
     * included.
     *
     * @phpstan-return container_service_names
     * @return array
     */
    public function getServiceNames(): array;
}
