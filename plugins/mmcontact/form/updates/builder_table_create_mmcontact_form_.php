<?php namespace Mmcontact\Form\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMmcontactForm extends Migration
{
    public function up()
    {
        Schema::create('mmcontact_form_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('delegate_title');
            $table->integer('first_name');
            $table->integer('last_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mmcontact_form_');
    }
}
