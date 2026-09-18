<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Transaction;

use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\Transaction\Failed
 *
 * This class will be thrown to exit a try/catch block for isolated transactions
 */
class Failed extends \Phalcon\Mvc\Model\Transaction\Exception
{
    protected ?\Phalcon\Mvc\ModelInterface $record = null;

    /**
     * Constructor
     *
     * @param string $message
     * @param \Phalcon\Mvc\ModelInterface|null $record
     */
    public function __construct(string $message, ?\Phalcon\Mvc\ModelInterface $record = null)
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return ModelInterface|null
     */
    public function getRecord(): ModelInterface|null
    {
    }

    /**
     * Returns validation record messages which stop the transaction
     *
     * @return MessageInterface[]|string
     */
    public function getRecordMessages(): string|array
    {
    }
}
