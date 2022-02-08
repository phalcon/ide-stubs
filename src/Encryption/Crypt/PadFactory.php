<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Crypt;

use Phalcon\Encryption\Crypt;
use Phalcon\Encryption\Crypt\Padding\PadInterface;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Support\Helper\Arr\Get;

/**
 * Class PadFactory
 *
 * @package Phalcon\Crypt
 */
class PadFactory extends AbstractFactory
{
    /**
     * @var string
     */
    protected $exception = 'Phalcon\\\\Encryption\\\\Crypt\\\\Exception\\\\Exception';

    /**
     * AdapterFactory constructor.
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
     * @return PadInterface
     */
    public function newInstance(string $name): PadInterface
    {
    }

    /**
     * Gets a Crypt pad constant and returns the unique service name for the
     * padding class
     *
     * @param int $number
     *
     * @return string
     */
    public function padNumberToService(int $number): string
    {
    }

    /**
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
