<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogList extends Component
{
    public $search;

    protected $queryString = ['search'];
    protected $listeners   = ['searchCall'];


    public function render()
    {
        session(['title' => 'Blogs']);
        session(['content' => 'List of Posted Blogs']);
        session(['tags' => 'bantay boto,blog,list']);

        $articles = Blog::query()->with(['tags'])
            ->when($this->search != '', function ($q) {
                $q->where('title', 'like', "%$this->search%");
            })->orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.blog-list', compact('articles'))->layout('layouts.guest');
    }

    public function searchCall($keyword)
    {
        return redirect()->route('home.blog', ['search' => $keyword]);
    }
}
