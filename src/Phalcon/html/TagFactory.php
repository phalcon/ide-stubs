<?php

namespace Phalcon\Html;

/**
 * ServiceLocator implementation for Tag helpers
 */
class TagFactory extends \Phalcon\Factory\AbstractFactory
{
    /**
     * @var <EscaperInterface>
     */
    private $escaper;


    /**
     * TagFactory constructor.
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaper
     * @param array $services
     */
    public function __construct(\Phalcon\Escaper\EscaperInterface $escaper, array $services = array()) {}

    /**
     * @param string name
     *
     * @throws Exception
     * @param string $name
     * @return mixed
     */
    public function newInstance(string $name) {}

    /**
     * @return array
     */
    protected function getAdapters(): array {}

}
