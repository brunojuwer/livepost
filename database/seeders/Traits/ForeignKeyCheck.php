<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait ForeignKeyCheck 
{
  protected function disableForeignKeyCheck()
  {
    // DB::statement('SET FOREIGN_KEY_CHECKS=0');
    DB::statement('PRAGMA foreign_keys = OFF');
  }
  
  protected function enableForeignKeyCheck()
  {
    DB::statement('PRAGMA foreign_keys = ON');
    // DB::statement('SET FOREIGN_KEY_CHECKS=1');
  }

}