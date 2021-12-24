<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class Landing extends Component
{
    public $trending_top  = null;
    public $latest_upload = null;
    public $random_three  = null;

    public function mount()
    {
        session(['title' => 'Homepage']);
        session(['content' => 'Bantay Boto Content']);
        session(['tags' => 'politics,article,latest,blogs']);
        $this->trending_top  = Blog::topTrending();
        $this->latest_upload = Blog::latestUpload();
        $this->random_three  = Blog::randomThree();
    }

    public function render()
    {
        return view('livewire.landing')->layout('layouts.guest');
    }
}
