<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Step extends Component
{
    public $id;
    public $title;
    public $content;

    public function __construct($id, $title, $content)
    {
        $this->id = $id; 
        $this->title = $title;
        $this->content = $content;
    }

    public function render()
    {
        return view('components.step');
    }
}
