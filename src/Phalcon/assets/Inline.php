<?php

namespace Phalcon\Assets;

/**
 * Phalcon\Assets\Inline
 *
 * Represents an inline asset
 *
 * <code>
 * $inline = new \Phalcon\Assets\Inline("js", "alert('hello world');");
 * </code>
 */
class Inline implements \Phalcon\Assets\ResourceInterface
{
    /**
     * @var string
     */
    protected $_type;


    protected $_content;

    /**
     * @var bool
     */
    protected $_filter;


    protected $_attributes;


    /**
     * @return string
     */
    public function getType() {}


    public function getContent() {}

    /**
     * @return bool
     */
    public function getFilter() {}

    /**
     * Phalcon\Assets\Inline constructor
     *
     * @param string $type
     * @param string $content
     * @param boolean $filter
     * @param array $attributes
     */
    public function __construct($type, $content, $filter = true, $attributes = null) {}

    /**
     * Sets the inline's type
     *
     * @param string $type
     * @return ResourceInterface
     */
    public function setType($type) {}

    /**
     * Sets if the resource must be filtered or not
     *
     * @param bool $filter
     * @return ResourceInterface
     */
    public function setFilter($filter) {}

    /**
     * Sets extra HTML attributes
     *
     * @param array $attributes
     * @return ResourceInterface
     */
    public function setAttributes(array $attributes) {}

    /**
     * returns extra HTML attributes
     *
     * @return array|null
     */
    public function getAttributes() {}

    /**
     * Gets the resource's key.
     *
     * @return string
     */
    public function getResourceKey() {}

}
