<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Support\Helper\Json\Decode;
use Phalcon\Support\Helper\Json\Encode;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Json extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    private \Phalcon\Support\Helper\Json\Decode $decode;

    private \Phalcon\Support\Helper\Json\Encode $encode;

    /**
     * AbstractSerializer constructor.
     *
     * @param mixed $data
     */
    public function __construct($data = null)
    {
    }

    /**
     * Serializes data
     *
     * @return mixed
     */
    public function serialize(): mixed
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }
}
