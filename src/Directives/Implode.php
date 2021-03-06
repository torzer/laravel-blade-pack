<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to implode arrays
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Implode extends Base
{

    protected $name = 'implode';

    public function getSource($expression)
    {
        list($delimiter, $array) = $this->getArguments($expression);

        if (is_array($array)) {
            return "<?php echo implode({$delimiter}, {$array}); ?>";
        } else {
            return "<?php echo {$array}; ?>";
        }
    }

}
