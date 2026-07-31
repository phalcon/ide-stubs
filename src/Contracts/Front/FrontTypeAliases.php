<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Front;

/**
 * [_FrontTypeAliases_][] provides custom PHPStan types to aid static analysis.
 *
 * - ```
 *   front_exit_status_int int<0,254>
 *   ```
 *     - An `int` exit status code: `0` for success, `1` to `254` for
 *       non-success. The value `255` is reserved by PHP itself.
 *
 * @phpstan-type front_exit_status_int int<0,254>
 */
interface FrontTypeAliases
{
}
