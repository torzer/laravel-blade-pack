<?php

namespace Torzer\Common\Blade\Directives;

/**
 * The base class to this package directives
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
abstract class Base
{

    protected $name = 'directive-name-must-be-overwriten';

    public function getName()
    {
        return $this->name;
    }

    abstract public function getSource($expression);

    /**
     * Get argument array from argument string.
     *
     * @param string $argumentString
     *
     * @return array
     */
    protected function getArguments($argumentString)
    {
        return explode(',', str_replace(['(', ')', ' ', "'"], '', $argumentString));
    }
}
