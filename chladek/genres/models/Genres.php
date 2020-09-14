<?php namespace Chladek\Genres\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Genres extends Model
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
    public $table = 'chladek_genres_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

}
