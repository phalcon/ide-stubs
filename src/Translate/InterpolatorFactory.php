<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Translate;

use Phalcon\Factory\AbstractFactory;
use Phalcon\Translate\Interpolator\InterpolatorInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 */
class InterpolatorFactory extends AbstractFactory
{
    /**
     * InterpolatorFactor constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     *
     * @return InterpolatorInterface
     * @throws Exception
     */
    public function newInstance(string $name): InterpolatorInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
