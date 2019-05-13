<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\Asset
 *
 * Represents an asset asset
 *
 *<code>
 * $asset = new \Phalcon\Assets\Asset("js", "javascripts/jquery.js");
 *</code>
 */
class Asset implements AssetInterface
{
	/**
	 * @var array | null
	 */
	protected $attributes;
	
	/**
	 * @var bool
	 */
	protected $filter;

	/**
	 * @var bool
	 */
	protected $local;
	
	/**
	 * @var string
	 */
	protected $path;

	/**
	 * @var string
	 */
	protected $sourcePath;

	/**
	 * @var string
	 */
	protected $targetPath;

	/**
	 * @var string
	 */
	protected $targetUri;
	
	/**
	 * @var string
	 */
	protected $type;

	/**
	 * Phalcon\Assets\Asset constructor
	 */
	public function __construct(string $type, string $path, bool $local = true, bool $filter = true, array $attributes = [])
	{
	}

	/**
	 * Sets the asset's type
	 */
	public function setType(string $type) : AssetInterface
	{
	}

	/**
	 * Sets the asset's path
	 */
	public function setPath(string $path) : AssetInterface
	{
	}

	/**
	 * Sets if the asset is local or external
	 */
	public function setLocal(bool $local) : AssetInterface
	{
	}

	/**
	 * Sets if the asset must be filtered or not
	 */
	public function setFilter(bool $filter) : AssetInterface
	{
	}

	/**
	 * Sets extra HTML attributes
	 */
	public function setAttributes(array $attributes) : AssetInterface
	{
	}

	/**
	 * Sets a target uri for the generated HTML
	 */
	public function setTargetUri(string $targetUri) : AssetInterface
	{
	}

	/**
	 * Sets the asset's source path
	 */
	public function setSourcePath(string $sourcePath) : AssetInterface
	{
	}

	/**
	 * Sets the asset's target path
	 */
	public function setTargetPath(string $targetPath) : AssetInterface
	{
	}

	/**
	 * Returns the content of the asset as an string
	 * Optionally a base path where the asset is located can be set
	 */
	public function getContent(string $basePath = null) : string
	{
	}

	/**
	 * Returns the real target uri for the generated HTML
	 */
	public function getRealTargetUri() : string
	{
	}

	/**
	 * Returns the complete location where the asset is located
	 */
	public function getRealSourcePath(string $basePath = null) : string
	{
	}

	/**
	 * Returns the complete location where the asset must be written
	 */
	public function getRealTargetPath(string $basePath = null) : string
	{
	}

	/**
	 * Gets the asset's key.
	 */
	public function getAssetKey() : string
	{
	}

    /**
     * Gets the asset's type.
     */
    public function getType(): string
    {
        // TODO: Implement getType() method.
    }

    /**
     * Gets if the asset must be filtered or not.
     */
    public function getFilter(): bool
    {
        // TODO: Implement getFilter() method.
    }

    /**
     * Gets extra HTML attributes.
     */
    public function getAttributes(): array
    {
        // TODO: Implement getAttributes() method.
    }
}
