<?php

namespace Torzer\Common\Blade;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{

    public function register() {

    }


    public function boot()
    {
        foreach ($this->getDirectives() as $directive) {
            $d = new $directive;

            \Blade::directive($d->getName(), function($expression) use($d){
                return $d->getSource($expression);
            });
        }

    }

    protected function getDirectives() {
        return [
            Directives\Dd::class,
            Directives\Dump::class,
        ];
    }


}
