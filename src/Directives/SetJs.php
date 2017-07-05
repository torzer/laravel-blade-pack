<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to set a PHP Laravel value to a JS accessible variable
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class SetJs
{

    protected $name = 'setJs';

    public function getName()
    {
        return $this->name;
    }

    public function getSource($expression)
    {
        list($var, $data) = explode(',', str_replace(['(', ')', ' ', "'"], '', $arguments));
        return "<?php echo \"<script>window['{$var}']= {$data};</script>\" ?>";
    }

}
