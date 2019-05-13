<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\AssetInterface
 *
 * Interface for custom Phalcon\Assets reources
 */
interface AssetInterface
{
	/**
	 * Sets the asset's type.
	 */
	public function setType(string $type) : AssetInterface;

	/**
	 * Gets the asset's type.
	 */
	public function getType() : string;

	/**
	 * Sets if the asset must be filtered or not.
	 */
	public function setFilter(bool $filter) : AssetInterface;

	/**
	 * Gets if the asset must be filtered or not.
	 */
	public function getFilter() : bool;

	/**
	 * Sets extra HTML attributes.
	 */
	public function setAttributes(array $attributes) : AssetInterface;

	/**
	 * Gets extra HTML attributes.
	 */
	public function getAttributes() : ?array;

	/**
	 * Gets the asset's key.
	 */
	public function getAssetKey() : string;
}
