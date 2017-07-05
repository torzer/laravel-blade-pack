<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to implode arrays
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Explode extends Base
{

    protected $name = 'explode';

    public function getSource($expression)
    {
        list($delimiter, $string) = $this->getArguments($expression);

        return "<?php echo explode({$delimiter}, {$string}); ?>";
    }

}
