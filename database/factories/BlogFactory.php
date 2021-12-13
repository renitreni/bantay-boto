<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->paragraph(1);

        return [
            'header_img'   => 'https://via.placeholder.com/600x250.png',
            'header_video' => '<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FRealRazzieBinx%2Fvideos%2F278526850872905%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>',
            'title'        => $title,
            'slug'         => $title,
            'content'      => $this->faker->paragraph(),
            'is_published' => 1,
            'author'       => $this->faker->name(),
        ];
    }
}
