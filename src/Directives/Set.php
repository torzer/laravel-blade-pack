<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to set value to a PHP variable
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Set extends Base
{

    protected $name = 'set';

    public function getSource($expression) {
        list($variable, $value) = $this->getArguments($expression);

        // Ensure variable has no spaces or apostrophes
        $variable = trim(str_replace('\'', '', $variable));

        // Make sure that the variable starts with $
        if (! starts_with($variable, '$')) {
            $variable = '$' . $variable;
        }

        $value = trim($value);

        return "<?php {$variable} = {$value}; ?>";

    }
}
