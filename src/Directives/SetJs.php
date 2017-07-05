<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to set a PHP Laravel value to a JS accessible variable
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class SetJs extends Base
{

    protected $name = 'setJs';

    public function getSource($expression)
    {
        list($var, $data) = $this->getArguments($expression);
        return "<?php echo \"<script>window['{$var}']= {$data};</script>\" ?>";
    }

}
