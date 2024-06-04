<?php

namespace Database\Seeders;

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
        \App\Models\Post::factory(3)->create();
        $this->enableForeignKeyCheck();

    }
}
