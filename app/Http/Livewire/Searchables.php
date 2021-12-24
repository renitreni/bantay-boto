<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use DB;

class Searchables extends Component
{
    public $latest_upload;
    public $keyword;
    public $tags_summary;

    public function mount()
    {
        $this->tags_summary  = DB::table('taggables')
            ->selectRaw('name, count(tag_id) as total')
            ->join('tags', 'tags.id', '=', 'taggables.tag_id')
            ->groupBy('tag_id')
            ->inRandomOrder()
            ->get()
            ->map(function ($tag) {
                return [
                    'name'  => json_decode($tag->name)->en,
                    'count' => $tag->total,
                ];
            });

        $this->latest_upload = Blog::latestUpload();
    }

    public function filter()
    {
        $this->emit('searchCall', $this->keyword);
    }

    public function render()
    {
        return view('livewire.searchables');
    }
}
