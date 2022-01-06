<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogCreate extends Component
{
    public string $title        = '';
    public string $header_img   = '';
    public string $header_video = '';
    public string $content      = '';
    public int    $is_published = 0;
    public string $input_tag    = '';
    public array  $tags         = [];

    public function render()
    {
        return view('livewire.blog-create');
    }

    public function addTag()
    {
        array_push($this->tags, $this->input_tag);
        $this->input_tag = '';
    }

    public function removeTag($tagged)
    {
        $hold = [];
        foreach ($this->tags as $item) {
            if ($item !== $tagged) {
                array_push($hold, $item);
            }
        }

        $this->tags = $hold;
    }

    public function submit()
    {
        $model = Blog::create([
            'header_video' => $this->header_video,
            'header_img'   => $this->header_img,
            'title'        => $this->title,
            'slug'         => str_slug($this->title),
            'content'      => $this->content,
            'is_published' => $this->is_published,
            'author'       => auth()->user()->name,
        ]);

        $model->attachTags($this->tags);

        return redirect()->route('blogs');
    }
}
