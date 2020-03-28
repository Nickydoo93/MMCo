<?php namespace Mmcontact\Contact; 
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [

            'Mmcontact\Contact\Components\ContactForm' => 'contactform'


        ];
    }

    public function registerSettings()
    {
    }
}
