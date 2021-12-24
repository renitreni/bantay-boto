<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SEOHeader extends Component
{
    public $title;
    public $content;
    public $tags;

    public function render()
    {
        $this->title   = session('title');
        $this->content = session('content');
        $this->tags    = session('tags');
        return view('livewire.s-e-o-header');
    }
}
