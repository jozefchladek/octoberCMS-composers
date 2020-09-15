<?php namespace Chladek\Composers;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Chladek\Composers\Components\Composers' => 'composers',
            'Chladek\Composers\Components\ComposerDetail' => 'composerDetail',
            'Chladek\Composers\Components\ComposerForm' => 'composerForm'
        ];
    }

    public function registerSettings()
    {
    }
}
