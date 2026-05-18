<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Db;

/**
 * Canonical contract for Phalcon\Db\Reference.
 */
interface Reference
{
    /**
     * Gets local columns which reference is based
     *
     * @return array
     */
    public function getColumns(): array;

    /**
     * Gets the index name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets the referenced on delete
     *
     * @return string|null
     */
    public function getOnDelete(): string|null;

    /**
     * Gets the referenced on update
     *
     * @return string|null
     */
    public function getOnUpdate(): string|null;

    /**
     * Gets referenced columns
     *
     * @return array
     */
    public function getReferencedColumns(): array;

    /**
     * Gets the schema where referenced table is
     *
     * @return string|null
     */
    public function getReferencedSchema(): string|null;

    /**
     * Gets the referenced table
     *
     * @return string
     */
    public function getReferencedTable(): string;

    /**
     * Gets the schema where referenced table is
     *
     * @return string|null
     */
    public function getSchemaName(): string|null;
}
