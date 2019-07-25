<?php

namespace Phalcon\Mvc\View\Engine;

/**
 * Adapter to use PHP itself as templating engine
 */
class Php extends \Phalcon\Mvc\View\Engine\AbstractEngine
{

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false) {}

}
