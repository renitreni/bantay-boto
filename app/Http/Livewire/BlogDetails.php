<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetails extends Component
{
    public $details;

    public function mount($id, $year, $slug)
    {
        $this->details = Blog::query()->where('id', $id)->where('slug', $slug)->with(['tags'])->first();
        if(!$this->details) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        seo()->description($this->details->content);
        return view('livewire.blog-details')->layout('layouts.guest');
    }
}
