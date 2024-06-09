<?php

namespace Database\Seeders;

use Database\Seeders\Traits\{ForeignKeyCheck, TruncateTable};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, ForeignKeyCheck;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeyCheck();
        $this->truncate('comments');
        \App\Models\Comment::factory(30)->create();
        $this->enableForeignKeyCheck();

    }
}
