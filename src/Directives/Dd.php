<?php

namespace Torzer\Common\Blade\Directives;

/**
 * dd function as directive
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Dd extends Base
{

    protected $name = 'dd';

    public function getSource($expression) {
        return "<?php dd({$expression}); ?>";
    }
}
