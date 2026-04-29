<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Html\Helper\Input\Select;

use InvalidArgumentException;
use Phalcon\Mvc\Model\ResultsetInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class ResultsetData implements \Phalcon\Html\Helper\Input\Select\SelectDataInterface
{
    /**
     * @var ResultsetInterface
     */
    protected $resultset;

    /**
     * @var array
     */
    protected $using = [];

    /**
     * @param ResultsetInterface $resultset
     * @param array $using
     */
    public function __construct(\Phalcon\Mvc\Model\ResultsetInterface $resultset, array $using)
    {
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
    }
}
