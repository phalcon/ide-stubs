<?php

namespace Phalcon\Filter;

use Phalcon\Service\Locator;

/**
 * Phalcon\Html\TagLocator
 *
 * Lazy loads, stores and exposes sanitizer objects
 */
class FilterLocator extends Locator
{
	const FILTER_ABSINT      = "absint";
	const FILTER_ALNUM       = "alnum";
	const FILTER_ALPHA       = "alpha";
	const FILTER_BOOL        = "bool";
	const FILTER_EMAIL       = "email";
	const FILTER_FLOAT       = "float";
	const FILTER_INT         = "int";
	const FILTER_LOWER       = "lower";
	const FILTER_LOWERFIRST  = "lowerFirst";
	const FILTER_REGEX       = "regex";
	const FILTER_REMOVE      = "remove";
	const FILTER_REPLACE     = "replace";
	const FILTER_SPECIAL     = "special";
	const FILTER_SPECIALFULL = "specialFull";
	const FILTER_STRING      = "string";
	const FILTER_STRIPTAGS   = "striptags";
	const FILTER_TRIM        = "trim";
	const FILTER_UPPER       = "upper";
	const FILTER_UPPERFIRST  = "upperFirst";
	const FILTER_UPPERWORDS  = "upperWords";
	const FILTER_URL         = "url";

	/**
	 * Sanitizes a value with a specified single or set of sanitizers
	 */
	public function sanitize($value, $sanitizers, bool $noRecursive = false)	{
	}

	private function processArrayValues(array $values, string $sanitizerName, array $sanitizerParams = []) : array
	{
	}

	/**
	 * Internal sanitize wrapper for recursion
	 */
	private function sanitizer($value, string $sanitizerName, array $sanitizerParams = [])	{
	}
}
