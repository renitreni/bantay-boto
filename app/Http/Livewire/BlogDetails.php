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

        session(['title' => $this->details->title]);
        session(['content' => $this->details->content]);
        session(['tags' => implode(',', array_map(fn($value) => $value['name']['en'],$this->details->tags->toArray()))]);
    }

    public function render()
    {
        return view('livewire.blog-details')->layout('layouts.guest');
    }
}
