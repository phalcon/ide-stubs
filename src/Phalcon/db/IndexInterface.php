<?php

namespace Phalcon\Db;

/**
 * Interface for Phalcon\Db\Index
 */
interface IndexInterface
{

    /**
     * Gets the columns that corresponds the index
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
     * Gets the index type
     *
     * @return string
     */
    public function getType(): string;

}
