<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Adapter;

use InvalidArgumentException;
use Phalcon\Auth\Adapter\Config\StreamAdapterConfig;
use Phalcon\Auth\Exception;
use Phalcon\Auth\Exceptions\FileCannotRead;
use Phalcon\Auth\Exceptions\FileDoesNotContainJson;
use Phalcon\Auth\Exceptions\FileDoesNotExist;
use Phalcon\Auth\Exceptions\FileNotValidJson;
use Phalcon\Auth\Internal\Options;
use Phalcon\Contracts\Encryption\Security\Security;
use Phalcon\Support\Helper\Json\Decode;

/**
 * JSON file-backed adapter.
 *
 * The file must contain a JSON array of user records:
 *   [{"id":1,"email":"a@b","password":"<hashed>"}, ...]
 *
 * @phpstan-import-type AuthUserRow from AbstractArrayAdapter
 *
 * @extends AbstractArrayAdapter<StreamAdapterConfig>
 */
class Stream extends \Phalcon\Auth\Adapter\AbstractArrayAdapter
{
    /**
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param \Phalcon\Auth\Adapter\Config\StreamAdapterConfig $config
     */
    public function __construct(\Phalcon\Contracts\Encryption\Security\Security $hasher, \Phalcon\Auth\Adapter\Config\StreamAdapterConfig $config)
    {
    }

    /**
     * @param \Phalcon\Contracts\Encryption\Security\Security $hasher
     * @param array $options
     * @return static
     */
    public static function fromOptions(\Phalcon\Contracts\Encryption\Security\Security $hasher, array $options): static
    {
    }

    /**
     * Loads and decodes the JSON users file. Re-read on every call — if you
     * need caching, wrap it.
     *
     * @phpstan-return list<AuthUserRow>
     *
     * @throws Exception
     * @return array
     */
    protected function loadUsers(): array
    {
    }

    /**
     * @param string $filename
     * @return bool
     */
    protected function phpFileExists(string $filename): bool
    {
    }

    /**
     * @param string $filename
     */
    protected function phpFileGetContents(string $filename)
    {
    }
}
