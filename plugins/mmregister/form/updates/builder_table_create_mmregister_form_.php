<?php namespace Mmregister\Form\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMmregisterForm extends Migration
{
    public function up()
    {
        Schema::create('mmregister_form_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('delegate_title');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('fund_organisation');
            $table->text('postal_address')->nullable();
            $table->bigInteger('business_tel');
            $table->text('e_mail');
            $table->text('designation');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mmregister_form_');
    }
}
