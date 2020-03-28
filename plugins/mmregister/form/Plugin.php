<?php namespace Mmregister\Form;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Mmregister\Form\Components\Form' => 'form',
        ];
    }

    public function registerSettings()
    {
    }
}
