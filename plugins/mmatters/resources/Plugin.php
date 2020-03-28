<?php namespace Mmatters\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Mmatters',
            'description' => 'Provides company resources',
            'author' => 'Nicky Sekgoma',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Mmatters\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
} 