<?php namespace Mmcontact\Form\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMmcontactForm extends Migration
{
    public function up()
    {
        Schema::dropIfExists('mmcontact_form_');
    }
    
    public function down()
    {
        Schema::create('mmcontact_form_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('delegate_title');
            $table->integer('first_name');
            $table->integer('last_name');
        });
    }
}
