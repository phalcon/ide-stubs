<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Input;

use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\Request\Bag\AttributeBag;

/**
 * Generic, string-keyed input bag for an Action.
 *
 * `fromRequest()` merges the request query, parsed body and route attributes
 * into a single bag (later sources win). Extend it to build a typed, per-domain
 * input value object: the factories use late static binding, so a subclass's
 * `fromRequest()` / `fromArray()` return that subclass.
 */
class Input
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
    }

    /**
     * @param array $data
     * @return static
     */
    public static function fromArray(array $data): static
    {
    }

    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @return static
     */
    public static function fromRequest(\Phalcon\Contracts\Http\AttributeRequest $request): static
    {
    }

    /**
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
    }
}
