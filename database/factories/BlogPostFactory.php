<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'content' => $this->faker->paragraph(5, true)
        ];
    }


    public function newTitle()
    {
        return $this->state([
            'title' => 'New title',
            'content' => 'Content of the blog post',
        ]);
    }

    // public static function boot(){
    //     parent::boot();
    //     static::deleting(function (BlogPost $blogPost){
    //         dd('deleted hahaha');
    //     });
    // }
}