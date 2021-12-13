<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogEdit extends Component
{

    public int    $blog_id      = 0;
    public string $title        = '';
    public string $header_img   = '';
    public string $header_video = '';
    public string $content      = '';
    public int    $is_published = 0;
    public string $input_tag    = '';
    public array  $tags         = [];

    public function mount($id)
    {
        $this->blog_id = $id;

        $model = Blog::find($id);

        if (!$model) {
            return redirect()->route('blogs');
        }

        $this->title        = $model->title;
        $this->header_img   = $model->header_img;
        $this->header_video = $model->header_video;
        $this->content      = $model->content;
        $this->is_published = $model->is_published;

        $tags_filtered = array_map(fn($val) => $val['name']['en'], $model->tags()->get()->toArray());

        $this->tags = $tags_filtered;
    }

    public function render()
    {
        return view('livewire.blog-edit');
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
        Blog::where('id', $this->blog_id)
            ->update([
                'header_video' => $this->header_video,
                'header_img'   => $this->header_img,
                'title'        => $this->title,
                'slug'         => $this->title,
                'content'      => $this->content,
                'is_published' => $this->is_published,
                'author'       => auth()->user()->name,
            ]);

        Blog::find($this->blog_id)->syncTags($this->tags);

        return redirect()->route('blogs');
    }

    public function destroy()
    {
        Blog::destroy($this->blog_id);

        return redirect()->route('blogs');
    }
}
