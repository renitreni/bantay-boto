<?php

namespace App\Http\Livewire;

use App\Models\PageAttribute;
use Livewire\Component;

class AboutPage extends Component
{

    public function render()
    {
        $about = PageAttribute::where('section', 'about')->first();
        return view('livewire.about-page', compact('about'))->layout('layouts.guest');
    }
}
