<?php namespace Chladek\Composers\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Chladek\Composers\Models\Composer;
use October\Rain\Support\Facades\Flash;

class ComposerForm extends ComponentBase
{

    /**
     * @return string[]
     */
    public function componentDetails() : array
    {
        return [
            'name' => 'Composer Form',
            'description' => 'Enter Composer'
        ];
    }


    /**
     * @return mixed
     */
    public function onSave()
    {
        $composer = new Composer();
        $composer->name = Input::get('name');
        $composer->genre = Input::get('genre');
        $composer->born_year = Input::get('born_year');
        $composer->death_year = Input::get('death_year');
        $composer->description = Input::get('description');
        $composer->save();
        Flash::success('Composer Created');
        Flash::error('Errror');
        return Redirect::back();
    }
}