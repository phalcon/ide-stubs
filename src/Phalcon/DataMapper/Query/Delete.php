<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\DataMapper\Pdo\Connection;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by AtlasPHP
 *
 * @link    https://github.com/atlasphp/Atlas.Query
 * @license https://github.com/atlasphp/Atlas.Qyert/blob/1.x/LICENSE.md
 */
class Delete extends \Phalcon\DataMapper\Query\AbstractConditions
{

    /**
     * Delete constructor.
     *
     * @param Connection $connection
     * @param Bind       $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     *
     * @return self
     */
    public function from(string $table): self
    {
    }

    /**
     * Adds the `RETURNING` clause
     *
     * @param array $columns
     *
     * @return Delete
     */
    public function returning(array $columns): Delete
    {
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
    }

    /**
     * Resets the internal store
     *
     * @return void
     */
    public function reset()
    {
    }
}
