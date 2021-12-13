<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class Landing extends Component
{
    public $trending_top = null;
    public $latest_upload = null;

    public function mount()
    {
        $this->trending_top = Blog::topTrending();
        $this->latest_upload = Blog::latestUpload();
    }

    public function render()
    {
        return view('livewire.landing')->layout('layouts.guest');
    }
}
