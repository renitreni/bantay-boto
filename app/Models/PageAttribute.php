<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageAttribute extends Model
{
    use HasFactory;

    protected $fillable =[
        'section',
        'content',
        'author'
    ];

    public function fetchAbout()
    {
        $result = $this->where('section', 'about')->first();
        if(is_null($result)) {
            $this->create(['section'=>'about', 'content' => 'none', 'author' => 'none']);

            $result = $this->where('section', 'about')->first();
        }

        return $result->content;
    }
}
