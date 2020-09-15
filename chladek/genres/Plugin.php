<?php namespace Chladek\Genres;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Chladek\Genres\Components\Genres' => 'genres'
        ];
    }

    public function registerSettings()
    {
    }

}
