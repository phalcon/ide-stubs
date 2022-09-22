<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Exception;

/**
 * ExtendedPdo could not disconnect; e.g., because its PDO connection was
 * created externally and then injected.
 */
class CannotDisconnect extends \Phalcon\DataMapper\Pdo\Exception\Exception
{
}
