<?php namespace Chladek\Genres\Components;

use Cms\Classes\ComponentBase;
use Chladek\Genres\Models\Genre;

class Genres extends ComponentBase
{
    public object $genres;

    /**
     * @return string[]
     */
    public function componentDetails(): array
    {
        return [
            'name' => 'Genre list',
            'description' => 'List of Genres'
        ];
    }

    public function onRun()
    {
        $this->genres = $this->loadGenres();
    }

    /**
     * @return object
     */
    protected function loadGenres(): object
    {
        return Genre::all();
    }
}