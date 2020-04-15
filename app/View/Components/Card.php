<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    
    public $title;
    public $author;
    public $date;
    public $body;
    public $id;

    public function __construct($title, $author, $date, $body, $id)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->body = $body;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
