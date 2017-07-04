<?php

namespace Torzer\Common\Blade\Directives;

/**
 * dd function as directive
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Dd
{

    protected $name = 'dd';

    public function getName()
    {
        return $this->name;
    }

    public function getSource($expression) {
        return "<?php dd({$expression}); ?>";
    }
}
