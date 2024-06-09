<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Database\Seeders\Traits\{ForeignKeyCheck, TruncateTable};
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, ForeignKeyCheck;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeyCheck();
        $this->truncate('posts');
        $posts = \App\Models\Post::factory(3)->create();

        $posts->each(function(Post $post) {
            $post->users()->sync([rand(1, User::count())]);
        });

        $this->enableForeignKeyCheck();

    }
}
