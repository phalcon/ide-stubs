<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Transaction;

use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\Transaction\Failed
 *
 * This class will be thrown to exit a try/catch block for isolated transactions
 */
class Failed extends \Phalcon\Mvc\Model\Transaction\Exception
{

    protected $record = null;


    /**
     * Phalcon\Mvc\Model\Transaction\Failed constructor
     *
     * @param string $message
     * @param \Phalcon\Mvc\ModelInterface $record
     */
    public function __construct(string $message, \Phalcon\Mvc\ModelInterface $record = null)
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return ModelInterface
     */
    public function getRecord(): ModelInterface
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getRecordMessages(): array
    {
    }
}
