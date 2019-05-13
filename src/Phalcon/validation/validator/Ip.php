<?php

namespace Phalcon\Validation\Validator;

use Phalcon\Validation;
use Phalcon\Validation\Validator;
use Phalcon\Messages\Message;

/**
 * Phalcon\Validation\Validator\ip
 *
 * Check for ip addresses
 *
 * <code>
 * use Phalcon\Validation\Validator\Ip as IpValidator;
 *
 * $validator->add(
 *     "ip_address",
 *     new IpValidator(
 *         [
 *             "message" => ":field must contain only ip addresses",
 *             "version" => IP::VERSION_4 | IP::VERSION_6, // v6 and v4. The same if not specified
 *             "allowReserved" => false,   // False if not specified. Ignored for v6
 *             "allowPrivate" => false,   // False if not specified
 *             "allowEmpty" => false,
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "source_address",
 *         "destination_address",
 *     ],
 *     new IpValidator(
 *         [
 *             "message" => [
 *                 "source_address" => "source_address must contain only ip addresses",
 *                 "destination_address" => "destination_address must contain only ip addresses",
 *             ],
 *             "version" => [
 *                  "source_address" => Ip::VERSION_4 | IP::VERSION_6,
 *                  "destination_address" => Ip::VERSION_4,
 *             ],
 *             "allowReserved" => [
 *                  "source_address" => false,
 *                  "destination_address" => true,
 *             ],
 *             "allowPrivate" => [
 *                  "source_address" => false,
 *                  "destination_address" => true,
 *             ],
 *             "allowEmpty" => [
 *                  "source_address" => false,
 *                  "destination_address" => true,
 *             ],
 *         ]
 *     )
 * );
 * </code>
 */
class Ip extends Validator
{
	const VERSION_4  = FILTER_FLAG_IPV4;
	const VERSION_6  = FILTER_FLAG_IPV6;

	/**
	 * Executes the validation
	 */
	public function validate(Validation $validation, $field) : bool
	{
	}
}
