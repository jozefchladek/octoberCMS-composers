<?php namespace Chladek\Composers\Models;

use Model;
use Chladek\Genres\Models\Genre;

/**
 * Model
 */
class Composer extends Model
{
    use \October\Rain\Database\Traits\Validation;




    /**
     * @var bool
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

    /**
     * @var string[]
     */
    public $fillable = ['name', 'genre', 'born_year', 'death_year', 'description'];


    /**
     * @param string|null $fieldName
     * @param string $value
     * @param string $formData
     * @return array
     */
    public function listGenres(?string $fieldName, string $value, string $formData)
    {
        $sameKeyValueArr = array_map(function ($a) {
            return array_pop($a);
        }, Genre::query()->get(['genre'])->toArray());
        return array_combine($sameKeyValueArr, $sameKeyValueArr);
    }
}
