<?php namespace Mmcontact\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase

{

    public function componentDetails(){

        return [
            'name' => 'Contact From',
            'description' => 'Simple content form'
        ];
    }

    public function onSend(){


        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email')
            ],
            [
                'name' => 'required|min:5',
                'email' => 'required|email'
            ]
        );

        if($validator->fails()){
            // Do something 
            return Redirect::back()->withErrors($validator);

        }else{

            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

            Mail::send('mmcontact.contact::mail.message', $vars, function($message) {

                $message->to('nicole383.sekgoma@gmail.com', 'Admin Person');

                $message->subject('New message from Contact Form');

            });
        }
    }
}