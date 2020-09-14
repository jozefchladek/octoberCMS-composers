<?php namespace Chladek\Composers\Models;

use Model;

/**
 * Model
 */
class Composer extends Model
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
    public $table = 'chladek_composers_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $fillable = ['name', 'genre', 'born_year', 'death_year', 'description'];
}
