<?php

namespace Phalcon\Storage\Serializer;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface SerializerInterface extends \Serializable
{

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param mixed $data
     * @param $data
     */
    public function setData($data);

}
