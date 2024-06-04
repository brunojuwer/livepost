<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Traits\{ForeignKeyCheck, TruncateTable};
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use TruncateTable, ForeignKeyCheck;
   
    public function run(): void
    {
        $this->disableForeignKeyCheck();
        $this->truncate('users');
        \App\Models\User::factory(10)->create();
        $this->enableForeignKeyCheck();
    }
}
