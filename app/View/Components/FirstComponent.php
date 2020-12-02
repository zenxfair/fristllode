<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FirstComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $list;
    public $message;
    public $title;
    public function __construct($list,$message,$title)
    {
        $this->list = $list;
        $this->message = $message;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.first-component');
    }
}
