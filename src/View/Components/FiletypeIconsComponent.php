<?php

namespace Makkinga\FiletypeIcons;

use Illuminate\View\View;
use Illuminate\View\Component;

class FiletypeIconsComponent extends Component
{
    public $fileType;

    /**
     * FiletypeIconsComponent constructor.
     * 
     * @param string $fileType
     */
    public function __construct(string $fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.textarea-count');
    }
}
