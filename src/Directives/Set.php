<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to set value to a PHP variable
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Set
{

    protected $name = 'set';

    public function getName()
    {
        return $this->name;
    }

    public function getSource($expression) {
        list($variable, $value) = explode(', ', str_replace(['(', ')'], '', $expression));
        return "<?php {$variable} = {$value}; ?>";
    }
}
