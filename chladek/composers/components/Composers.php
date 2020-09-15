<?php namespace Chladek\Composers\Components;

use Cms\Classes\ComponentBase;
use Chladek\Composers\Models\Composer;

class Composers extends ComponentBase
{
    public object $composers;

    /**
     * @return string[]
     */
    public function componentDetails(): array
    {
        return [
            'name' => 'Composer List',
            'description' => 'List of Composers'
        ];
    }

    public function onRun()
    {
        $this->composers = $this->loadComposers();
    }

    /**
     * @return object
     */
    protected function loadComposers(): object
    {
        return Composer::all();
    }
}