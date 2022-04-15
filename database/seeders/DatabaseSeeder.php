<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        if ($this->command->confirm('Do you want to refresh the database?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed');
        }
        $this->call([
            UsersTableSeeder::class, 
            BlogPostsTableSeeder::class, 
            CommentsTableSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
        // DB::table('users')->insert([
        //     'name' => 'John Doe',
        //     'email' => 'john@laravel.test',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        //     'remember_token' => Str::random(10)
        // ]);
        // $moh= User::factory(1)->defaultUser()->create();
        
        // $else=User::factory()
        //     ->count(20)
        //     ->create();
            

 // dd(get_class($moh),get_class($else));
            
//  $users = $else->concat($moh);
            
            // $posts = BlogPost::factory()
            // ->count(50)
            // ->make()->each(function($post) use ($users) {
            //     $post->user_id = $users->random()->id;
            //     $post->save();
            // });

            // $comments = Comment::factory()
            // ->count(150)
            // ->make()->each(function($comment) use ($posts) {
            //     $comment->blog_post_id = $posts->random()->id;
            //     $comment->save();
            // });




    }
}