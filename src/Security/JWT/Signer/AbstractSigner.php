<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Security\JWT\Signer;

/**
 * Class AbstractSigner
 *
 * @property string $algo
 */
abstract class AbstractSigner implements \Phalcon\Security\JWT\Signer\SignerInterface
{
    /**
     * @var string
     */
    protected $algorithm;


    /**
     * @return string
     */
    public function getAlgorithm(): string
    {
    }
}
