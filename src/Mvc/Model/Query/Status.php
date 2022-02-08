<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Query;

use Phalcon\Messages\MessageInterface;
use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\Query\Status
 *
 * This class represents the status returned by a PHQL
 * statement like INSERT, UPDATE or DELETE. It offers context
 * information and the related messages produced by the
 * model which finally executes the operations when it fails
 *
 * ```php
 * $phql = "UPDATE Robots SET name = :name:, type = :type:, year = :year: WHERE id = :id:";
 *
 * $status = $app->modelsManager->executeQuery(
 *     $phql,
 *     [
 *         "id"   => 100,
 *         "name" => "Astroy Boy",
 *         "type" => "mechanical",
 *         "year" => 1959,
 *     ]
 * );
 *
 * // Check if the update was successful
 * if ($status->success()) {
 *     echo "OK";
 * }
 * ```
 */
class Status implements \Phalcon\Mvc\Model\Query\StatusInterface
{
    /**
     * @var ModelInterface|null
     */
    protected $model;

    /**
     * @var bool
     */
    protected $success;

    /**
     * Phalcon\Mvc\Model\Query\Status
     *
     * @param bool $success
     * @param \Phalcon\Mvc\ModelInterface $model
     */
    public function __construct(bool $success, \Phalcon\Mvc\ModelInterface $model = null)
    {
    }

    /**
     * Returns the messages produced because of a failed operation
     *
     * @return array|\Phalcon\Messages\MessageInterface[]
     */
    public function getMessages(): array
    {
    }

    /**
     * Returns the model that executed the action
     *
     * @return ModelInterface
     */
    public function getModel(): ModelInterface
    {
    }

    /**
     * Allows to check if the executed operation was successful
     *
     * @return bool
     */
    public function success(): bool
    {
    }
}
