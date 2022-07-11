<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardComics extends Component
{
    public $thumb;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($thumb, $title)
    {
        $this->thumb = $thumb;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card-comics');
    }
}
