<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets\Traits;

/**
 * Shared source/target path, uri and locality state for asset objects
 * (`Asset`, `Collection`).
 */
trait SourceTargetTrait
{
    /**
     * @var bool
     */
    protected $isLocal = true;

    /**
     * @var string
     */
    protected $sourcePath = '';

    /**
     * @var string
     */
    protected $targetPath = '';

    /**
     * @var string
     */
    protected $targetUri = '';

    /**
     * @return string
     */
    public function getSourcePath(): string
    {
    }

    /**
     * @return string
     */
    public function getTargetPath(): string
    {
    }

    /**
     * @return string
     */
    public function getTargetUri(): string
    {
    }

    /**
     * Checks if the asset is local or not
     *
     * @return bool
     */
    public function isLocal(): bool
    {
    }

    /**
     * Sets if the asset is local or external
     *
     * @param bool $flag
     *
     * @return static
     */
    public function setIsLocal(bool $flag): static
    {
    }

    /**
     * Sets the asset's source path
     *
     * @param string $sourcePath
     *
     * @return static
     */
    public function setSourcePath(string $sourcePath): static
    {
    }

    /**
     * Sets the asset's target path
     *
     * @param string $targetPath
     *
     * @return static
     */
    public function setTargetPath(string $targetPath): static
    {
    }

    /**
     * Sets a target uri for the generated HTML
     *
     * @param string $targetUri
     *
     * @return static
     */
    public function setTargetUri(string $targetUri): static
    {
    }
}
