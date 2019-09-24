<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by phalcon-api and AuraPHP
 * @link    https://github.com/phalcon/phalcon-api
 * @license https://github.com/phalcon/phalcon-api/blob/master/LICENSE
 * @link    https://github.com/auraphp/Aura.Payload
 * @license https://github.com/auraphp/Aura.Payload/blob/3.x/LICENSE
 *
 * @see Original inspiration for the https://github.com/phalcon/phalcon-api
 */

namespace Phalcon\Domain\Payload;

/**
 * Holds the payload
 */
class Payload implements PayloadInterface
{
    /**
     * Extra information
     *
     * @var mixed
     */
    protected $extras;

    /**
     * Input
     *
     * @var mixed
     */
    protected $input;

    /**
     * Messages
     *
     * @var mixed
     */
    protected $messages;

    /**
     * Status
     *
     * @var mixed
     */
    protected $status;

    /**
     * Output
     *
     * @var mixed
     */
    protected $output;


    /**
     * Extra information
     *
     * @return mixed
     */
    public function getExtras()
    {
    }

    /**
     * Input
     *
     * @return mixed
     */
    public function getInput()
    {
    }

    /**
     * Messages
     *
     * @return mixed
     */
    public function getMessages()
    {
    }

    /**
     * Status
     *
     * @return mixed
     */
    public function getStatus()
    {
    }

    /**
     * Output
     *
     * @return mixed
     */
    public function getOutput()
    {
    }

    /**
     * Sets arbitrary extra domain information.
     *
     * @param mixed $extras
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setExtras($extras): PayloadInterface
    {
    }

    /**
     * Sets the domain input.
     *
     * @param mixed $input
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setInput($input): PayloadInterface
    {
    }

    /**
     * Sets the domain messages.
     *
     * @param mixed $messages
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setMessages($messages): PayloadInterface
    {
    }

    /**
     * Sets the domain output.
     *
     * @param mixed $output
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setOutput($output): PayloadInterface
    {
    }

    /**
     * Sets the payload status.
     *
     * @param mixed $status
     * @return \Phalcon\Domain\Payload\PayloadInterface
     */
    public function setStatus($status): PayloadInterface
    {
    }
}
