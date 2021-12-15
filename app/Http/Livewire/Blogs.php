<?php

namespace App\Http\Livewire;

use App\Models\PageAttribute;
use Livewire\Component;

class Blogs extends Component
{
    public $about;

    public function mount()
    {
        $this->about = (new PageAttribute())->fetchAbout();
    }

    public function render()
    {
        return view('livewire.blogs');
    }

    public function saveAbout()
    {
        PageAttribute::updateOrCreate(['section' => 'about'],
            ['content' => $this->about, 'author' => auth()->user()->name]);
    }
}
