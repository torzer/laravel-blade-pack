<?php

namespace Torzer\Common\Blade\Directives;

/**
 * var_dump function as directive
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Dump
{

    protected $name = 'dump';

    public function getName()
    {
        return $this->name;
    }

    public function getSource($expression) {
        return "<?php var_dump({$expression}); ?>";
    }
}
