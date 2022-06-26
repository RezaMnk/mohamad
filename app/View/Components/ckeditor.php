<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ckeditor extends Component
{
    public $textAreaId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($textAreaId)
    {
        $this->textAreaId = $textAreaId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ckeditor');
    }
}
