<?php namespace Mmregister\Form\Models;

use Model;

/**
 * Model
 */
class Form extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mmregister_form_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
