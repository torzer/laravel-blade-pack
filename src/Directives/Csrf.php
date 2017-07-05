<?php

namespace Torzer\Common\Blade\Directives;

/**
 * A directive to remove all the csrf from the layout
 *
 * @author Ademir Mazer Jr <mazer@torzer.com>
 */
class Csrf
{

    protected $name = 'csrf';

    public function getName()
    {
        return $this->name;
    }

    public function getSource($expression)
    {
        $namespace = trim(str_replace('\'', '', $namespace)) ?: 'Laravel';
        $csrf = csrf_token();

        $metaTag = "<meta name=\"csrf-token\" content=\"{$csrf}\">";
        $scriptTag = "<script>window.{$namespace} = {'csrfToken': '{$csrf}'}</script>";

        return $metaTag . $scriptTag;
    }

}
