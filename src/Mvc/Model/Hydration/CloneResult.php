<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Hydration;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\Model\Exceptions\InvalidDumpResultKey;
use Phalcon\Mvc\ModelInterface;

/**
 * @phpstan-import-type mvc_model_data from MvcTypes
 */
class CloneResult
{
    /**
     * Assigns values to a model from an array returning a new model
     *
     * ```php
     * $invoice = Phalcon\Mvc\Model::cloneResult(
     *     new Invoices(),
     *     [
     *         "type" => "mechanical",
     *         "name" => "Test Invoice",
     *         "year" => 1952,
     *     ]
     * );
     * ```
     *
     * @phpstan-param mvc_model_data $data
     * @param \Phalcon\Mvc\ModelInterface $base
     * @param array $data
     * @param int $dirtyState
     * @return ModelInterface
     */
    public static function cloneResult(\Phalcon\Mvc\ModelInterface $base, array $data, int $dirtyState = 0): ModelInterface
    {
    }
}
