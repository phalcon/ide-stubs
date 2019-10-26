<?php

namespace Phalcon\Domain\Payload;

use Phalcon\Domain\Payload\ReadableInterface;
use Phalcon\Domain\Payload\WriteableInterface;

/**
 * This interface is used for consumers
 */
interface PayloadInterface extends \Phalcon\Domain\Payload\ReadableInterface, \Phalcon\Domain\Payload\WriteableInterface
{

}
