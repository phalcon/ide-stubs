<?php

namespace Phalcon\Filter;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class FilterFactory
{

    /**
     * Returns a Locator object with all the helpers defined in anonynous
     * functions
     *
     * @return LocatorInterface
     */
    public function newInstance(): LocatorInterface {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
