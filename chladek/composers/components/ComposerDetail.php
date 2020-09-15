<?php namespace Chladek\Composers\Components;

use Cms\Classes\ComponentBase;
use Chladek\Composers\Models\Composer;

class ComposerDetail extends ComponentBase
{
    public object $composerDetail;

    /**
     * @return string[]
     */
    public function componentDetails(): array
    {
        return [
            'name' => 'Composer Detail',
            'description' => 'Detail Info about Composer'
        ];
    }

    public function onRun()
    {
        $this->composerDetail = $this->loadComposerDetail($this->param('id'));
    }

    /**
     * @param int $id
     * @return object
     */
    protected function loadComposerDetail(int $id): object
    {
        return Composer::where('id', $id)->get();
    }
}