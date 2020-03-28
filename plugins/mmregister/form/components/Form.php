<?php namespace Mmregister\Form\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validater;
use Redirect;
use Mmregister\Form\Models\Form\Fields;

class Form extends ComponentBase

{

    public function componentDetails(){
        return[
            'name' => 'Registration Form',
            'description' => 'Money Matters Registration Form'
        ];
    }

    public function onSave(){
        
        $entry = new Form();

        $entry->delegate_title = Input::get('delegate');
        $entry->first_name = Input::get('first');
        $entry->last_name = Input::get('last');
        $entry->Save();



    }


}